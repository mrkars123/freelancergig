@extends('layout.manages')

@section("tabRss")
    <div class="selected-tab d-none d-xs-block">
        Active
        <span class="badge badge-success">0</span>
    </div>
    <ul class="nav nav-tabs fancy-tabs2 dropdown-box">
        <li class="dashboard_tab">
            <a class="{{ Request::is('my-account/sales') ? 'active' : '' }}" href="{{ url('my-account/sales') }}">
                Active <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('my-account/sales/pending') ? 'active' : '' }}" href="{{ url('my-account/sales/pending') }}">
                Pending <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('my-account/sales/delivered') ? 'active' : '' }}" href="{{ url('my-account/sales/delivered') }}">
                Delivered <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('my-account/sales/completed') ? 'active' : '' }}" href="{{ url('my-account/sales/completed') }}">
                Completed <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('my-account/sales/rejected') ? 'active' : '' }}" href="{{ url('my-account/sales/rejected') }}">
                Rejected <span class="badge badge-success">0</span>
            </a>
        </li>
    </ul>
@endsection

@section("scripts")

@endsection