<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\TicketPrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::factory()->count(6)->create()->each(function ($event) {
            Ticket::factory()->count(1)->create(['event_id' => $event->id])->each(function ($ticket) {
                if ((bool) mt_rand(0, 1)) {
                    TicketPrice::factory()->count(1)->create([
                        'ticket_id' => $ticket->id,
                        'from_age' => 0,
                        'to_age' => 10
                    ]);
                    TicketPrice::factory()->count(1)->create([
                        'ticket_id' => $ticket->id,
                        'from_age' => 11,
                        'to_age' => 50
                    ]);
                    TicketPrice::factory()->count(1)->create([
                        'ticket_id' => $ticket->id,
                        'from_age' => 51,
                        'to_age' => 100
                    ]);
                }else {
                    TicketPrice::factory()->count(1)->create([
                        'ticket_id' => $ticket->id,
                    ]);
                }
            });
        });
    }
}
