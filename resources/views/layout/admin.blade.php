<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="https://ureed.com/favicon.ico">

    <link rel="stylesheet" type="text/css" href="https://mohamedkars.000webhostapp.com/assets/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://mohamedkars.000webhostapp.com/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/duf.css') }}">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    @stack('css')
    <style>
      .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: .2rem; }
      .toggle.ios .toggle-handle { border-radius: 2rem; }
      .btn-default:hover, .btn-default:focus, 
      .btn-default:active, .btn-default.active, .open>.dropdown-toggle.btn-default {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545
      }
      .toggle-off.btn{
        padding-left:5px;
      }
      .toggle-on.btn{padding-right: 12px}
      .toggle.btn{
        width: 30px !important;
        min-width: 35px;
        min-height: 30px;
      }
      .btn {
        padding: 2px 7px;
        height: 25px !important;
        min-width: 30px !important;
        min-height: 25px !important;cursor: pointer;
      }
      .toggle-handle{display: none;}
      .delete_button{
        padding: .25rem .8rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem;
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545;
      }
      .show_button{
        padding: 4px 5px 5px;
        margin-right: 6px;
        line-height: 1.5;
        border-radius: .2rem;color: #000;
      }
      .show_button:hover i{color: #000}
      .show_button i{font-size: 13px !important}
      @media (max-width: 563px){
        .show_button {
          line-height: 35px;
        }
        .delete_button{
          margin-top: 5px;
          margin-bottom: 1px;
        }
      }
      .navbar{display: flex;align-content:center;}.navbar .nav-link{padding:0;}
      .navbar .nav-link.nav-link-user{padding-top: 0}
      .btn-success {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
      }
    .btn:focus{box-shadow: none !important;outline: none !important;border: none;}
  </style>
</head>
<body>
  <div id="app">
    <div class="admin_page main-wrapper main-wrapper-1">
        <div id="left-panel" class="left-panel">
            @include('admin.navbar')
            @include('admin.slide')
        </div>
        <div id="right-panel" class="right-panel">
            <div class="content pb-0">
                <div class="container-fluid">
                    @yield("content")
                </div>
            </div>
        </div>
    </div>
  </div>
  @stack('models')
  @include('inc.scripts')
  @stack('js')
</body>
</html>