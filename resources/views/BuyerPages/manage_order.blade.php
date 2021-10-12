@extends('layout.manages')

@section("tabRss")
    <div class="selected-tab d-none d-xs-block">
        Active
        <span class="badge badge-success">0</span>
    </div>
    <ul class="nav nav-tabs fancy-tabs2 dropdown-box">
        <li class="dashboard_tab">
            <a class="{{ Request::is('manage-orders') ? 'active' : '' }}" href="{{ url('manage-orders') }}">
                Active <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('manage-orders/pending') ? 'active' : '' }}" href="{{ url('manage-orders/pending') }}">
                Pending <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('manage-orders/delivered') ? 'active' : '' }}" href="{{ url('manage-orders/delivered') }}">
                Delivered <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('manage-orders/completed') ? 'active' : '' }}" href="{{ url('manage-orders/completed') }}">
                Completed <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('manage-orders/rejected') ? 'active' : '' }}" href="{{ url('manage-orders/rejected') }}">
                Rejected <span class="badge badge-success">0</span>
            </a>
        </li>
    </ul>
@endsection