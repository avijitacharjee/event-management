<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Checkout;
use App\Models\EventVenue;
use App\Models\TicketPrice;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    public function createNew()
    {
        return view('public.create-new');
    }
    public function createOnline()
    {
        return view('public.create-online');
    }
    public function storeOnline(Request $request)
    {
        $event = new Event();
        $event->name = $request->event_name;
        $event->category = $request->event_category;
        $event->date_time = $this->getDateTime($request->date, $request->time);
        $event->duration = $request->duration;
        $event->image = null;
        if ($request->hasFile('image')) {
            $event->image = 'storage/' . $request->file('image')->store(
                'event',
                'public'
            );
        }
        $event->description = $request->description;
        $event->template_id = $request->template_id;
        $event->ticket_price = $request->ticket_price;
        $event->currency = $request->currency;
        $event->number_of_tickets = $request->number_of_tickets;
        $event->discount = $request->discount;
        $event->discount_type = $request->discount_type;
        $event->discount_ends_at = $this->getDateTime($request->discount_end_date, $request->discount_end_time);
        $event->booking_starts_at = $this->getDateTime($request->booking_start_date, $request->booking_start_time);
        $event->booking_ends_at = $this->getDateTime($request->booking_end_date, $request->booking_end_time);
        $event->refund_policy = $request->refund_policy_id;
        $event->ticket_instruction = $request->ticket_instructions;
        $event->tags = $request->tags;
        $event->user_id = auth()->user()->id;
        $event->save();
        return back()->with('msg', 'Successfully Added');
    }
    public function createOffline()
    {
        return view('public.create-offline');
    }
    public function storeOffline(Request $request)
    {

        $eventVenue = new EventVenue();
        $eventVenue->name = $request->venue_name;
        $eventVenue->address_line_1 = $request->address_line_1;
        $eventVenue->address_line_2 = $request->address_line_2;
        $eventVenue->country = $request->country;
        $eventVenue->state = $request->state;
        $eventVenue->city = $request->city;
        $eventVenue->zip_code = $request->zip_code;
        $eventVenue->save();

        $event = new Event();
        $event->user_id = auth()->user()->id;
        $event->name = $request->event_name;
        // $event->category = str($request->event_category)->lower()->replace(' ','_')->value();
        $event->category = str($request->event_category)->snake()->value();
        $event->date_time = $this->getDateTime($request->date, $request->time);
        $event->duration = $request->duration;
        $event->image = null;
        if ($request->hasFile('image')) {
            $event->image = 'storage/' . $request->file('image')->store(
                'event',
                'public'
            );
        }
        $event->description = $request->description;
        $event->template_id = $request->template_id;
        $event->ticket_price = $request->ticket_price;
        $event->currency = $request->currency;
        $event->number_of_tickets = $request->number_of_tickets;
        $event->discount = $request->discount;
        $event->discount_type = $request->discount_type;
        $event->discount_ends_at = $this->getDateTime($request->discount_end_date, $request->discount_end_time);
        $event->booking_starts_at = $this->getDateTime($request->booking_start_date, $request->booking_start_time);
        $event->booking_ends_at = $this->getDateTime($request->booking_end_date, $request->booking_end_time);
        $event->refund_policy = $request->refund_policy_id;
        $event->ticket_instruction = $request->ticket_instructions;
        $event->tags = $request->tags;
        $event->event_venue_id = $eventVenue->id;
        $event->type = "offline";
        $event->save();
        return back()->with('msg', 'Successfully Added');
    }
    public function getDateTime($dateString, $timeString)
    {
        $dateTime = new DateTime($dateString . $timeString);
        return $dateTime;
    }
    public function getTime($timeString)
    {
        return date('H:i:s', strtotime($timeString));
    }

    public function exploreEvents()
    {
        $events = Event::all();
        $featuredEvents = Event::take(10)->get();
        return view('public.explore-events')
            ->with('events', $events)
            ->with('featuredEvents', $featuredEvents);
    }
    public function show(Event $event)
    {
        $moreEvents = Event::latest()->take(5)->get();
        $prices = $event->tickets->count() ? $event->tickets->get(0)?->prices : null;
        return view('public.event-single', compact([
            'event',
            'moreEvents',
            'prices'
        ]));
    }

    public function checkout()
    {
        return view('public.event-checkout');
    }
    public function storeCheckout(Request $request)
    {
        //dd($request->all());
        $checkout = new Checkout();
        $checkout->user_id = auth()->user()->id;
        $checkout->save();
        for ($i = 0; $i < count($request->price_id); $i++) {
            $booking = new Booking();
            $booking->ticket_price_id = $request->price_id[$i];
            $booking->checkout_id = $checkout->id;
            $booking->first_name = $request->firstname[$i];
            $booking->last_name = $request->lastname[$i];
            $booking->email = $request->email[$i];
            $booking->address = $request->address[$i];
            $booking->country = $request->country[$i];
            $booking->city = $request->city[$i];
            $booking->save();
        }
        return redirect('event/booking_confirmed/' . $checkout->id);
    }
    public function book(Event $event, Request $request)
    {
        $ticketPrice = TicketPrice::find($request->price_id);
        $prices = $event->tickets->count() ? $event->tickets[0]?->prices : null;
        return view('public.event-checkout', compact([
            'event',
            'ticketPrice',
            'prices'
        ]));
    }
    public function bookingConfirmed(Checkout $checkout)
    {
        return view('public.booking_confirmed', compact([
            'checkout',
        ]));
    }
    public function showTicket(Checkout $checkout)
    {
        $email = "avijitach@gmail.com";
        Mail::send(['view' => 'public.ticket'], [], function ($message) use ($checkout,$email){
            $message->subject('Your ticket from evento')->text("Download your ticket from the link below..\n".url('event/booking_confirmed/'.$checkout->id))
                ->to($email);
        });
        $ticket = $checkout->bookings->first()?->ticketPrice->ticket;
        $event = $ticket->event;
        $viewName = "public.ticket";
        if ($ticket->template_name == 2) {
            $viewName = "public.ticket2";
        }
        // $pdf = PDF::loadView($viewName, compact([
        //         'checkout',
        //         'ticket',
        //         'event'
        //     ]));
        // return $pdf->stream('itsolutionstuff.pdf');

        return view($viewName, compact([
            'checkout',
            'ticket',
            'event'
        ]));
    }
    public function downloadTicket(Booking $booking)
    {
        $ticket = $booking->ticketPrice->ticket;
        $event = $ticket->event;
        $pdf = Pdf::loadView('public.ticket', compact(['booking', 'event', 'ticket']));
        return $pdf->download('invoice.pdf');
    }
}
