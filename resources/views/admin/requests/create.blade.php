@extends('layout.admin')


@section('content')

<select name="categories[]" id="category" class="form-control">
    @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
    @endforeach
</select>

@endsection