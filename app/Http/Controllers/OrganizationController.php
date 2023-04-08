<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
        return view('organization.blogs',compact(['blogs']));
    }
}
