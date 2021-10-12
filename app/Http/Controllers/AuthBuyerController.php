<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthBuyerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function active()
    {
        return view('inc.manages.3.active');
    }
    public function pending()
    {
        return view('inc.manages.3.pendding');
    }
    public function delivered()
    {
        return view('inc.manages.3.delivered');
    }
    public function completed()
    {
        return view('inc.manages.3.completed');
    }
    public function rejected()
    {
        return view('inc.manages.3.rejected');
    }

    /**/

    public function request_active()
    {
        return view('inc.manages.4.active');
    }
    public function request_pending()
    {
        return view('inc.manages.4.pendding');
    }
    public function request_paused()
    {
        return view('inc.manages.4.paused');
    }
    public function request_expired()
    {
        return view('inc.manages.4.expired');
    }
    public function request_rejected()
    {
        return view('inc.manages.4.rejected');
    }
    /**/
     public function request_new()
    {
        return view('BuyerPages.post_request');
    }
}
