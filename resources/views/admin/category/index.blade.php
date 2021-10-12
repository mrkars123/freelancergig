@extends('layout.admin')

@section('title','Category')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header py-3">
					<div class="row">
                    	<div class="col">
                    		<div id="success_message"></div>
                    		<h3 class="m-0 font-weight-bold text-primary">User List</h3>
                    	</div>
                    	<div class="col" align="right">
                    		<button type="button" id="category-btn" class="btn btn-success">
                    			<i class="fas fa-plus"></i>
                    			<span style="font-size: 14px;font-weight: 600">Add Category</span>
                    		</button>
                    	</div>
                    </div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="dataTables_length" id="user_table_length">
								<label>
									Show 
									<select name="user_table_length" aria-controls="user_table" class="custom-select custom-select-sm form-control form-control-sm">
										<option value="10">10</option>
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select>
									entries
								</label>
							</div>
						</div>
						<div class="col-sm-12 col-md-6">
							<div id="user_table_filter" class="dataTables_filter">
								<label>Search:
									<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="user_table">
								</label>
							</div>
						</div>
					</div>
					<table class="table table-responsive-sm table-bordered table-striped table-sm">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Created</th>
								<th>Updated At</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody class="as">
							@foreach($categories as $row=>$category)
								<tr>
									<td>{{$row + 1}}</td>
									<td>{{$category->cat_name}}</td>
									<td>{{$category->created_at->diffForHumans()}}</td>
									<td>{{$category->updated_at->diffForHumans()}}</td>
									<td>
										<button class="btn btn-dark btn-sm edit_cat">
					                    	Edit
					                    </button>
										<button class="btn btn-dark btn-sm delete_cat" value="{{$category->id}}">
					                    	Delete
					                    </button>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					<div class="row">
						<div class="col-sm-12 col-md-5">
							<div class="dataTables_info" id="user_table_info" role="status" aria-live="polite">
								Showing 1 to 2 of 2 entries
							</div>
						</div>
						<div class="col-sm-12 col-md-7">
							<div class="dataTables_paginate paging_simple_numbers" id="user_table_paginate">
								<ul class="pagination">
									<li class="paginate_button page-item previous" id="user_table_previous">
										<a href="#" aria-controls="user_table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
									</li>
									<li class="paginate_button page-item active">
										<a href="#" aria-controls="user_table" data-dt-idx="1" tabindex="0" class="page-link">1</a>
									</li>
									<li class="paginate_button page-item">
										<a href="#" aria-controls="user_table" data-dt-idx="2" tabindex="0" class="page-link">2</a>
									</li>
									<li class="paginate_button page-item next" id="user_table_next">
										<a href="#" aria-controls="user_table" data-dt-idx="3" tabindex="0" class="page-link">Next</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('models')

	@include('inc.model_category')
	@include('inc.edit_cat')
	@include('inc.model_delete_user')

@endpush

@section('scripts')
	<script type="text/javascript">
		
		$(document).ready(function(){

		    $('#category-btn').click(function () {
		        $('#category').modal('show');
		    });

		    $(".btn-add-cat").on('click', function (e) {
		    	e.preventDefault();

		    	var data = {
		    		'cat_name' : $('#cat_name').val(),
		    	}

		    	$.ajaxSetup({
		            headers: {
		                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		      		}
		    	});

		    	$.ajax({
		    		type: 'POST',
		    		url: 'categor',
		    		data: data,
		    		async: true,
		    		dataType: 'json',
		    		success: function(response){
		    			if (response.status == 401) {

		    				$('#errors').html("");
		    				$('#errors').addClass("alert alert-danger");
							$.each(response.errors, function(key, err_values){
								$("#errors").append('<li>'+ err_values +'</li>')
							});				    				
						}else{
		    				$('#success_message').html("");
		    				$('#success_message').addClass("alert alert-success");
		    				$('#success_message').text(response.messages);
		    				$('#category').modal('hide');
		    				$('#category').find('input').val("");
		    				$( "table" ).load( "category table" );
		    			}
		    		}
		    	});
		    });
		});

		$(document).on('click', '.edit_cat', function(){

			$("#edit_cat").modal('show');

			$tr = $(this).closest('tr');

			var  data = $tr.children('td').map(function(){
				return $(this).text();
			}).get();

			console.log(data);

			$('#id').val(data[0]);
			$('#cat_n').val(data[1]);
		});

		$('.update_cat').on('click', function (e) {
			e.preventDefault();

			$(this).text('Updating');

			var id = $("#id").val();
			var data = {
				'cat_name' : $('#cat_n').val()
			}

			$.ajaxSetup({
	            headers: {
	                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	      		}
	    	});

	    	$.ajax({
	    		type: 'PUT',
	    		url: 'update-cat/'+id,
	    		data:data,
	    		success: function(response){
	    			if (response.status == 400) {
	    				$('#updated_error').html("");
	    				$('#updated_error').addClass("alert alert-danger");
						$.each(response.errors, function(key, err_values){
							$("#updated_error").append('<li>'+ err_values +'</li>')
						});				
						$(".update_cat").text('Update');
					}
					else if (response.status == 404)
					{
						$('#updated_error').html("");
	    				$('#updated_error').addClass("alert alert-success");
	    				$('#updated_error').text(response.messages);
	    				$(".update_cat").text('Update');
					}
					else
					{
						$('#updated_error').html("");
						$('#success_message').html("");
	    				$('#success_message').addClass("alert alert-success");
	    				$('#success_message').text(response.messages);
	    				$('#edit_cat').modal('hide');
	    				$(".update_cat").text('Update');
	    				$( "table" ).load( "category table" );
					}
    			}
			});

		});

		$(document).on('click', '.delete_cat', function(e){
	    	e.preventDefault();
	    	var user_id = $(this).val();
	    	$('#delete_user_id').val(user_id);
	    	$("#accept").modal('show');
	    });
	    $(document).on('click', '.vs-dialog-accept-button', function(e){
	    	e.preventDefault();

	    	var user_id = $('#delete_user_id').val();

			$.ajaxSetup({
	            headers: {
	                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
	      		}
	    	});	    		

	    	$.ajax({
	    		type: 'POST',
	    		url: 'dcategor/'+user_id,
	    		data: {
					'_method' : 'DELETE'
				},
	    		success: function(response){
	    			// console.log(response);
	    			$('#success_message').addClass("alert alert-success");
	    			$('#success_message').text(response.messages);
	    			$("#accept").modal('hide');
    				$( "table" ).load( "category table" );
	    		}
	    	});

	    });

		
	</script>
@endsection
