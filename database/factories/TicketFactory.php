<?php

namespace Database\Factories;

use FontLib\Table\Type\name;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'template_name' => 'concert',
            'num_of_tickets' => 100,
            'description' => fake()->sentence(),
            'logo' => (new Client(['allow_redirects' => ['track_redirects' => true]]))
                ->get("https://picsum.photos/640/360")
                ->getHeader(\GuzzleHttp\RedirectMiddleware::HISTORY_HEADER)[0],
        ];
    }
}
