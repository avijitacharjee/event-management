<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\EventVenue;
use App\Models\TicketPrice;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $prices = $event->tickets->count() ? $event->tickets[0]?->prices : null;
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
        $booking = new Booking();
        $booking->user_id = auth()->user()->id;
        $booking->ticket_price_id = $request->price_id;
        $booking->save();

        return redirect('event/booking_confirmed/' . $booking->id);
    }
    public function book(Event $event, Request $request)
    {
        $ticketPrice = TicketPrice::find($request->price_id);
        // dd($request->all());
        // $booking->save();
        return view('public.event-checkout', compact([
            'event',
            'ticketPrice'
        ]));
    }
    public function bookingConfirmed(Booking $booking)
    {
        $ticket = $booking->ticketPrice->ticket;
        $event = $ticket->event;
        return view('public.booking_confirmed', compact([
            'event',
            'booking',
            'ticket'
        ]));
    }
    public function showTicket(Booking $booking)
    {
        $ticket = $booking->ticketPrice->ticket;
        $event = $ticket->event;
        return view('public.ticket', compact([
            'booking',
            'event',
            'ticket'
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
