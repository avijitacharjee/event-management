<?php

namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class EventTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_index_page(): void
    {
        $response = $this->get('/');

        $response->assertStatus(Response::HTTP_OK)->assertSee('BDT');
    }
    public function test_explore_events_page(): void
    {
        $this->get('/event/explore-events')
            ->assertStatus(Response::HTTP_OK)
            ->assertSee('Discover')
            ->assertViewIs('public.explore-events');
    }
    public function test_explore_events_single(): void
    {
        $this->get('/event/event-single/' . Event::first()->id)
            ->assertStatus(Response::HTTP_OK)
            ->assertSee('More Events');
    }
    public function testCheckoutPage(): void
    {
        $this->get(url('event/checkout'))
            ->assertStatus(Response::HTTP_OK);
    }
    public function testCreateNewPage():void
    {
        $this->get(url('event/create-new'))
            ->assertStatus(Response::HTTP_OK);
    }
    public function testCreateOnlinePage():void
    {
        $this->get(url('event/create-online'))->assertStatus(Response::HTTP_OK);
    }
    public function testCreateOfflinePage(): void
    {
        $this->get(url('event/create-offline'))->assertStatus(Response::HTTP_OK);
    }
    public function testStoreOnline(): void
    {
        $data = [];
        // $this->post();
    }
}
