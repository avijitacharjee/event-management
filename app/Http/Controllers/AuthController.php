<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/sign-in');
    }
    public function signUp(Request $request)
    {
        $user = new User();
        $user->fill($request->only([
            'firstname',
            'lastname',
            'email',
        ]));
        $user->password = Hash::make($request->password);
        $user->name = $request->firstname . ' ' . $request->lastname;
        $user->save();
        Auth::login($user);
        return redirect('/');
    }
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                return redirect('/');
            } else {
                return back();
            }
        } else {
            return back();
        }
    }
    public function index()
    {
        $events = Event::latest()->take(12)->get();
        return view('public.index', compact(['events']));
    }
    public function profile()
    {
        return view('public.profile')->with('user',auth()->user());
    }
}
