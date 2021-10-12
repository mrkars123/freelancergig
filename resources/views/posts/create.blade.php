@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')

	{!! Html::style('assets/css/parsley.css') !!}
	{!! Html::style('assets/css/select2.min.css') !!}

@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>

			{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
				{{ Form::label('first_name', "first_name:") }}
				{{ Form::text('first_name', null, array('class' => 'form-control', 'required' => '')) }}

				{{ Form::label('tags', 'Tags:') }}
				<select class="form-control select2-multi" name="tags[]" multiple="multiple">
					@foreach($tags as $tag)
						<option value='{{ $tag->id }}'>{{ $tag->name }}</option>
					@endforeach

				</select>

				{{ Form::label('about', "About:") }}
				{{ Form::textarea('about', null, array('class' => 'form-control', 'required' => '')) }}
				
				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
		</div>
	</div>

@endsection


@section('scripts')

	{!! Html::script('assets/js/parsley.min.js') !!}
	{!! Html::script('assets/js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>

@endsection
