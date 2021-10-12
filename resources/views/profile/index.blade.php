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

    {!! Html::style('assets/css/select2.min.css') !!}
    
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

				<!-- @if(session()->has('success'))

					<div class="alert alert-success">
						<b>Success:</b>
						{{session()->get('success')}}
					</div>
				@endif -->


				
			 	
				<section>
					@foreach ($post->tags as $tag)

						<span class="badge badge-primary">{{$tag->name}}</span>

					@endforeach

				</section>
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
	{!! Html::script('assets/js/select2.min.js') !!}

<script type="text/javascript">

	
    $(document).ready(function() {

		$('.select2-multi').select2();


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
    <div class="modal-dialog vs-popup" style="
    padding: 15px;
" role="document">
      <div class="modal-content">
        <div class="modal-">
          <header class="vs-popup--header modal-">
            <div class="vs-popup--title modal-">
              <h3>Add Skills</h3>
            </div>
            <i class="vs-icon notranslate icon-scale vs-popup--close vs-popup--close--icon material-icons null" data-dismiss="modal" aria-label="Close" style="background: rgb(255, 255, 255);"></i>
          </header>

        </div>
        <form method="POST" id="" action="{{route('profiles.store')}}">
		          	{{csrf_field()}}

		          	@if(!empty($dataProfile->user_id))
		          		<input type="hidden" name="user_id" value="{{$dataProfile->user_id}}">
	  				@endif

	  				<div class="row">
					   <div class="col-md-12">
					      	{{ Form::label('tags', 'Tags:', ['class' => 'form-spacing-top']) }}
							{{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}
					   </div>
					</div>

		          	<!-- <input type="text" id="first_name" name="first_name" @if(!empty($dataProfile['first_name' ])) value="{{$dataProfile['first_name']}}" @endif> -->


		          	<div data-v-b953477e="" class="row  modal- text-right form-group p-0 d-block mt-4">
		            	<div data-v-b953477e="" class="col-12">
			              <a data-v-b953477e="" href="javascript:void(0)" class="btn green-btn-lined fs-12 py-1 px-2 d-sm-inline-block" id="btnReset">
			                <span data-v-b953477e="" class="d-none d-sm-inline-block">Clear All</span>
			              </a>
			              <input type="submit" value="Save" class="btn green-btn-lined fs-12 py-1 px-2 d-sm-inline-block">
			            </div>
		          	</div>
	          	</form>
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