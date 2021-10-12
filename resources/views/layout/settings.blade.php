<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="https://ureed.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="https://mohamedkars.000webhostapp.com/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="https://mohamedkars.000webhostapp.com/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{url('/assets/css/core.css')}}">
    <title>Document</title>
    <style>
        .nh-user-name {
            line-height: 20px;
        }
        .con-vs-dialog .vs-dialog {
            -webkit-transition: all .2s;
            transition: all .2s;
            z-index: 100;
            width: calc(100% - 20px);
            margin: 10px;
            max-width: 400px;
            border-radius: 6px;
            -webkit-box-shadow: 0 5px 20px 0 rgb(0 0 0 / 10%);
            box-shadow: 0 5px 20px 0 rgb(0 0 0 / 10%);
            background: #fff;
            -webkit-animation: rebound .3s;
            animation: rebound .3s;
        }
        .vs-button-filled{
            font-size: 14px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    @include('inc.off-canvas')
    <div id="app">
        <div class="page-container">
            <div class="layout-container">
                <div class="nav-v2 nav-visitor top-nav-visitor-ia">
                    @guest
                        @include('inc.outside.nav')
                        @include('inc.outside.categories')
                    @else
                        @include('inc.header')
                    @endguest
                </div>
            </div>
        </div>

        <div class="page-content-settings" style="">
            <div class="container-fluid">
                <div class="main-container1 controller-settings" style="min-height: 500px;padding: 48px 0 40px;">
                    <div class="content-header content-header--mobile-menu">
                        <div class="content-header__inner-1">
                            <div class="content-header__inner-2">
                            <h1 class="Heading-sc-1ii725b-0 ktVpHH">Your account</h1>
                            </div>
                        </div>
                    </div>
                    <div class="content-body">
                        <div class="content-body__inner-1">
                            <div class="content-body__inner-2">
                                <div class="row-column">
                                    <div class="">
                                        <div class="column normal-4 large-4">
                                            <div class="fancy-tabs edit-profile-tabs">
                                            <div class="selected-tab d-none d-xs-block">
                                                Account
                                            </div>
                                            <ul class="nav tabs profile-tab fancy-tabs2 nav-tabs dropdown-box">
                                                <li class="tab-item dashboard_tab {{ Request::is('settings/account') ? 'active' : '' }}">
                                                    <a class="active" href="{{ url('settings/account') }}">Account</a>
                                                </li>
                                                <li class="tab-item dashboard_tab {{ Request::is('settings/security') ? 'active' : '' }}">
                                                <a href="{{ url ('settings/security')}}">Security</a>
                                                </li>
                                                <li class="tab-item dashboard_tab {{ Request::is('settings/notifications') ? 'active' : '' }}">
                                                <a href="{{ url('settings/notifications') }}">Notifications Settings</a>
                                                </li>
                                                <li class="tab-item dashboard_tab {{ Request::is('settings/payment') ? 'active' : '' }}">
                                                <a href="{{ url('settings/payment') }}">Payment</a>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column small-12 medium-12 normal-8 large-8">
                                        <div class="column-wrpper fancy-tabs-wrpper tab-content">
                                            @yield("content")
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @include("inc.slidebar") --}}
    @include('inc.footer')
    @include('inc.model_delet')

    @include('inc.scripts')
    @yield("scripts")
</body>
</html>