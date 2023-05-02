<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\EventVenue;
use App\Models\User;
use DateTime;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Arts',
            'Business',
            'Coaching and Consulting',
            'Community and Culture',
            'Entrepreneurship',
            'Education and Training',
            'Family and Friends',
            'Fashion and Beauty',
            'Film and Entertainment',
            'Food and Drink',
            'Government and  Politics',
            'Health and Wellbeing',
            'Hobbies and Interest',
            'Music and Theater',
            'Religion and Spirituality',
            'Science and Technology',
            'Sports and Fitness',
            'Travel and Outdoor',
            'Visual Arts',
            'Others',
        ];
        $isOnline = fake()->boolean();
        if(!$isOnline){
            $eventVenue = EventVenue::factory()->createOne();
        }
        $dateTime = fake()->dateTimeBetween('+1 week', '+1 month');

        return [
            'name' => fake()->unique()->sentence(),
            'date_time' => $dateTime,
            'duration' => rand(1, 6)*30,
            'category'=>str($categories[array_rand($categories)])->snake()->value(),
            'image' => (new Client(['allow_redirects' => ['track_redirects' => true]]))
                ->get("https://picsum.photos/640/360")
                ->getHeader(\GuzzleHttp\RedirectMiddleware::HISTORY_HEADER)[0],
            'description' => fake()->text(),
            'template_id' => 'standard webinar',
            'ticket_price' => rand(1,5)*100.0,
            'currency' => 'BDT',
            'number_of_tickets' => rand(1, 5) * 100,
            'discount' => 0.0,
            'discount_type' => 'Percentage',
            'discount_ends_at' =>(clone $dateTime)->modify('-1day'),
            'booking_starts_at' => (clone $dateTime)->modify('now'),
            'booking_ends_at' => $dateTime,
            'refund_policy' => fake()->text(),
            'ticket_instruction' => fake()->text(),
            'tags' => fake()->word(),
            'type' => $isOnline?'online':'offline',
            'event_venue_id'=>$isOnline?null:$eventVenue->id,
            'user_id' => User::inRandomOrder()->first()->id
        ];
    }
}
