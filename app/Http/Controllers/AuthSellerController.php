<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthSellerController extends Controller
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
    public function active()
    {
        return view('inc.manages.1.active');
    }
    public function pending()
    {
        return view('inc.manages.1.pendding');
    }
    public function delivered()
    {
        return view('inc.manages.1.delivered');
    }
    public function completed()
    {
        return view('inc.manages.1.completed');
    }
    public function rejected()
    {
        return view('inc.manages.1.rejected');
    }
    public function requests()
    {
        return view('SellerPages.buyers_requests');
    }
    public function offer_active()
    {
        return view('inc.manages.2.active');
    }
    public function offer_pending()
    {
        return view('inc.manages.2.pending');
    }
    public function offer_inactive()
    {
        return view('inc.manages.2.inactive');
    }
    public function offer_rejected()
    {
        return view('inc.manages.2.rejected');
    }
    public function creat_offer()
    {
        return view('SellerPages.creat_offer');
    }
    // public function requests()
    // {
    //     return view('inc.manages.1.buyers_requests');
    // }
    // public function my_offer()
    // {
    //     return view('inc.manages.1.manage_offer');
    // }
    // public function creat_offer()
    // {
    //     return view('inc.manages.1.create_offer');
    // }
}
