<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login(Request $request){
        $cradintials = $request->except('_token');
        $token = auth('api')->attempt($cradintials);
        if (!$token) {
            return response()->json(['error'=>'Incorrect Email or password']);
        }
        return response()->json([
            'token' => $token,
            'message' => 'Login successfully',
        ]);


    }
    public function Logout()
    {
        auth()->logout();
        return response()->json([
            'message' => 'Bye'
        ]);
    }
}
