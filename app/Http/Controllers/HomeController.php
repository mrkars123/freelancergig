<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('dashboard');
    }
    public function pay_payments()
    {
        return view('payments.payments');
    }
    public function pay_transactions()
    {
        return view('payments.transactions');
    }
    public function pay_withdraw()
    {
        return view('payments.withdraw');
    }
    public function pay_settings()
    {
        return view('payments.settings');
    }
}
