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
    public function storeBlog(Request $request)
    {
        $blog = new Blog();
        $blog->user_id = auth()->user()->id;
        $blog->author = auth()->user()->name;
        $blog->title = $request->title;
        $blog->image = $request->hasFile('image') ? 'storage/'.$request->file('image')->store('blogs','public') : null;
        $blog->content = $request->content;
        $blog->save();
        return back();
    }
    public function deleteBlog(Request $request,Blog $blog)
    {
        $blog->delete();
        return back();
    }
    public function updateBlog(Request $request,Blog $blog)
    {
        $blog->title = $request->title;
        $blog->image = $request->hasFile('image') ? 'storage/'.$request->file('image')->store('blogs','public') : $blog->image;
        $blog->content = $request->content;
        $blog->save();
        return back();
    }
    public function duplicateBlog(Blog $blog)
    {
        $blog->replicate()->push();
        return back();
    }
}
