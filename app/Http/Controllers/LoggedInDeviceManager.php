<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Auth;

class LoggedInDeviceManager extends Controller
{

    /**
     * Display a listing of the currently logged in devices.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $devices = \DB::table('sessions')->where('user_id', Auth::user()->id)
        ->where('user_agent', request()->header('user_agent'))
        ->get()->reverse();

        return view('logged-in-devices.list')
                ->with('devices', $devices)
                ->with('current_session_id', \Session::getId());
    }


    /**
     * Logout a session based on session id.
     *
     * @return \Illuminate\Http\Response
     */
    public function logoutDevice(Request $request, $device_id)
    {

        \DB::table('sessions')
            ->where('id', $device_id)->delete();

        return redirect('/logged-in-devices');
    }



    /**
     * Logouts a user from all other devices except the current one.
     *
     * @return \Illuminate\Http\Response
     */
    public function logoutAllDevices(Request $request)
    {
        \DB::table('sessions')
            ->where('user_id', \Auth::user()->id)
            ->where('id', '!=', \Session::getId())->delete();

        return redirect('/logged-in-devices');
    }

}