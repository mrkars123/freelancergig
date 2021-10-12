<?php
	use App\User;
	$dataProfile = User::dataProfileDetails(Auth::User()['id']);
	//$dataProfile = json_decode(json_encode($dataProfile));
  	// echo "<pre>"; print_r($dataProfile); die;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="https://ureed.com/favicon.ico">

    <link rel="stylesheet" type="text/css" href="https://mohamedkars.000webhostapp.com/assets/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://mohamedkars.000webhostapp.com/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/duf.css') }}">
    <link rel="stylesheet" href="https://www.freelancinggig.com/assets/css/select2.css">
</head>


<section class="info-column" style="width: 35%">
	<div class="box-wrap">
		<div class="box-inner">
			<div>
				<a href="javascript:void(0)" class="btn green-btn d-block w-100 mb-2">
					<i data-v-fdf38900="" class="icon-mail">&nbsp;</i>
					Contact Me
				</a>
			</div>
			<div id="errors"></div>
			<div class="p-2 pt-4 inner-row skills">
				<h3>
					Top Skills
					<a href="#" class="add" data-toggle="modal" data-target="#skills">Add New</a>
				</h3>

			</div>
			<div class="p-2">
				<span data-v-fdf38900="" class="green-text d-block mb-3 fw-600 fs-14">Follow Me</span>
				<div class="row form-group social-icon">
					<div class="col-12">
						<div class="fixed-size-container">
							<span class="fixed-size">
								<a data-v-fdf38900="" href="https://www.facebook.com/jjayrillo/" target="_blank">
									<img data-v-fdf38900="" src="https://jobmofy.com/images/social/facebook.svg" style="width: 30px; margin-right: 35px;">
								</a>
							</span>
							<span class="fixed-size">
								<a data-v-fdf38900="" href="https://www.facebook.com/jjayrillo/" target="_blank">
									<img data-v-fdf38900="" src="https://jobmofy.com/images/social/instagram.svg" style="width: 30px; margin-right: 35px;">
								</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-12">
			<h6 data-v-fdf38900="">Report This User?</h6>
			<p data-v-fdf38900="">Any issues with this user? 
				<a data-v-fdf38900="" href="#" class="green-text">Report User</a>
			</p>
		</div>
	</div>
</section>


@include('inc.scripts')
<script type="text/javascript" src="https://www.freelancinggig.com/assets/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
	    $('.select2-multi').select2();
		$('.select2-multi').select2().val({!! json_encode($profile->tags()->getRelatedIds()) !!}).trigger('change');

	    $('#prForm').validate({
	      	rules: {
	        	tags:  {
		        	required: true,
		        }
	      	},
	      	messages: {
	        	tags:  {
		          required :'<span style="color: red;"><strong>Please provide your Email address </strong></span>',
		        }
	      	},
	      	submitHandler: function(form) {
		        var data = {
		    		'tags' : $('#tags').val(),
		    	}

		    	$.ajaxSetup({
		            headers: {
		                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		      		}
		    	});

		    	$.ajax({
		    		type: 'POST',
		    		url: '{{route('profiles.store')}}',
		    		data: data,
		    		async: true,
		    		dataType: 'json',
		    		success: function(response){
		    			if (response.status == 222) {

		    				$('#errors').html("");
		    				$('#errors').addClass("alert alert-danger");
							$.each(response.errors, function(key, err_values){
								$("#errors").append('<li>'+ err_values +'</li>')
							});				    				
						}else{
		    				$('#errors').html("");
		    				$('#errors').addClass("alert alert-success");
		    				$('#errors').text(response.messages);
		    			}
		    		}
		    	});
	      	}
	    
	    });
    });
</script>
<div class="vs-component con-vs-popup holamundo generic-popup vs-popup-primary modal" id="skills" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
	<div class="modal-dialog vs-popup" style="padding: 15px;" role="document">
      	<div class="modal-content">
	        <div class="modal-">
	          <header class="vs-popup--header modal-">
	            <div class="vs-popup--title modal-">
	              <h3>Add Skills</h3>
	            </div>
	            <i class="vs-icon notranslate icon-scale vs-popup--close vs-popup--close--icon material-icons null" data-dismiss="modal" aria-label="Close" style="background: rgb(255, 255, 255);"></i>
	          </header>
	        </div>
	        <div class="row">
			   <div class="col-md-8">
			      	<div class="form-group">
		         		<label for="tags">Select Tags&nbsp;<span id="mark">*</span></label>
			            <select name="tags[]" value="{{ $posts->tags }}" class="form-control select2 select2-multi" multiple="multiple"></select>
			      	</div>
			   	</div>
			</div>
		</div>	<!-- end of .row (form) -->
	    <div class="vs-popup--content modal- jmofy-form">
	      <div data-v-539973f8="" class="d-flex justify-content-between mb-3">
	        <p data-v-539973f8="" class="my-auto fs-14 fw-600 green-text">Start typing in the box below to search for skills.</p>
	      </div>
    </div>
  </div>
</div>
</div>
<body>
</body>
</html>