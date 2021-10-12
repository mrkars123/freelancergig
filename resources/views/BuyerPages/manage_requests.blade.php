@extends('layout.manages')

@section("tabRss")
    <div class="selected-tab d-none d-xs-block">
        Active
        <span class="badge badge-success">0</span>
    </div>
    <ul class="nav nav-tabs fancy-tabs2 dropdown-box">
        <li class="dashboard_tab">
            <a class="{{ Request::is('my-requests') ? 'active' : '' }}" href="{{ url('my-requests') }}">
                Active <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('my-requests/pending') ? 'active' : '' }}" href="{{ url('my-requests/pending') }}">
                Pending <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('my-requests/paused') ? 'active' : '' }}" href="{{ url('my-requests/paused') }}">
                Paused <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('my-requests/expired') ? 'active' : '' }}" href="{{ url('my-requests/expired') }}">
                Expired <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('my-requests/rejected') ? 'active' : '' }}" href="{{ url('my-requests/rejected') }}">
                Rejected <span class="badge badge-success">0</span>
            </a>
        </li>
    </ul>
@endsection