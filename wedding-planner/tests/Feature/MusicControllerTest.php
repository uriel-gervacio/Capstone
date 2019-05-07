<?php

namespace Tests\Feature;

use App\User;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MusicControllerTest extends TestCase
{
    
    use WithFaker, RefreshDatabase;

     /* Staff CRUD */

    /** @test */
    public function a_member_of_parish_staff_can_create_a_song()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create(['type' => User::ADMIN_TYPE]));
        $attributes = factory('App\Music')->raw();
        $this->get('/music/create')->assertStatus(200);
        $response = $this->post('/music/create', $attributes);
        $response->assertStatus(302);
        $this->assertDatabaseHas('musics', $attributes);
    }

    /** @test */
    public function a_member_of_parish_staff_can_edit_song_details()
    {
        $this->actingAs(factory('App\User')->create(['type' => User::ADMIN_TYPE]));
        $music = factory('App\Music')->create();
        $this->get('/music/edit/'. $music->id)->assertStatus(200);
    }
    
    /** @test */
    public function a_member_of_parish_staff_can_update_a_song()
    {
        $this->actingAs(factory('App\User')->create(['type' => User::ADMIN_TYPE]));
        $music = factory('App\Music')->create();
        $attributes = [ 'songTitle' => 'Ave Maria',
                        'type' => 'Opening',
                        'url' => 'https://www.dom.edu',];
        $this->patch('/music/' . $music->id, $attributes)->assertStatus(302);
    }
    
    /** @test */
    public function a_member_of_parish_staff_can_delete_a_song()
    {
        $this->actingAs(factory('App\User')->create(['type' => User::ADMIN_TYPE]));
        $music = factory('App\Music')->create();
        $this->delete('/music/' . $music->id)->assertStatus(302);
    }


    /* Couple CRUD */
    
    /** @test */
     public function a_couple_cannot_create_a_song()
     {   
         $this->actingAs(factory('App\User')->create(['type' => User::DEFAULT_TYPE]));
 
         $attributes = factory('App\Music')->raw();
         $this->post('/music/create')->assertStatus(403);
     }
 
     /** @test */
     public function a_couple_cannot_edit_music_details()
     {
         $this->actingAs(factory('App\User')->create(['type' => User::DEFAULT_TYPE]));
 
         $music = factory('App\Music')->create();
 
         $this->get('/music/edit/'. $music->id)->assertStatus(403);
     }
 
     /** @test */
     public function a_couple_cannot_update_a_song()
     {
         $this->actingAs(factory('App\User')->create(['type' => User::DEFAULT_TYPE]));
 
         $music = factory('App\Music')->create();
 
         $attributes = ['songTitle' => 'Testing',
                       'type' => 'Testing',
                       'url'=> 'Testing'];
 
         $this->patch('/music/' . $music->id, $attributes)->assertStatus(403);
     }
    
     /** @test */
    public function a_couple_cannot_delete_a_reading()
    {
        $this->actingAs(factory('App\User')->create(['type' => User::DEFAULT_TYPE]));
        $music= factory('App\Music')->create();
        $this->delete('/music/' . $music->id)->assertStatus(403);
    }

}
