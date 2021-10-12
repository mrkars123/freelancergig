<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use App\User;
use Illuminate\Support\Facades\Validator;
use DB;
class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.Dashboard');
    }
    public function users()
    {
        return view('admin.users');
    }
    public function proposals()
    {
        return view('admin.Proposals');
    }
    public function withdraw()
    {
        return view('admin.withdraw');
    }

    public function userFetchList() {
        $users = User::all();
        echo json_encode($users);  
    }

    public function active_deactive_user($id) {
        $user = User::find($id);
        $user1 =  User::find($id);
        
        if($user->status == 1) {
            $user->status = 0;
        }
        else if ($user1->status == 2){
            $user1->status = 2;
        }
        else{
            $user->status = 1;
        }
        if($user->save()) {
            return 'vccvc';
        }

    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'type' => 'required|in:seller, buyer, admin'
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else{
            $user = new User();
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->type = $request->type;
            $user->save();
            return response()->json([
                'status' => 230,
                'messages' => 'User Added Successfully'
            ]);
        }
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return response()->json([
            'status' => 200,
            'messages' => 'User Deleted Successfully'
        ]);
    }
}
