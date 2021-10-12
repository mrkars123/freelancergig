<script type="text/javascript">
    $(function() {
        $("#register_step_two").hide();
        $('#continue').click(function(e) {
            /* $( "#registrationForm" ).validate();
            var validator = $( "#registrationForm" ).validate();
            var check=validator.element( "#email_address" ); */
              if($("#email_address").valid()){
                 $("#register_step_one").hide();
                 $("#register_step_two").show();
                  }else{
                      console.log('not validate');
              }
             
        });
    });


    function validateEmail(str){
      
    }
    
    $(document).ready(function(){
        $.validator.addMethod("lettersonly", function(value, element) 
                {
                return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
                }, '<span style="color: #A94545;"><strong>No spaces or other special characters are allowed.</strong></span>');
        $.validator.addMethod("alpha", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z]+$/i);
        });
        $.validator.addMethod("validemail", function(value, element) 
                {
                    return this.optional(element) || /^[a-z0-9][a-z0-9-_\.]+@([a-z]|[a-z0-9]?[a-z0-9-]+[a-z0-9])\.[a-z0-9]{2,10}(?:\.[a-z]{2,10})?$/i.test(value);
                },'<span style="color: #A94545;"><strong>Please provide your valid email.</strong></span>');

    $('#registrationForm').validate({
    rules: {
    username: {
        required: true,
        minlength: 3,
        maxlength: 15,
        lettersonly: true,
        remote: {
            url: "https://www.freelancinggig.com/Registration_ctrl/check_username",
            type: "POST",
        },
      },
    email: {
        required: true,
        email: true,
        validemail:true,
        remote: {
            url: "https://www.freelancinggig.com/Registration_ctrl/check_email",
            async: false,
            type: "POST",
        },
    },
    password: {
        required: true,
        minlength: 6
      },
    },
    type: {
        required: true,
    },
    messages: {
    username: {
    required:   '<span style="color: #A94545;"><strong>Please provide your User Name</strong></span>',
    remote : '<span style="color: #A94545;"><strong>User Name already taken!!</strong></span>',
    minlength:jQuery.validator.format('<span style="color: #A94545;"><strong>Please enter atleast {0} characters.</strong></span>'),
    maxlength:jQuery.validator.format('<span style="color: #A94545;"><strong>Maximum {0} characters allowed.</strong></span>'),

    },
    email: {
        required :'<span style="color: #A94545;"><strong>Please provide your Email address </strong></span>',
        email : '<span style="color: #A94545;"><strong>Please enter a valid email address. </strong></span>',
        remote :'<span style="color: #A94545;"><strong>This email already exist</strong></span>'
    },
    password: {
        required :'<span style="color:#A94545;"><strong>Please provide your Password</strong></span>',
        minlength:jQuery.validator.format('<span style="color: #A94545;"><strong>Please enter atleast {0} characters.</strong></span>')
    },
    type: {
        required :'<span style="color: #A94545;"><strong>Please select the Type </strong></span>',
    }
    },
    errorClass: 'has-error',
    validClass: 'has-success',
    submitHandler: function(form) { // <- pass 'form' argument in
      $("button[type=submit]").attr("disabled", true).html('<i class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i>Please Wait...');
      form.submit(); // <- use 'form' argument here.
    } 
    });
    
    });


function enableBtn(){
     $.ajax({
          type: "POST",
          url: "https://www.freelancinggig.com/Registration_ctrl/captcha",
          data: {
            captcha: grecaptcha.getResponse()
          },
          success: function(response) {
            if(!response){
                $('#captcha_check').html('Robot verification failed, please try again.');
            }else{
                $('#captcha_check').html('');
            }
          }
        })
 
 }