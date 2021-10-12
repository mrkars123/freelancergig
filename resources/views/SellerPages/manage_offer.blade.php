@extends('layout.manages')

@section("tabRss")
    <div class="selected-tab d-none d-xs-block">
        Active
        <span class="badge badge-success">0</span>
    </div>
    <ul class="nav nav-tabs fancy-tabs2 dropdown-box">
        <li class="dashboard_tab">
            <a class="{{ Request::is('user-offer') ? 'active' : '' }}" href="{{ url('user-offer') }}">
                Active <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('user-offer/pending') ? 'active' : '' }}" href="{{ url('user-offer/pending') }}">
                Pending Review <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('user-offer/inactive') ? 'active' : '' }}" href="{{ url('user-offer/inactive') }}">
                Inactive <span class="badge badge-success">0</span>
            </a>
        </li>
        <li class="dashboard_tab">
            <a class="{{ Request::is('user-offer/rejected') ? 'active' : '' }}" href="{{ url('user-offer/rejected') }}">
                Rejected <span class="badge badge-success">0</span>
            </a>
        </li>
    </ul>
@endsection

@section("scripts")

@endsection