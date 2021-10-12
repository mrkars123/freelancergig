<div class="modal fade" id="edit_subcat" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Sub Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="updated_error"></div>
        <form id="myForm">

          {{ csrf_field() }}
          {{ method_field('PUT') }}

          <input type="hidden" name="id" id="id">

          <div class="form-group">
            <label for="category">Category</label>
            <select  class="form-control" >
              @foreach($categories as $category)
                <option id="asd" value="{{$category->id}}" {{$category->id == $subcategory->cat_id ? 'selected' :  ''}}><span id="span">{{ $category->cat_name }}</span></option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="sub_cat">Sub Category</label>
            <input type="text" id="edit_sub_cat" name="sub_cat" class="form-control" value="">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_sub_cat">Update</button>
      </div>
    </div>
  </div>
</div>

@section('scripts')

<script type="text/javascript">
  $(document).ready(function(){

    

  }); 
</script>

@endsection