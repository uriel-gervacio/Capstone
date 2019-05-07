<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /** @test */
    public function a_logged_in_parish_staff_user_can_see_the_homepage()
    {
        $this->actingAs(factory('App\User')->create(['type' => User::ADMIN_TYPE]));
        $this->followingRedirects()->get('/home')->assertStatus(200)->
            assertSee('St Juliana Parish Wedding Record Application');
    }

    /** @test */
    public function unauthenticated_users_see_login()
    {
        $this->get('/home')->assertStatus(302)->
        assertSee('login');
    }
}
