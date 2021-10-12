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
    <link rel="stylesheet" type="text/css" href="https://mohamedkars.000webhostapp.com/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{url('/assets/css/core.css')}}">
    <title>Document</title>
    <style type="text/css">
        .user_session-package .fit-input-inner-wrapper .fit-input{
           margin-bottom: 0;
           margin-top: 0;
        }
        .user-session-package .field .fit-input-wrapper{margin-bottom: 10px;}
        .custom-radiobox .radiomark:after {
            width: 9px;
            height: 9px;
            top: 3px;
            left: 3px;
        }
        .radiomark {
            top: 2px;
            left: 0;
            height: 17px;
            width: 17px;
        }

        .terms-of-use {
            line-height: 1.6em;
            margin-top: 5px !important;
        }
        .terms-of-use {
            font-size: 13px;
        }
        .fit-input:focus{border: 1px solid blue !important;}
        .has-error .fit-input,.has-error .fit-input:focus {
            border-color: red !important;
            -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%) !important;
            box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%) !important;
        }

        .has-success .fit-input,.has-success .fit-input:focus {
            border-color: #3c763d !important;
            -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%) !important;
            box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%) !important;
        }
        .has-feedback .has-error {
            padding-top: 2px;
        }
        .user-session-package .form-header {
            font-size: 24px;
        }
        .signing-entry{padding: 0}
        #register_step_one,#register_step_two{
            padding: 0 40px 0px;
        }

        .user_session-package .fit-input-inner-wrapper strong {
            font-size: 14px;
            font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif !important;
        }
        b, strong {
            font-weight: 600;
            font-size: 15px;
        }
        .navbar-header a {
            margin-left: 3px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar" aria-label="Navigation bar" data-ng-controller="headerController">
            <div class="container">
                <div class="navbar-header d-flex justify-content-center">
                    <a class="navbar-brand" href="/" target="_self">Upwork</a>
                </div>
                <div class="navbar-header d-flex justify-content-center">
                    <p>Already a member? </p>
                    <a href="{{ route('login') }}">Sign In</a>
                </div>
            </div>
        </nav>
        
        @yield("content")
    </div>

    @include('inc.scripts')
    @yield('scripts')
</body>
</html>