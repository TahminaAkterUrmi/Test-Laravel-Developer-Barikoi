<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        try {
            $users = User::all();
            return response()->json(['users' => $users]);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => $th,
                'message' => 'You have to login first'
            ]);
        }
    }
}
