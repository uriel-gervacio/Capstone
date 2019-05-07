<?php

namespace Tests\Feature;

use App\User;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReadingControllerTest extends TestCase
{

    use WithFaker, RefreshDatabase;

    /* Staff CRUD */

    /** @test */
    public function a_member_of_parish_staff_can_create_a_reading()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create(['type' => User::ADMIN_TYPE]));

        $attributes = factory('App\Reading')->raw();

        $this->get('/readings/create')->assertStatus(200);

        $response = $this->post('/readings/create', $attributes);

        $response->assertStatus(302);
        $this->assertDatabaseHas('readings', $attributes);
    }

    /** @test */
    public function a_member_of_parish_staff_can_edit_reading_details()
    {
        $this->actingAs(factory('App\User')->create(['type' => User::ADMIN_TYPE]));

        $reading = factory('App\Reading')->create();

        $this->get('/readings/edit/'. $reading->id)->assertStatus(200);
    }

    /** @test */
    public function a_member_of_parish_staff_can_update_a_reading()
    {
        $this->actingAs(factory('App\User')->create(['type' => User::ADMIN_TYPE]));

        $reading = factory('App\Reading')->create();

        $attributes = ['Text' => 'Testing',
                      'Title' => 'Testing',
                      'BibleVerse'=> 'Testing'];

        $this->patch('/readings/' . $reading->id, $attributes)->assertStatus(302);
    }
    
    /** @test */
    public function a_member_of_parish_staff_can_delete_a_reading()
    {
        $this->actingAs(factory('App\User')->create(['type' => User::ADMIN_TYPE]));

        $reading = factory('App\Reading')->create();

        $this->delete('/readings/' . $reading->id)->assertStatus(302);
    }

    /* Couple CRUD */

     /** @test */
     public function a_couple_cannot_create_a_reading()
     {   
         $this->actingAs(factory('App\User')->create(['type' => User::DEFAULT_TYPE]));
 
         $attributes = factory('App\Reading')->raw();

         $this->post('/readings/create')->assertStatus(403);
     }
 
     /** @test */
     public function a_couple_cannot_edit_reading_details()
     {
         $this->actingAs(factory('App\User')->create(['type' => User::DEFAULT_TYPE]));
 
         $reading = factory('App\Reading')->create();
 
         $this->get('/readings/edit/'. $reading->id)->assertStatus(403);
     }
 
     /** @test */
     public function a_couple_cannot_update_a_reading()
     {
         $this->actingAs(factory('App\User')->create(['type' => User::DEFAULT_TYPE]));
 
         $reading = factory('App\Reading')->create();
 
         $attributes = ['Text' => 'Testing',
                       'Title' => 'Testing',
                       'BibleVerse'=> 'Testing'];
 
         $this->patch('/readings/' . $reading->id, $attributes)->assertStatus(403);
     }

    /** @test */
    public function a_couple_cannot_delete_a_reading()
    {
        $this->actingAs(factory('App\User')->create(['type' => User::DEFAULT_TYPE]));

        $reading = factory('App\Reading')->create();

        $this->delete('/readings/' . $reading->id)->assertStatus(403);
    }
}
