<?php

namespace Database\Factories;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $content = '';
        for ($i = 0; $i < rand(4, 6); $i++) {
            $content .= '<h2>' . fake()->sentence() . '</h2><p>' . fake()->text(700) . '<p>';
        }
        return [
            'user_id' => $user->id,
            'author' => $user->name,
            'title' => fake()->sentence(),
            'image' => (new Client(['allow_redirects' => ['track_redirects' => true]]))
                ->get("https://picsum.photos/640/360")
                ->getHeader(\GuzzleHttp\RedirectMiddleware::HISTORY_HEADER)[0],
            'content' => $content,
        ];
    }
}
