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
        @media (min-width: 768px){
            .nav-tabs a.active {
                border: 1px solid transparent;
                border-top-left-radius: 0.25rem;
                border-top-right-radius: 0.25rem;
                color: #495057;
                border-color: #ddd #ddd #ffffff !important;
                color: #000 !important;
            }
        }
        .nav-tabs{
            background: transparent;padding-left: 0px;padding-top: 0;
        }
        .nav-tabs li a{
            height: auto;
        }
        .nav-tabs a.active{
            border-bottom: 2px solid #ff7300;
        }
        .dashboard_tab{padding: 0 !important}
        @media (max-width: 767px){
            .nav-tabs{
              padding-left: 0 !important;
              margin-bottom: 0 !important;
              padding-top: 0 !important;
              background: #fff
            }
            .nav-tabs li a{
              height: auto !important;
              padding: 0 !important;
            }
            .nav-tabs a.active{
              border-bottom: 0 !important;
            }
            .dashboard_tab{padding: 10px 15px !important}
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

        <div class="page-content-manages" style="">
            <div class="main-container1" style="min-height: 500px;padding: 48px 0 40px;">
                <div class="container" style="max-width: 1000px !important">
                    <div class="sigle-job-additional-title manage_request-page">
                        <div class="row total-details" style="background:green;border:1px solid #eee;width:100%;padding:20px;color:#fff !important;margin:0;margin-bottom:25px;border-radius:5px">
                            <div class="col-sm-3 col-md-3 text-center">
                                <span>EAIRED</span>
                                <h2 class="text-center m-0">10.00$</h2>
                            </div>
                            <div class="col-sm-3 col-md-3 text-center">
                                <span>WITHDRAWALS</span>
                                <h2 class="text-center m-0">10.00$</h2>
                            </div>
                            <div class="col-sm-3 col-md-3 text-center">
                                <span>PENDING CLEARANCE</span>
                                <h2 class="text-center m-0">10.00$</h2>
                            </div>
                            <div class="col-sm-3 col-md-3 text-center">
                                <span>AVAILABLE BALANCE</span>
                                <h2 class="text-center m-0">10.00$</h2>
                            </div>
                        </div>
                        <div class="" style="position: relative;">
                            <h6 class="boxtitle">
                                <p class="float-left">Manage Sales</p>
                            </h6>
                            <div class="fancy-tabs1 edit-profile-tabs">
                                @yield("tabRss")
                            </div>
                            <div class="column-wrpper fancy-tabs-wrpper tab-content mt-4">
                                @yield("content")
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @include("inc.slidebar") --}}
    @include('inc.footer')

    @include('inc.scripts')
    @yield("scripts")
</body>
</html>