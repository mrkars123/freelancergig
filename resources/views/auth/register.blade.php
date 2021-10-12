@extends('layout.app-signup')

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
                    <div class="user_session-package user-session-package entry">
                        <div class="signing-entry">
                            <div class="sign-in-form">
                                <form method="POST" action="{{ route('register') }}" id="regForm">
                                @csrf
                                    <div id="register_step_one">
                                        <h4 class="form-header">Join Fiverr</h4>
                                        <div class="social-signing">
                                            <div class="td_block_wrap td_block_social_counter td_block_widget td_uid_23_5f47ca7d1c46e_rand td-social-style8 td-social-boxed td-social-font-icons td-pb-border-top">
                                                <div class="td-social-list">
                                                    <div class="td_social_type td-pb-margin-side td_social_facebook">
                                                        <div class="td-social-box">
                                                            <div class="td-sp td-sp-facebook"></div>
                                                            <span class="td_social_info td_social_info_name">Continue</span>
                                                            <span class="td_social_button">
                                                                <a href="{{url('redirect/facebook')}}">Follow</a>
                                                            </span>
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
                                        <div class="sign-up-email-form">
                                            <div class="field">
                                                <div class="fit-input-wrapper">
                                                    <div class="fit-input-inner-wrapper">
                                                        <input id="email" type="text" style="    margin-bottom: 5px;" class="fit-input " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <div class="fit-input-wrapper">
                                                    <div class="fit-input-inner-wrapper">
                                                        <button class="fit-button fit-button-color-green fit-button-fill-full fit-button-size-medium submit-button" type="button" id="continue">Continue</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <p class="terms-of-use">By registering you confirm that you accept the <a style="font-size: 11px;" href="https://www.freelancinggig.com/terms-of-use">Terms and Conditions</a> &amp; <a style="font-size: 11px;line-height: 0.6;" href="https://www.freelancinggig.com/privacy-policy">Privacy Policy</a> 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="register_step_two" style="display: none;">
                                        <div class="sign-up-email-form">
                                            <h4 class="form-header">Join Fiverr</h4>
                                            <div class="field">
                                                <div class="fit-input-wrapper">
                                                    <div class="fit-input-inner-wrapper">
                                                        <input id="username"  type="text" class="fit-input" name="username" required autocomplete="username" placeholder="Username" autofocus>
                                                    </div>
                                                </div>
                                                <div class="fit-input-wrapper">
                                                    <div class="fit-input-inner-wrapper">
                                                        <input id="password"  type="password" class="fit-input" name="password" required autocomplete="new-password" placeholder="Password" autofocus>
                                                    </div>
                                                </div>
                                                <div class="fit-input-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-6">
                                                            <div class="fit-input @error('type') is-invalid @enderror" style="border: 1px solid #dbdbdb;padding: 7px 10px;height: 40px;border-radius: 6px;">
                                                                <div>
                                                                  <label class="custom-radiobox" for="search_job_type_5">
                                                                    <input id="search_job_type_5" type="radio" name="type"  value="seller">
                                                                    <i class="radiomark"></i>
                                                                    <span class="radiomark"></span>
                                                                    <span style="position: relative;bottom: 3px;font-weight: 700;font-size: 15px;">Seller:</span>
                                                                  </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-6">
                                                            <div class="fit-input @error('type') is-invalid @enderror" style="border: 1px solid #dbdbdb;/* padding: 4px 10px; */height: 40px;padding: 7px 10px;border-radius: 6px;/* width: 100% !important; */">
                                                                <div>
                                                                  <label class="custom-radiobox" for="search_job_type_6">
                                                                    <input id="search_job_type_6" type="radio" name="type" value="buyer">
                                                                    <i class="radiomark"></i>
                                                                    <span class="radiomark"></span>
                                                                    <span style="position: relative;bottom: 3px;font-weight: 700;font-size: 15px;">Buyer:</span>
                                                                  </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label id="type-error" class="pl-4 has-error" for="type"></label>
                                                    </div>
                                                </div>
                                                <button class="fit-button fit-button-color-green fit-button-fill-full fit-button-size-medium submit-button" type="submit" id="">
                                                    <p>Sign Up</p>
                                                </button>
                                                <div class="form-group">
                                                    <p class="terms-of-use">By registering you confirm that you accept the Terms and Conditions &amp; Privacy Policy 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="signing-footer text-body-2">
                                        @if (Route::has('password.request'))
                                            <p>Already a member?</p>
                                            <a href="{{ route('login') }}">Sign In</a>
                                        @endif
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
@endsection
