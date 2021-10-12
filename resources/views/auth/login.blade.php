@extends('layout.app-login')

@section('content')
    <div class="page-wrapper">
        <div class="mp-box-min-height">
            <div class="access-logo">
                <a href="/">
                    <img src="https://wkncdn.com/newx/assets/build/img/workana-logo-2x.9e13d14c2.png" height="35">
                </a>
            </div>
            <section class="standalone">
                <div class="entry">
                    
                    <div class="user_session-package user-session-package entry" style="display: block;">
                        <div class="signing-entry">
                            <div class="sign-in-form">
                                <h4 class="form-header">Sign In to Fiverr</h4>
                                <div class="social-signing">
                                    <div class="td_block_wrap td_block_social_counter td_block_widget td_uid_23_5f47ca7d1c46e_rand td-social-style8 td-social-boxed td-social-font-icons td-pb-border-top">
                                        <div class="td-social-list">
                                        <div class="td_social_type td-pb-margin-side td_social_facebook">
                                            <div class="td-social-box">
                                            <div class="td-sp td-sp-facebook"></div>
                                            <span class="td_social_info td_social_info_name">Continue</span>
                                            <span class="td_social_button"><a href="https://twitter.com/fiverr" target="_blank">Follow</a></span>
                                            </div>
                                        </div>
                                        <div class="td_social_type td-pb-margin-side td_social_twitter">
                                            <div class="td-social-box">
                                            <div class="td-sp td-sp-twitter"></div>
                                            <span class="td_social_info td_social_info_name">Continue</span>
                                            <span class="td_social_button"><a href="https://twitter.com/fiverr" target="_blank">Follow</a></span>
                                            </div>
                                        </div>
                                        <div class="td_social_type td-pb-margin-side td_social_linkedin">
                                            <div class="td-social-box">
                                            <div class="td-sp td-sp-linkedin"></div>
                                            <span class="td_social_info td_social_info_name">Continue</span>
                                            <span class="td_social_button"><a href="https://twitter.com/fiverr" target="_blank">Follow</a></span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="divider">
                                        <span>or</span>
                                    </div>
                                </div>
                                <div class="message_e rounded-md bg-red-50 p-3 mb-3 ng-star-inserted">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <svg _ngcontent-wkd-c114="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-red-400">
                                                <path _ngcontent-wkd-c114="" fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm text-red-700 ng-star-inserted">
                                                <div class="ml-3">
                                                    <h3 class="error text-sm font-medium text-red-800"></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if (session('error'))
                            		 <div class="message_t rounded-md bg-red-50 p-3 mb-3 ng-star-inserted" style="display:block">
	                                    <div class="d-flex">
	                                        <div class="flex-shrink-0">
	                                            <svg _ngcontent-wkd-c114="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-red-400">
	                                                <path _ngcontent-wkd-c114="" fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
	                                            </svg>
	                                        </div>
	                                        <div class="ml-3">
	                                            <div class="text-sm text-red-700 ng-star-inserted">
	                                                <div class="ml-3">
	                                                    <h3 class="error text-sm font-medium text-red-800">
	                                                    	{{ session('error') }}
	                                                    </h3>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
                                @endif
                                <form name="loginForm" id="loginForm">
                                    @csrf
                                    <div id="err"></div>
                                    <div class="sign-up-email-form">
                                        <div class="field">
                                            <div class="fit-input-wrapper">
                                                <div class="fit-input-inner-wrapper">
                                                    <input id="username" type="text" class="fit-input " name="username" placeholder="Email or Username">
                                                    
                                                </div>
                                            </div>
                                            <div class="fit-input-wrapper">
                                                <div class="fit-input-inner-wrapper">
                                                    <input id="password" type="password" class="fit-input " name="password" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="fit-button fit-button-color-green fit-button-fill-full fit-button-size-medium submit-button" type="submit" id="form-submit">
                                            <p>Continue</p>
                                        </button>
                                        <div class="remember-me text-body-2">
                                            <label class="fit-checkbox">
                                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="checkmark-box">
                                                    <span class="fit-icon check-icon" style="width: 10px; height: 10px;">
                                                        <svg width="11" height="9" viewBox="0 0 11 9" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.64489 8.10164L0.158292 4.61504C-0.0511769 4.40557 -0.0511769 4.06594 0.158292 3.85645L0.916858 3.09786C1.12633 2.88837 1.46598 2.88837 1.67545 3.09786L4.02419 5.44658L9.05493 0.41586C9.2644 0.206391 9.60405 0.206391 9.81352 0.41586L10.5721 1.17445C10.7816 1.38392 10.7816 1.72355 10.5721 1.93303L4.40348 8.10166C4.19399 8.31113 3.85436 8.31113 3.64489 8.10164V8.10164Z">
                                                        </path>
                                                        </svg>
                                                    </span>
                                                </span>
                                                <p class="text-body-2">Remember Me?</p>
                                            </label>
                                            <a href="{{ route('password.request') }}">Forgot Password</a>
                                        </div>
                                    </div>	
                                </form>
                            </div>
                        </div>
                        <div class="signing-footer text-body-2">
                            @if (Route::has('password.request'))
                                <p>Not a member yet?</p>
                                <a href="{{ route('register') }}">Join now</a>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
