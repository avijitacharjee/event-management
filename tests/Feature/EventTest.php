<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\EventVenue;
use App\Models\User;
use DateTime;
use GuzzleHttp\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class EventTest extends TestCase
{
    public function testStoreOnline(): void
    {
        $isOnline = true;
        $dateTime = fake()->dateTimeBetween('+1 week', '+1 month');

        $imageUrl = (new Client(['allow_redirects' => ['track_redirects' => true]]))
            ->get("https://picsum.photos/640/360")
            ->getHeader(\GuzzleHttp\RedirectMiddleware::HISTORY_HEADER)[0];
        $image = file_get_contents($imageUrl);
        $imageName = (new DateTime())->format('y-m-d-H-i-s-u-') . str()->random(5) . '.jpg';
        Storage::put('public/event/' . $imageName, $image);
        $uploadedImage = new UploadedFile('storage/app/public/event/' . $imageName, 'abc.jpg');
        $dateFormat = "Y-m-d H:i:s";

        $data = [
            'name' => fake()->unique()->sentence(),
            'date_time' => $dateTime->format($dateFormat),
            'duration' => rand(1, 6) * 30,
            'category' => str('Arts')->snake()->value(),
            'image' => $uploadedImage,
            'description' => fake()->text(),
            'template_id' => 'standard webinar',
            'ticket_price' => rand(1, 5) * 100.0,
            'currency' => 'BDT',
            'number_of_tickets' => rand(1,  5) * 100,
            'discount' => 0.0,
            'discount_type' => 'Percentage',
            'discount_ends_at' => (clone $dateTime)->modify('-1day')->format($dateFormat),
            'booking_starts_at' => (clone $dateTime)->modify('now')->format($dateFormat),
            'booking_ends_at' => $dateTime->format($dateFormat),
            'refund_policy' => fake()->text(),
            'ticket_instruction' => fake()->text(),
            'tags' => fake()->word(),
            'type' => $isOnline ? 'online' : 'offline',
            'event_venue_id' => null,
        ];
        $this->actingAs(User::first())->post(url('event/create-online'), $data)
            ->assertFound();
        Storage::delete('public/event/' . $imageName);
    }

    public function testStoreOffline(): void
    {
        $isOnline = false;
        $d = [
            'name'=>fake()->word(),
            'address_line_1'=>fake()->streetAddress(),
            'address_line_2'=>fake()->city(),
            'country'=>fake()->country(),
            'state'=>fake('en_US')->state(),
            'city'=>fake()->city(),
            'zip_code'=>rand(1000,9999),
        ];
        $dateTime = fake()->dateTimeBetween('+1 week', '+1 month');
        $dateFormat = "Y-m-d H:i:s";

        $data = [
            'name' => fake()->unique()->sentence(),
            'date_time' => $dateTime->format($dateFormat),
            'duration' => rand(1, 6) * 30,
            'category' => str('Arts')->snake()->value(),
            'image' => (new Client(['allow_redirects' => ['track_redirects' => true]]))
                ->get("https://picsum.photos/640/360")
                ->getHeader(\GuzzleHttp\RedirectMiddleware::HISTORY_HEADER)[0],
            'description' => fake()->text(),
            'template_id' => 'standard webinar',
            'ticket_price' => rand(1, 5) * 100.0,
            'currency' => 'BDT',
            'number_of_tickets' => rand(1,  5) * 100,
            'discount' => 0.0,
            'discount_type' => 'Percentage',
            'discount_ends_at' => (clone $dateTime)->modify('-1day')->format($dateFormat),
            'booking_starts_at' => (clone $dateTime)->modify('now')->format($dateFormat),
            'booking_ends_at' => $dateTime->format($dateFormat),
            'refund_policy' => fake()->text(),
            'ticket_instruction' => fake()->text(),
            'tags' => fake()->word(),
            'type' => $isOnline ? 'online' : 'offline',
            'event_venue_id' => $eventVenue->id,
        ];
        $this->actingAs(User::first())->post(url('event/create-offline'), $data)
            ->assertFound();
    }
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
    public function testCreateNewPage(): void
    {
        $this->get(url('event/create-new'))
            ->assertStatus(Response::HTTP_OK);
    }
    public function testCreateOnlinePage(): void
    {
        $this->get(url('event/create-online'))->assertStatus(Response::HTTP_OK);
    }
    public function testCreateOfflinePage(): void
    {
        $this->get(url('event/create-offline'))->assertStatus(Response::HTTP_OK);
    }



}
