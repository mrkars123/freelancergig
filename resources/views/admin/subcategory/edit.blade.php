@extends('layout.admin')

@section('title','Sub_Category')

@section('content')
	
<form action="{{ url('admin/subcategory-update/'.$subcategory->id) }}" method="POST" enctype="multipart/form-data" id="editformData">
  {{ csrf_field() }}
	{{ method_field('PUT') }}

  <div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" name="cat_id" id="edit_cat_id">
      <option disabled="disabled">Select</option>
      @foreach($categories as $category)
        <option value="{{$category->id}}" {{$category->id == $subcategory->cat_id ? 'selected' :  ''}}>{{ $category->cat_name }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="sub_cat">Sub Category</label>
    <input type="text" id="edit_sub_cat" name="sub_cat" class="form-control" value="{{ $subcategory->sub_cat }}">
  </div>
  <a class="btn btn-danger" href="{{ url('admin/subcategory') }}">BACK</a>
  <button type="submit" class="btn btn-dark waves-effect">Update</button>
</form>

@endsection


@section('scripts')

<script type="text/javascript">
    // $("#editformData").on('submit', function(e){
    //   e.preventDefault();
    //   $.ajaxSetup({
    //     headers: {
    //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    //   });
    //   var data = {
    //     'cat_id' : $('#edit_cat_id').val(),
    //     'sub_cat' : $('#edit_sub_cat').val()
    //   }
    //   $.ajax({
    //     url: $(this).attr('action'),
    //     type:$(this).attr('method'),
    //     data: new FormData(this),
    //     processData:'json',
    //     contentType: false,
    //     beforeSend: function(){
    //       $(document).find('span.error-text').text('');
    //     },
    //     success:function(data){
    //       if (data.status) {

    //       }
    //     }
    //   });
    // });
</script>

@endsection





