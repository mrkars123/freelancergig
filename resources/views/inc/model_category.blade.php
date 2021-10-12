<div class="modal fade" id="category" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="errors"></div>
        <form id="myForm" name="myForm" class="form-horizontal" novalidate="">
          <div class="form-group">
            <label for="">Category</label>
            <input type="text" id="cat_name" name="cat_name" class="form-control" value="">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-add-cat">Add Category</button>
      </div>
    </div>
  </div>
</div>