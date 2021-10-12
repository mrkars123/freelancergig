@extends('layout.app-reset')

@section('content')
    <div class="page-wrapper">
        <div class="mp-box-min-height">
            <section class="standalone">
                <div class="entry">
                    <div class="user_session-package user-session-package entry" style="display: block;">
                        <div class="signing-entry">
                            <div class="reset-password-request-form">
                                <h4 class="form-header">Create Your New Password</h4>
                                <div id="notifDiv" style="z-index:10000; display: none; background: green; font-weight: 450; width: 350px; position: fixed; top: 80%; left: 5%; color: white; padding: 5px 20px">
                                </div>
                                <form id="reset_passsword_form">
                                    @csrf
                                    <input name="reset_token" type="hidden" value="{{app('request')->input('token')}}">

                                    <div class="sign-in-form">
                                        <div class="field">
                                            <div class="fit-input-wrapper">
                                                <div class="fit-input-inner-wrapper">
                                                    <input type="password" id="r_password" name="r_password" class="fit-input" placeholder="Enter Password" value="" minlength="6">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field">
                                            <div class="fit-input-wrapper">
                                                <div class="fit-input-inner-wrapper">
                                                    <input id="r_password_confirmation" type="password" class="fit-input" name="r_password_confirmation" placeholder="Enter Confirm Password" minlength="6">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="fit-button fit-button-color-green fit-button-fill-full fit-button-size-medium submit-button" id="bt_reset_password" type="submit">
                                            <p>Continue</p>
                                        </button>
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

@section('scripts')
<script>
    $(document).ready(function () {
        $('#bt_reset_password').on('click', function () {
            var form = $('#reset_passsword_form');
            $(form).validate({
                rules: {
                    r_password: {
                        required: true,
                        minlength: 6
                    },
                    r_password_confirmation: {
                        required: true,
                        equalTo: "#r_password"
                    },
                },
                messages: {
                    r_password: {
                        required:'<span style="color: red;"><strong>This feild is required. </strong></span>',
                        minlength:'<span style="color: red;"><strong>Please enter at least 6 characters. </strong></span>',
                        maxlength:'<span style="color: red;"><strong>Please enter no more than 15 characters. </strong></span>'
                    },
                    r_password_confirmation: {
                        required:'<span style="color: red;"><strong>This feild is required.</strong></span>',
                        minlength:'<span style="color:red;"><strong>Please enter at least 6 characters. </strong></span>',
                        maxlength:'<span style="color: red;"><strong>Please enter no more than 15 characters. </strong></span>',
                        equalTo:jQuery.validator.format('<span style="color: red;"><strong>Password does not match with entered password.</strong></span>')
                    },
                  },
                submitHandler: function (form) {
                    let data = $('#reset_passsword_form').serializeArray();
                    $("#bt_reset_password").attr("disabled", true).html('<i class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i>Please Wait...');
                    console.log(data);
                    $.ajax({
                        type: 'POST',
                        url: "{{route('user_reset_password')}}",
                        data: data,
                        success: function (data) {
                            if (data.status) {
                                $('#notifDiv').fadeIn();
                                $('#notifDiv').css('background', 'green');
                                $('#notifDiv').text('Email Updated Successfully');
                                setTimeout(() => {
                                    $('#notifDiv').fadeOut();
                                }, 3000);
                                $('#bt_reset_password').removeAttr('disabled').html('Continue');
                                window.location = "{{ route('login') }}";
                            } else {
                                $('#notifDiv').fadeIn();
                                $('#notifDiv').css('background', 'red');
                                $('#notifDiv').text('Invalid Token');
                                setTimeout(() => {
                                    $('#notifDiv').fadeOut();
                                }, 3000);
                                $('#bt_reset_password').removeAttr('disabled').html('Continue');
                            }
                        },
                        error: function (err) {
                            showCustomError('Something went Wrong!')
                        }
                    });
                }
            });
        });
    });
</script>
@endsection