<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_login_view(): void
    {
        $response = $this->get('/sign-in');

        $response->assertViewIs('public.sign-in')->assertStatus(200);
    }

    public function test_login_post_method(): void
    {
        $this->post('/sign-in', [
            'email' => 'avijitach@gmail.com',
            'password' => '654321'
        ])->assertStatus(Response::HTTP_FOUND)->assertRedirect('/');

        $this->post('/sign-in', [
            'email' => null,
            'password' => null,
        ])->assertStatus(Response::HTTP_FOUND)
            ->assertRedirect(session()->previousUrl())
            ->assertFound();
    }
    public function test_register_view(): void
    {
        $response = $this->get('/sign-up');

        $response->assertViewIs('public.sign-up')->assertStatus(200);
    }

    public function test_register_post_method(): void
    {
        $this->post('/sign-up', [
            'email' => fake()->unique()->email(),
            'password' => '654321'
        ])->assertStatus(Response::HTTP_FOUND)->assertRedirect('/');

        $this->post('/sign-up', [
            'email' => null,
            'password' => null,
        ])->assertStatus(Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
