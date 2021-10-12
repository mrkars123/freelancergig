<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
class SettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function account(User $user)
    {
        return view('inc.item_settings.account');
    }
    public function security()
    {
        return view('inc.item_settings.security');
    }
    public function notifications()
    {
        return view('inc.item_settings.notifications');
    }
    public function payment()
    {
        return view('inc.item_settings.payment');
    }
}
