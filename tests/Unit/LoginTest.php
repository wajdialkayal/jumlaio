<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class LoginTest extends TestCase
{
    public function test_user_can_view_a_login_form()
    {
        $response = $this->get('/login');

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    // public function test_user_cannot_view_a_login_form_when_authenticated()
    // {
    //     $user = User::factory()->make();
        
    //     $response = $this->actingAs($user)->get('/login');

    //     $response->assertRedirect('/');
    // }

    // public function test_user_can_login_with_correct_credentials()
    // {
    //     $user = User::factory()->create([
    //         'password' => bcrypt($password = 'password'),
    //     ]);

    //     $response = $this->post('/login', [
    //         'email' => $user->email,
    //         'password' => $password,
    //     ]);

    //     $response->assertRedirect('/');
    //     $this->assertAuthenticatedAs($user);
    // }

    // public function test_user_cannot_login_with_incorrect_password()
    // {
    //     $user = User::factory()->create([
    //         'password' => bcrypt('password'),
    //     ]);
        
    //     $response = $this->from('/login')->post('/login', [
    //         'email' => $user->email,
    //         'password' => 'invalid-password',
    //     ]);
        
    //     $response->assertRedirect('/login');
    //     $response->assertSessionHasErrors('email');
    //     $this->assertTrue(session()->hasOldInput('email'));
    //     $this->assertFalse(session()->hasOldInput('password'));
    //     $this->assertGuest();
    // }


    // public function test_remember_me_functionality()
    // {
    //     $user = User::factory()->create([
    //         'id' => random_int(1, 100),
    //         'password' => bcrypt($password = 'password'),
    //     ]);
        
    //     $response = $this->post('/login', [
    //         'email' => $user->email,
    //         'password' => $password,
    //         'remember' => 'on',
    //     ]);
        
    //     $response->assertRedirect('/');
    //     // cookie assertion goes here
    //     $this->assertAuthenticatedAs($user);
    // }


    // public function test_user_receives_an_email_with_a_password_reset_link()
    // {
    //     Notification::fake();
      
    //     $user = User::factory()->create();
      
    //     $response = $this->post('/password/email', [
    //         'email' => $user->email,
    //     ]);
    //     $token = DB::table('password_resets')->first();
    //     // assertions go here
    //     $this->assertNotNull($token);
    // }

}
