<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function dashboard()
    {
        return view('organization.dashboard');
    }
    public function events()
    {
        $events = Event::all();
        return view('organization.events', compact(['events']));
    }
    public function payouts()
    {
        return view('organization.payouts');
    }
}
