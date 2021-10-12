@extends('layouts.master')

@section('content')

    <section class=form-login>
        <div class="container">
            <div class="row ">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                              <h4 class="text-center">Account Register</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                @csrf
                                <div class="form-group">
                                    <label for="username">First Name</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter First Name">
                                </div>
    
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                                </div>
    
                                <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                              </div>
    
                              <button type="submit" class="btn btn-dark btn-block" id="save_form">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection





@section('javascript')
<script>
        $(document).ready(function() {
            $('#save_form').on('click', function(e) {
                e.preventDefault();
                var username = $("#username").val();
                var email = $("#email").val();
                var password = $("#password").val();
    
                $.ajax({
                    type: 'POST',
                    url: 'save_register',
                    data: {
                        '_token': '<?= csrf_token() ?>',
                        username: username,
                        email: email,
                        password: password
                    },
                    success:function(data) {
                if (data.exists) {
                    $('#notifDiv').fadeIn();
                    $('#notifDiv').css('background', 'red');
                    $('#notifDiv').text('Email already exists');
                    setTimeout(() => {
                        $('#notifDiv').fadeOut();
                    }, 3000);
                } else if (data.success) {
                    $('#notifDiv').fadeIn();
                    $('#notifDiv').css('background', 'green');
                    $('#notifDiv').text('User Registered Successfully.');
                    setTimeout(() => {
                        $('#notifDiv').fadeOut();
                    }, 3000);
                    window.location.replace('{{ route('dashboard')}}');
                } else {
                    $('#notifDiv').fadeIn();
                    $('#notifDiv').css('background', 'red');
                    $('#notifDiv').text('An error occured. Please try later');
                    setTimeout(() => {
                        $('#notifDiv').fadeOut();
                    }, 3000);

                }
                $(this).text('Save');
                $(this).removeAttr('disabled');
                 }.bind($(this))
                    
                });
            });
        });
    </script>
@endsection




