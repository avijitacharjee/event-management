<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use App\Models\TicketCoupon;
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
        $ticket = $temp->ticketPrice->ticket;
        $coupons = $temp->ticketPrice->ticket->coupons;
        return $this->succeededResponse(
            [
                'booking' => $booking,
                'event' => $event,
                'ticket' => $ticket,
                'coupons' => $coupons
            ],
            "Booking is valid"
        );
    }
    public function changeBookingStatus(Booking $booking, $status)
    {
        $booking->status = $status=="null"?null:$status;
        $booking->save();
        return $this->succeededResponse(
            $booking,
            "Successfully Changed"
        );
    }
    public function changeCouponStatus(TicketCoupon $coupon,int $status){
        $coupon->done = $status;
        $coupon->save();
        return $this->succeededResponse($coupon, "Successfully Changed");
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
