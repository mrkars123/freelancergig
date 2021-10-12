<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function addUser(Request $request)
    {
        $user = new Users();
        $use->username = $request->username;
        $use->email = $request->email;
        $use->password = $request->password;
        $use->type = $request->type;
        $user->save();
        return response()->json($user);
    }
}
