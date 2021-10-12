@extends('main')

@section('title', '| Edit Blog Post')

@section('stylesheets')

	{!! Html::style('assets/css/select2.min.css') !!}

@endsection

@section('content')

	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('about', 'About:') }}
			{{ Form::text('about', null, ["class" => 'form-control input-lg']) }}

			{{ Form::label('first_name', 'First_name:') }}
			{{ Form::text('first_name', null, ["class" => 'form-control input-lg']) }}


			{{ Form::label('tags', 'Tags:', ['class' => 'form-spacing-top']) }}
			{{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}

			<div class="col-md-4" style="padding: 0;margin-top: 30px">
				<div class="col-sm-12" style="padding: 0;">
					{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
				</div>
			</div>

		</div>


		{!! Form::close() !!}
	</div>	<!-- end of .row (form) -->

@stop

@section('scripts')

	{!! Html::script('assets/js/select2.min.js') !!}

	<script type="text/javascript">

		$('.select2-multi').select2();

	</script>

@endsection