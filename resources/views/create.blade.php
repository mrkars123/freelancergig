<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="_token" content="{{csrf_token()}}" />
        <link rel="stylesheet" type="text/css" href="https://mohamedkars.000webhostapp.com/assets/css/bootstrap.css">
        <title>Grocery Store</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
      <div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('userData.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
        <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
    <label for="email">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
  </div>
  <div class="form-group">
    <label for="email">Phone:</label>
    <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
  </div>
  <div class="form-group">
    <label for="email">City:</label>
    <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
  </div>
  <button type="submit" class="btn btn-primary" id="butsave">Submit</button>
</div>
      </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
   
    $('#butsave').on('click', function() {
      var name = $('#name').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      var city = $('#city').val();
      var password = $('#password').val();
      if(name!="" && email!="" && phone!="" && city!=""){
        /*  $("#butsave").attr("disabled", "disabled"); */

              $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
      });
          $.ajax({
              url: "/userData",
              type: "POST",
              data: {
                  type: 1,
                  name: name,
                  email: email,
                  phone: phone,
                  city: city
              },
              cache: false,
              success: function(dataResult){
                  console.log(dataResult);
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                    window.location = "/userData";        
                  }
                  else if(dataResult.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }
          });
      }
      else{
          alert('Please fill all the field !');
      }
  });
});
</script>
    </body>
</html>