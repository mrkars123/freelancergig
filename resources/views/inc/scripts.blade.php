<script src="http://code.jquery.com/jquery-3.4.1.js"></script> 
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script type="text/javascript" src="/assets/js/select2.min.js"></script>
<script type="text/javascript" src="http://parsleyjs.org/dist/parsley.min.js"></script>
<script type="text/javascript" src="/assets/js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://mohamedkars.000webhostapp.com/assets/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="https://mohamedkars.000webhostapp.com/assets/js/functions.js"></script>
<script>
  $(document).ready(function() {

    $.validator.addMethod("lettersonly", function(value, element) 
      {
      return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
      }, '<span style="color: red;"><strong>No spaces or other special characters are allowed.</strong></span>');
    $.validator.addMethod("alpha", function(value, element) {
        return this.optional(element) || value == value.match(/^[a-zA-Z]+$/i);
    });
    $.validator.addMethod("validemail", function(value, element) 
    {
        return this.optional(element) || /^[a-z0-9][a-z0-9-_\.]+@([a-z]|[a-z0-9]?[a-z0-9-]+[a-z0-9])\.[a-z0-9]{2,10}(?:\.[a-z]{2,10})?$/i.test(value);
    },'<span style="color: red;"><strong>Please provide your valid email.</strong></span>');


    if ($('#regForm').length > 0) {
      $("#regForm").validate({
          rules: {
            username: {
              required: true,
              minlength: 6,
              maxlength: 15,
              lettersonly: true,
              remote: {
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "check-username",
                type: "POST",
              },
            },
            email: {
              required: true,
              email: true,
              validemail:true,
              remote: {
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                  url: "check-email",
                  async: false,
                  type: "POST",
              },
            },
            password: {
              required: true,
              minlength: 8
            },
            type: {
              required: true,
            },
          },
          messages: {
            username: {
            required: '<span style="color: red;"><strong>Please provide your User Name</strong></span>',
            remote : '<span style="color: red;"><strong>User Name already taken!</strong></span>',
            minlength:jQuery.validator.format('<span style="color: red"><strong>Please enter atleast {0} characters.</strong></span>'),
            maxlength:jQuery.validator.format('<span style="color: red"><strong>Maximum {0} characters allowed.</strong></span>'),
            },
            email: {
              required :'<span style="color: red;"><strong>Please provide your Email address </strong></span>',
              email : '<span style="color: red;"><strong>Please enter a valid email address. </strong></span>',
              remote :'<span style="color: red;"><strong>This email already exist!</strong></span>'
            },
            password: {
              required :'<span style="color: red;"><strong>Please provide your Password</strong></span>',
              minlength:jQuery.validator.format('<span style="color: red;"><strong>Please enter atleast {0} characters.</strong></span>')
            },
            type: {
              required :'<span style="color: red;"><strong>Please select the type</strong></span>',
            }
          },
          errorClass: 'has-error',
          validClass: 'has-success',
          highlight: function (element, errorClass, validClass) {
          $(element)
            .closest('.fit-input-wrapper')
            .removeClass('has-success has-feedback')
            .addClass('has-error has-feedback');
          $(element)
            .closest('.fit-input-wrapper')
            .find('span.glyphicon')
            .remove();
          },
          unhighlight: function (element, errorClass, validClass) {
          $(element)
            .closest('.fit-input-wrapper')
            .removeClass('has-error has-feedback')
            .addClass('has-success has-feedback');
          },
          submitHandler: function(form) { // <- pass 'form' argument in
            $("button[type=submit]").attr("disabled", true).html('<i class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i>Please Wait...');
            form.submit(); // <- use 'form' argument here.
          } 
      });
    }

    $('form').bind("keypress", function(e) {
      if (e.keyCode == 13) {               
        e.preventDefault();
        return false;
      }
    });

    // window.baseUrl= "{{URL::to('/')}}";
    // var formData = new formData(form);
    // $.ajax({
    //   url: baseUrl+ '/ajax-login',
    //   type: 'POST',
    //   data: formData,
    //   cache: false,
    //   contentType: false,
    //   processData: false,
    //   success: function(data){

    //   },
    //   error: function(jqXHR,textStatus,errorThrown){

    //   }
    // });

    $("#loginForm").validate({
          rules: {
            username: {
              required: true,
            },
            email: {
              required: true,
            },
            password: {
              required: true,
            },
          },
          messages: {
            username: {
              required :'<span style="color: red;"><strong>Please enter your email</strong></span>',
            },
            email: {
              required :'<span style="color: red;"><strong>Please enter your email</strong></span>',
            },
            password: {
              required :'<span style="color: red;"><strong>Please enter your password</strong></span>',
            },

          },
          errorClass: 'has-error',
          validClass: 'has-success',
          submitHandler: function(form) {
            var data = $('#loginForm').serialize();
            $('.message_e,.message_t').css('display','none');
            $("button[type=submit]").attr("disabled", true).html('<i class="fa fa-spinner fa-pulse fa-fw mr-2" aria-hidden="true"></i>Please Wait...');
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
    
            $.ajax({
                url: 'user_login',
                type: 'POST',
                data : data,
                success: function(response) {
                  
                  if (response == 1) {
                    $('.message_e').hide();
                      window.location.replace('{{ route('admin.dashboard')}}');
                  }
                  else if (response == 3) {
                    $('.message_e').show();
                    $('.message_e h3').text('Wrong credentials! Let’s try that again');
                    $("button[type=submit]").attr("disabled", false).html('Continue');
                  }
                }
            });
          } 
      });

    $('#forget-form').validate({
      rules: {
        email:  {
        required: true,
            email: true,
        }
      },
      messages: {
        email:  {
          required :'<span style="color: red;"><strong>Please provide your Email address </strong></span>',
          email : '<span style="color: red;"><strong>Please enter a valid email address. </strong></span>',
        }
      },
      submitHandler: function(form) {
        let data = $('#forget-form').serializeArray();
        $('.notifDiv,.up-alert').fadeOut();
        $('.message_e').css('display','none');
        $("button[type=submit]").attr("disabled", true).html('<i class="fa fa-spinner fa-pulse fa-fw mr-2" aria-hidden="true"></i>Please Wait...');
        $.ajax({
          url: "{{route('user.forgot.password')}}",
          data: data,
          type: "POST",
          success: function (data) {
            if (data.status) {
              $('.notifDiv,.up-alert').fadeIn();
              $('.up-alert').addClass('up-alert-success');
              $('.up-alert-icon .up-icon').html('<svg fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" _ngcontent-niv-c69="" class="w-5 text-white"><path d="M14.667 7.387V8a6.667 6.667 0 11-3.954-6.093" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" _ngcontent-niv-c69=""></path><path d="M14.667 2.667L8 9.34l-2-2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" _ngcontent-niv-c69=""></path></svg>');
              $('.up-alert-content span').text('Email Sent Successfully');
              $("button[type=submit]").attr("disabled", false).html('Continue');
            } else {
              $('.notifDiv,.up-alert').fadeIn();
              $('.up-alert').addClass('up-alert-warning');
              $('.up-alert-icon .up-icon').html('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" aria-hidden="true" role="img"><path d="M8 7.927V9H6V2h2v5.927zM7 12a1 1 0 110-2 1 1 0 010 2zM7 0C3.15 0 0 3.15 0 7s3.15 7 7 7 7-3.15 7-7-3.15-7-7-7z" fill="#ffffff" data-original="#e2574c"></path></svg>');
              $('.up-alert-content span').text('Email Not Found');
              setTimeout(() => {
                $('.notifDiv,.up-alert').fadeOut();
              }, 1000);
              $("button[type=submit]").attr("disabled", false).html('Continue');
            }
          },
          error: function (err) {
            alert('Something went Wrong!')
          }
        });
      }
    
    });

   
    

    $("#register_step_two").hide();
      $('#continue').click(function() {
      if($("#email").valid()){
        $("#register_step_one").hide();
        $("#register_step_two").show();
      }else{
        console.log('not validate');
      }
    });
  });
</script>

<script type="text/javascript">
  $(document).click(function (e) {
    if ($(e.target).is('.swal')) {
      $('.swal').hide();
    }
  });
  $(".swal-button-container .swal-button").click(function () {
    $(".swal").hide(500);
  });
</script>
@yield("scripts")
