@extends('layout.app')

@section("tabRss")
	<div class="" style="position: relative;padding: 48px 0 40px;">
		<h6 class="boxtitle">
			<p class="float-left">My Payments</p>
			<span class="ui primary button float-right" style="color: green"> 	
				Current Balance: $0.00
			</span>
		</h6>
		<div class="fancy-tabs1 edit-profile-tabs">
			<div class="selected-tab d-none d-xs-block">Payments</div>
				<ul class="nav nav-tabs fancy-tabs2 dropdown-box">
	           		<li class="dashboard_tab">
	           			<a class="{{ Request::is('paymens') ? 'active' : '' }}" href="{{ url('paymens') }}" >Payments</a>
	           		</li>
	           		<li class="dashboard_tab">
	           			<a class="{{ Request::is('paymens/transactions') ? 'active' : '' }}" href="{{ url('paymens/transactions') }}">Transactions</a>
	           		</li>
	           		<li class="dashboard_tab">
	           			<a class="{{ Request::is('paymens/withdraw') ? 'active' : '' }}" href="{{ url('paymens/withdraw') }}">Withdraw Money</a>
	           		</li>
	           		<li class="dashboard_tab">
	           			<a class="{{ Request::is('paymens/settings') ? 'active' : '' }}" href="{{ url('paymens/settings') }}">Settings</a>
	           		</li>
	           </ul>
			</div>
		</div>
	</div>
@endsection
