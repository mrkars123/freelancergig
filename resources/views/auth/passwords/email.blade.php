@extends('layout.app-reset')

@section('content')
    <div class="page-wrapper">
        <div class="mp-box-min-height">
            <section class="standalone">
                <div class="entry">
                    <div class="notifDiv">
                        <div role="alert" class="up-alert alert up-alert-success">
                            <div class="up-alert-icon">
                                <div class="up-icon a1"></div>
                            </div>
                            <div class="up-alert-content break">
                                <div class="">
                                    <span></span>
                                </div>
                            </div>
                            <button type="button" class="up-btn-reset up-alert-close">
                                <span class="sr-only">Close the alert</span> 
                                <div class="up-icon a2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" aria-hidden="true" role="img"><polygon points="12.524 0 7 5.524 1.476 0 0 1.476 5.524 7 0 12.524 1.476 14 7 8.476 12.524 14 14 12.524 8.476 7 14 1.476" fill="#ffffff" data-original="#e2574c"></polygon>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div>
                        @if (session('status'))
                            <div role="alert" class="up-alert alert up-alert-success">
                                <div class="up-alert-icon">
                                    <div class="up-icon a1">
                                        <svg fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" _ngcontent-niv-c69="" class="w-5 text-white"><path d="M14.667 7.387V8a6.667 6.667 0 11-3.954-6.093" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" _ngcontent-niv-c69=""></path><path d="M14.667 2.667L8 9.34l-2-2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" _ngcontent-niv-c69=""></path></svg>
                                    </div>
                                </div>
                                <div class="up-alert-content break">
                                    <div class="">
                                        <span>
                                            We have emailed your password reset link!
                                        </span>
                                    </div>
                                </div>
                                <button type="button"  data-dismiss="alert" aria-label="Close" class="up-btn-reset up-alert-close">
                                    <span class="sr-only">Close the alert</span> 
                                    <div class="up-icon a2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" aria-hidden="true" role="img"><polygon points="12.524 0 7 5.524 1.476 0 0 1.476 5.524 7 0 12.524 1.476 14 7 8.476 12.524 14 14 12.524 8.476 7 14 1.476" fill="#ffffff" data-original="#e2574c"></polygon>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        @endif
                        @error('email')
                            <div role="alert" class="up-alert up-alert-warning alert">
                                <div class="up-alert-icon">
                                    <div class="up-icon a1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" aria-hidden="true" role="img">
                                            <path d="M8 7.927V9H6V2h2v5.927zM7 12a1 1 0 110-2 1 1 0 010 2zM7 0C3.15 0 0 3.15 0 7s3.15 7 7 7 7-3.15 7-7-3.15-7-7-7z" fill="#ffffff" data-original="#e2574c"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="up-alert-content break">
                                    <div class="">
                                        <span>
                                            The email you entered address doesn't exists!!
                                        </span>
                                    </div>
                                </div>
                                <button type="button" data-dismiss="alert" aria-label="Close" class="up-btn-reset up-alert-close">
                                    <span class="sr-only">Close the alert</span> 
                                    <div class="up-icon a2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" aria-hidden="true" role="img"><polygon points="12.524 0 7 5.524 1.476 0 0 1.476 5.524 7 0 12.524 1.476 14 7 8.476 12.524 14 14 12.524 8.476 7 14 1.476" fill="#ffffff" data-original="#e2574c" fill="#ffffff" data-original="#e2574c"></polygon>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        @enderror
                        
                    </div>
                    <div class="user_session-package user-session-package entry" style="display: block;">
                        <div class="signing-entry">
                            <div class="reset-password-request-form">
                                <h4 class="form-header">Forgot Password</h4>
                                <p>Please enter your email address and we'll send you a link to reset your password.</p>
                                
                                <form name="registerform" id="forget-form">
                                    @csrf
                                    <div id="notifDiv" style="z-index:10000; display: none; background: green; font-weight: 450; width: 350px; position: fixed; top: 80%; left: 5%; color: white; padding: 5px 20px">
                                    </div>
                                    <div class="sign-in-form">
                                        <div class="field">
                                            <div class="fit-input-wrapper">
                                                <div class="fit-input-inner-wrapper">
                                                    <input id="email" type="email" class="fit-input" name="email" placeholder="Enter your email" required autocomplete="email" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="fit-button fit-button-color-green fit-button-fill-full fit-button-size-medium submit-button" type="submit">
                                            <p>Continue</p>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="signing-footer text-body-2">
                            <a href="{{ route('login') }}">Back to Sign In</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection