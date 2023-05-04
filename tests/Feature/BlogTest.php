<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testBlogsPage(): void
    {
        $response = $this->get('/blogs');

        $response->assertStatus(200);
    }
}
