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
    <link rel="stylesheet" type="text/css" href="http://laravel7.test/assets/css/core.css">
    <title>Document</title>
    <style type="text/css">
        .custom-select.is-invalid, 
        .fit-input.is-invalid,
        .was-validated .custom-select:invalid, 
        .was-validated .form-control:invalid {
            border-color: #e3342f;
        }
        .user_session-package .fit-input-inner-wrapper .fit-input {
    margin-bottom: 0;
    margin-top: 0;
}
.user-session-package .field .fit-input-wrapper{margin-bottom: 10px}
.fit-input:focus{border: 1px solid blue !important;}
        .has-error.fit-input,.has-error.fit-input:focus {
            border-color: red !important;
            -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%) !important;
            box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%) !important;
        }

        .has-success.fit-input,.has-success.fit-input:focus {
            border-color: #3c763d !important;
            -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%) !important;
            box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%) !important;
        }
        .has-feedback .has-error {
            padding-top: 2px;
        }
    </style>
</head>
<body>
<div id="app">
    <div id="app">
        <nav class="navbar" aria-label="Navigation bar" data-ng-controller="headerController">
            <div class="container">
                <div class="navbar-header d-flex justify-content-center">
                    <a class="navbar-brand" href="/" target="_self">Upwork</a>
                </div>
                <div class="navbar-header d-flex justify-content-center">
                    <p>Not a member yet?</p>
                    <a href="{{ route('register') }}">Join now</a>
                </div>
            </div>
        </nav>
        
        @yield("content")
    </div>
</div>

    @include('inc.scripts')
</body>
</html>