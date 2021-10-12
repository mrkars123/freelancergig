<div class="modal fade subcategory" id="subcategory">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Sub Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="errors"></div>
        <form id="myForm" name="myForm" class="form-horizontal" novalidate="">
          <div class="form-group">
            <label for="category">Category</label>
            <select name="cat_id" id="cat_id" class="form-control" >
              <option value="">Select Category</option>
              @foreach($categories as $category)
                <option value="{{ $category->id}}">{{ucwords($category->cat_name)}}</option>
              @endforeach
            </select>
            <span class="text-danger error-text cat_id_error"></span>
          </div>
          <div class="form-group">
            <label for="sub_cat">Sub Category</label>
            <input type="text" id="sub_cat" name="sub_cat" class="form-control" value="">
            <span class="text-danger error-text sub_cat_error"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-add-sub-cat" value="add">Add Sub Category</button>
      </div>
    </div>
  </div>
</div>