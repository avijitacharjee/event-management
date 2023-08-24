<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all();
        return $this->succeededResponse($events, 'All events');
    }
    public function getInfoByBookingId(int $id)
    {
        $booking = Booking::find($id);
        if (!$booking) {
            return $this->failedResponse(null, "This booking is invalid");
        }
        $temp = clone $booking;
        $event = $temp->ticketPrice->ticket->event;
        return $this->succeededResponse(
            [
                'booking' => $booking,
               'event' => $event
            ],
            "Booking is valid"
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
