<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
class HomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_page_opens(): void
    {
        $response = $this->get('/');
        $response->assertSeeText('Log in');
        $response->assertStatus(200);
        //200 le verify gare ko xa page loading or not
    }

    public function test_page_opens_for_authorized_user(): void
    {
       // $user = User::factory()->create();

       //factory(10) here 10 is count that means how many user need to create test environment ma 
       //fake data create garxa factory le
        $user = User::factory()->create([
            'password' => 'abc'
        ]);

        $response = $this->actingAs($user)->get('/');//fake data 
        $response->assertDontSeeText('Log in');//donot see text means user login test
        $response->assertSeeText('Dashboard');
        $response->assertStatus(200);
        //200 le verify gare ko xa page loading or not
    }
}
