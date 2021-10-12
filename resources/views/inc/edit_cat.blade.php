<div class="modal fade" id="edit_cat" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="updated_error"></div>
        <input type="hidden" id="id" name="id">
        <form id="myForm">

          {{ csrf_field() }}
          {{ method_field('PUT') }}

          <input type="hidden" name="id" id="id">

          <div class="form-group">
            <label for="cat_n">Category</label>
            <input type="text" name="cat_name" id="cat_n" class=" form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_cat">Update</button>
      </div>
    </div>
  </div>
</div>