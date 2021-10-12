<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class AuthController1 extends Controller
{   
    // public function show(User $user, $username)
    // {   
    //     $author = User::where('username',$username)->first();
    //     $profiles = $author->profiles()->get();
    //     return view('profile',compact('author','profiles'));
    // }


    public function profile(User $user)
    {   
        $profiles = $user->profiles()->get();
        return view('profile', ['users' => $user, 'profiles' => $profiles]);
    }

    public function save_profile(Request $request){
        $this->validator($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users'
        ]);

        $profiles = new Profile;
        $profiles->first_name = $request->input('first_name');
        $profiles->last_name = $request->input('last_name');
        $profiles->email = $request->input('email');
        $profiles->user_id = Auth::user()->id;
        $profiles->save();
        return response()->json([
            'status' => 230,
            'messages' => 'Category Added Successfully',
        ]);
    }

    public function forgotPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email,status,1',
        ]);
        if ($validator->fails()) {
            $errors = $validator->getMessageBag()->toArray();
            return response()->json(array(
                'status' => false,
                'error' => $validator->errors()->all(),
            ));
        }

        $user = User::where('email', $request->email)->first();
        if ($user) {
            $response = User::requestPasswordReset($user->email);
            if ($response) {
                return response()->json(array('status' => true, 'message' => 'Email has been sent...'));
            }
        }
        return response()->json(array('status' => false, 'error' => 'Something Went Wrong'));
    }

    public function showResetPasswordPage(Request $request)
    {
        $token = $request->token;
        return view('auth.passwords.reset')->with('token', $token);
    }
    public function resetPassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'r_password' => 'required|between:6,255|confirmed',
            'r_password_confirmation' => 'required '
        ]);

        if ($validator->fails()) {
            return ['status' => false, 'error' => $validator->errors()->all()];
        }
        $password = $request->r_password;

        // Validate the token
        $tokenData = DB::table('password_resets')->where('token', $request->reset_token)->first();
        // Redirect the user back to the password reset request form if the token is invalid
        if (!$tokenData) {
            return ['status' => false, 'error' => 'Invalid Token'];
        }


        $user = User::where('email', $tokenData->email)->first();

        $user->password = bcrypt($password);
        if ($user->update()) {

        }
        DB::table('password_resets')->where('email', $user->email)->delete();

        return ['status' => true, 'message' => 'Password Updated'];

    }
}
