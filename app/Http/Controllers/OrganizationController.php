<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\TicketCoupon;
use App\Models\TicketPrice;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function dashboard()
    {
        return view('organization.dashboard');
    }
    public function events()
    {
        $events = auth()->user()->events;
        return view('organization.events', compact(['events']));
    }
    public function payouts()
    {
        return view('organization.payouts');
    }
    public function profile()
    {
        return view('organization.profile');
    }
    public function blogs()
    {
        $blogs = Blog::all();
        return view('organization.blogs', compact(['blogs']));
    }
    public function storeBlog(Request $request)
    {
        $blog = new Blog();
        $blog->user_id = auth()->user()->id;
        $blog->author = auth()->user()->name;
        $blog->title = $request->title;
        $blog->image = $request->hasFile('image') ? $request->file('image')->store('blogs', 'public') : null;
        $blog->content = $request->content;
        $blog->save();
        return back();
    }
    public function deleteBlog(Request $request, Blog $blog)
    {
        $blog->delete();
        return back();
    }
    public function updateBlog(Request $request, Blog $blog)
    {
        $blog->title = $request->title;
        $blog->image = $request->hasFile('image') ? 'storage/' . $request->file('image')->store('blogs', 'public') : $blog->image;
        $blog->content = $request->content;
        $blog->save();
        return back();
    }
    public function duplicateBlog(Blog $blog)
    {
        $blog->replicate()->push();
        return back();
    }
    public function showEvent(Event $event)
    {
        return view('organization.event-single')
            ->with('event', $event);
    }
    public function storeTicket(Event $event, Request $request)
    {
        // dd(explode($request['age_range1'],';'));
        $ticket = new Ticket();
        $ticket->event_id = $event->id;
        $ticket->name = $request->name;
        $ticket->template_name = $request->template_id;
        $ticket->num_of_tickets = $request->is_ticket_unlimited ? null : $request->num_of_tickets;
        $ticket->description = $request->description;
        $ticket->image_required = $request->image_enabled == "on" ? true : false;
        $ticket->logo = $request->hasFile('image')
            ? 'storage/' . $request->file('image')->store('ticket-logos', 'public')
            : null;
        $ticket->save();

        $couponNames = str($request->coupons)->trim()->explode(',');
        foreach ($couponNames as $couponName) {
            $ticketCoupon = new TicketCoupon();
            $ticketCoupon->name = str($couponName)->trim();
            $ticketCoupon->ticket_id = $ticket->id;
            $ticketCoupon->save();
        }

        if ($request->age_based_enabled) {
            for ($i = 1; $i <= 3; $i++) {
                $ticketPrice = new TicketPrice();
                $ticketPrice->ticket_id = $ticket->id;
                $ticketPrice->price = $request['aged_price' . $i];
                [$ticketPrice->from_age, $ticketPrice->to_age] = explode(';', $request['age_range' . $i]);
                $ticketPrice->save();
            }
        } else {
            $ticketPrice = new TicketPrice();
            $ticketPrice->ticket_id = $ticket->id;
            $ticketPrice->price = $request->price;
            $ticketPrice->save();
        }
        return back()->with('msg', 'Successfully saved');
    }
    public function deleteTicket(Ticket $ticket)
    {
        $ticket->delete();
        return back();
    }
}
