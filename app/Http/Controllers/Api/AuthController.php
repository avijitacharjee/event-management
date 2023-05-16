<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                auth()->login($user);
                $user->access_token = $user->createToken('event')->accessToken;
                return $this->succeededResponse($user,'Login successfull');
            } else {
                return response()->json([
                    'data' => $user,
                    'message' => 'Invalid password',
                    'success' =>false
                ]);
            }
        } else {
            $user = new User();
            $user->email = $request->email;
            $user->password = $request->password;
            return response()->json([
                'data' => $user,
                'message' => 'Email is not registered',
                'success' =>false
            ]);
        }
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
        return response()->json([
            'data' => $user,
            'message' => 'Login successfull',
            'success' =>true
        ]);
    }
    public function logout()
    {
        auth('api')->logout();
        return response()->json([
            'data' => null,
            'message' => 'Logout successfull',
            'success' =>true
        ]);
    }
}
