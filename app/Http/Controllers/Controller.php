<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * The basic controller for default methods <br/>
 * Created by <a href="https://avijitacharjee.com">Avijit Acharjee</a>
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function succeededResponse($data, $message,$status=Response::HTTP_OK)
    {
        return response()->json([
            'data'=>$data,
            'success'=>true,
            'message'=>$message
        ],$status);
    }
    public function failedResponse($data, $message)
    {
        return response()->json([
            'data'=>$data,
            'success'=>false,
            'message'=>$message
        ]);
    }

}
