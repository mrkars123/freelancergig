<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
        return view('admin.users');
    }

    /* public function changeStatus(Request $request) {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success' => 'Status Changed Successfully']);
    }
    */


    public function store(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->type = $request->type;

        $user->save();
        return response()->json(['success'=>'Data is successfully added']);
    }

    public function userFetchList() {
        $users = User::all();
        echo json_encode($users);  
    }

    public function active_deactive_user($id) {
        $user = User::find($id);
        if($user->status == 1) {
            $user->status = 0;
        } else {
        $user->status = 1;
        }
        if($user->save()) {
            echo json_encode('success');
        } else {
            echo json_encode('failed');
        }
    }
}
