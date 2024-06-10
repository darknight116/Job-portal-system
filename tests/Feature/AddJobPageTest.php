<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\models\User;

class AddJobPageTest extends TestCase
{
    /**
     * A basic feature test example.
     
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    */

    public function test_form_opens_for_authorized_user(): void
    {
       // $user = User::factory()->create();

       //factory(10) here 10 is count that means how many user need to create test environment ma 
       //fake data create garxa factory le
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/add_job');//fake data 
        $response->assertStatus(200);    //200 le verify gare ko xa page loading or not
    }

    public function test_form_does_not_open_for_guest()
    {
        $response = $this->get('/add_job');
        $response ->assertRedirect('/login');
        $response->assertSeeText('Please log in to access jobs!!');
        $response->assertStatus(302); 
    }

    public function test_form_does_not_opens_for_normal_authorized_user(): void
    {
       // $user = User::factory()->create();

       //factory(10) here 10 is count that means how many user need to create test environment ma 
       //fake data create garxa factory le
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/add_job'); 
        $response->assertStatus(200);    //200 le verify gare ko xa page loading or not
    }

    public function test_form_opens_for_company_authorized_user(): void
    {
       // $user = User::factory()->create();

       //factory(10) here 10 is count that means how many user need to create test environment ma 
       //fake data create garxa factory le
        $user = User::factory()->create([
           'role' =>2
        ]);
        $response = $this->actingAs($user)->get('/add_job');//fake data 
        $response->assertStatus(200);    //200 le verify gare ko xa page loading or not
    }

    public function test_form_submits_for_valid_data()
    {
        $user = User::factory()->create([
            'role' =>2
         ]);
        
         //data actualy from form
         $data = [
            'category' => '',
            'title' => '',
            'tescription' => '',
            'talary' => '',
            'type' =>  '',
            'deadline' => '',
            'photo' =>  ''       
        ];

         $response = $this->post('/add_job', $data);
         $response->assertRedirect('/dashboard');
         $response = $this->get('/dashboard');
         $response->assertSeeText('Job create successfully');
}
}
