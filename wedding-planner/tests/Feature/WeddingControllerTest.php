<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WeddingControllerTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** Guest and Couple Views */

    /** @test */
    public function a_guest_cannot_visit_create_wedding_page()
    {
        $this->get('/weddings/create')->assertSee('login');
    }

    /** @test */
    public function a_couple_cannot_visit_create_wedding_page()
    {
        $this->actingAs(factory('App\User')->create(['type' => User::DEFAULT_TYPE]));

        $this->get('/weddings/create')->assertSee(403);
    }

    /** @test */
    public function a_guest_cannot_visit_search_wedding_page()
    {
        $this->get('/weddings/search')->assertSee('login');
    }

     /** @test */
     public function a_couple_cannot_visit_search_wedding_page()
     {
         $this->actingAs(factory('App\User')->create(['type' => User::DEFAULT_TYPE]));
 
         $this->get('/weddings/search')->assertSee(403);
     }

    /** @test */
    public function a_guest_cannot_visit_music_page()
    {
        $this->get('/music/index')->assertSee('login');
    }

    /** @test */
    public function a_couple_cannot_visit_music_page()
    {
        $this->actingAs(factory('App\User')->create(['type' => User::DEFAULT_TYPE]));
 
        $this->get('/music/index')->assertSee(403);
    }

    /** @test */
    public function a_guest_cannot_visit_readings_page()
    {
        $this->get('/readings')->assertSee('login');
    }

     /** @test */
     public function a_couple_cannot_visit_readings_page()
     {
        $this->actingAs(factory('App\User')->create(['type' => User::DEFAULT_TYPE]));
 
        $this->get('/readings')->assertSee(403);
     }
    

    /** @test */
    public function a_guest_cannot_visit_admin_page()
    {
        $this->get('/admin')->assertSee('login');
    }


    /** Couple Wedding CRUD **/

    /** @test */
    public function a_couple_cannot_create_a_wedding_record()
    {
        $this->actingAs(factory('App\User')->create(['type' => User::DEFAULT_TYPE]));

        $attributes = factory('App\Wedding')->raw();

        $this->post('/weddings/create', $attributes)->assertStatus(403);
    }

    /** @test */
    public function a_bride_can_only_update_her_wedding()
    {
        $user = factory('App\User')->create(['type' => User::DEFAULT_TYPE]);
        $this->actingAs($user);
        $wedding = factory('App\Wedding')->create(['brideEmail' => $user->email]);
        $attributes = ['participant' => [], 'usher' => []];

        $this->patch('/weddings/details/' . $wedding->id, $attributes)->assertStatus(302);
    }

    /** @test */
    public function a_groom_can_only_update_her_wedding()
    {
        $user = factory('App\User')->create(['type' => User::DEFAULT_TYPE]);
        $this->actingAs($user);
        $wedding = factory('App\Wedding')->create(['brideEmail' => $user->email]);
        $attributes = ['participant' => [], 'usher' => []];

        $this->patch('/weddings/details/' . $wedding->id, $attributes)->assertStatus(302);
    }

    /** @test */
    public function a_couple_cannot_update_another_wedding()
    {
        $user = factory('App\User')->create(['type' => User::DEFAULT_TYPE]);
        $this->actingAs($user);
        $wedding = factory('App\Wedding')->create();
        $attributes = ['participant' => [], 'usher' => []];

        $this->patch('/weddings/details/' . $wedding->id, $attributes)->assertStatus(403);
    }

     /** @test */
     public function a_couple_cannot_delete_a_wedding()
     {
        $this->actingAs(factory('App\User')->create(['type' => User::DEFAULT_TYPE]));

        $wedding = factory('App\Wedding')->create();

        $this->delete('/weddings/details/' . $wedding->id)->assertStatus(403);
     }


    /** Staff Wedding Details CRUD **/

    /** @test */
    public function a_wedding_record_can_be_created()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create(['type' => User::ADMIN_TYPE]));

        $attributes = factory('App\Wedding')->raw();

        $this->get('/weddings/create')->assertStatus(200);

        $response = $this->post('/weddings/create', $attributes);

        $response->assertStatus(302);
        $this->assertDatabaseHas('weddings', $attributes);
    }

    /** @test */
    public function a_logged_in_parish_staff_user_can_visit_create_wedding_page()
    {
        $this->actingAs(factory('App\User')->create(['type' => User::ADMIN_TYPE]));

        $this->get('/weddings/create')->assertStatus(200)->
        assertSee('Create Wedding Record')->
        assertSee('<input type="text" class="form-control" id="brideFirstName" name="brideFirstName" placeholder="First Name" pattern="^[a-zA-Z]{1,50}$" required>')->
        assertSee('<input type="text" class="form-control" id="groomFirstName" name="groomFirstName" placeholder="First Name" pattern="^[a-zA-Z]{1,50}$" required>')->
        assertSee('<input type="text" class="form-control" id="brideLastName" name="brideLastName" placeholder="Last Name" pattern="^[a-zA-Z]{1,50}$" required>')->
        assertSee('<input type="text" class="form-control" id="groomLastName" name="groomLastName" placeholder="Last Name" pattern="^[a-zA-Z]{1,50}$" required>')->
        assertSee('<input type="text" class="form-control" id="brideAddress" name="brideAddress" placeholder="Address" required>')->
        assertSee('<input type="text" class="form-control" id="groomAddress" name="groomAddress" placeholder="Address" required>')->
        assertSee('<input type="text" class="form-control" id="brideCity" name="brideCity" placeholder="City" required>')->
        assertSee('<input type="text" class="form-control" id="groomCity" name="groomCity" placeholder="City" required>')->
        assertSee('<input type="text" class="form-control" id="brideZipCode" name="brideZipCode" pattern="(\d{5}([\-]\d{4})?)" placeholder="ex: 60513" required>')->
        assertSee('<input type="text" class="form-control" id="groomZipCode" name="groomZipCode" pattern="(\d{5}([\-]\d{4})?)" placeholder="ex: 60513" required>')->
        assertSee('<input type="email" class="form-control" id="brideEmail" name="brideEmail" placeholder="Email" required>')->
        assertSee('<input type="email" class="form-control" id="groomEmail" name="groomEmail" placeholder="Email" required>')->
        assertSee('<input type="text" class="form-control" id="bridePhoneNumber" name="bridePhoneNumber" pattern="^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$" placeholder="ex: (123)456-7890" required>')->
        assertSee('<input type="text" class="form-control" id="groomPhoneNumber" name="groomPhoneNumber" pattern="(^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$)" placeholder="ex:(123)-456-7890" required>')->
        assertSee('<input type="text" class="form-control" id="weddingDate" name="weddingDate" required>')->
        assertSee('<input type="time" class="form-control" id="weddingTime" name="weddingTime" required>')->
        assertSee('<input type="text" class="form-control" id="rehearsalDate" name="rehearsalDate">')->
        assertSee('<input type="time" class="form-control" id="rehearsalTime" name="rehearsalTime">');
    }

    /** @test */
    public function parish_staff_can_update_any_wedding()
    {
        $user = factory('App\User')->create(['type' => User::ADMIN_TYPE]);
        $this->actingAs($user);
        $wedding = factory('App\Wedding')->create();
        $attributes = ['participant' => [], 'usher' => []];

        $this->patch('/weddings/details/' . $wedding->id, $attributes)->assertStatus(302);
    }

      /** @test */
     public function parish_staff_can_delete_a_wedding()
     {
        $user = factory('App\User')->create(['type' => User::ADMIN_TYPE]);
        $this->actingAs($user);
        $wedding = factory('App\Wedding')->create();

        $this->delete('/weddings/details/' . $wedding->id)->assertStatus(302);
     }

}
