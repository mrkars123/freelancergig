@extends('layout.admin')

@section('title','Sub_Category')

@section('content')
	
	<div class="row">
		<div class="col-md-6">

			<h2 class="pb-4">Tags</h2>

			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($tags as $tag)
					<tr>
						<th>{{ $tag->id }}</th>
						<td>{{ $tag->name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-md-5">
			<div class="well">
				@if(session()->has('success'))

					<div class="alert alert-success">
						<b>Success:</b>
						{{session()->get('success')}}
					</div>
				@endif

				{!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST']) !!}
					<h2>New Tag</h2>
					{{ Form::label('name', 'Name:') }}
					{{ Form::text('name', null, ['class' => 'form-control']) }}

					{{ Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block btn-h1-spacing mt-3']) }}
				
				{!! Form::close() !!}
			</div>
		</div>
		
	</div>
@endsection