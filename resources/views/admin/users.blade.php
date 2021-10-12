@extends('layout.admin')

@section('title','Users')

@section('content')
	<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header py-3">
						<div class="row">
	                    	<div class="col">
	                    		<div id="success_message"></div>
	                    		<div id="notifDiv" style="z-index:10000; display: none; background: green; font-weight: 450; width: 350px; position: fixed; top: 80%; left: 5%; color: white; padding: 5px 20px">
    							</div>
	                    		<h3 class="m-0 font-weight-bold text-primary">User List</h3>
	                    	</div>
	                    	<div class="col" align="right">
	                    		<button type="button" name="add_user" data-toggle="modal" data-target="#formModal"class="btn btn-success">
	                    			<i class="fas fa-plus"></i>
	                    			<span style="font-size: 14px;font-weight: 600">Add Admin</span>
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
									<th>#</th>
									<th>Username</th>
									<th>Email</th>
									<th>Type</th>
									<th>Created</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody></tbody>
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

	@include('inc.model_user')
	@include('inc.model_delete_user')

@endpush

@section('scripts')

<script>

    $('.toggle-class').on('change', function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var user_id = $(this).data('id');
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            url: 'changeStatus',
            data: {
                'status': status,
                'user_id': user_id
            },
            success:function(data) {
             
            }
        });
    });
	function deleteUser(id){
		swal({
		  title: "Are you sure?",
		  text: "Once deleted, you will not be able to recover this imaginary file!",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		}).then((whillDelete) => {
			if (whillDelete) {
				$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    },
				});
				$.ajax({
					url: "/admin/users/"+id,
					type: 'POST',
					data: {
						'_method' : 'DELETE'
					},
					success: function(data){
						// window.location.reload();
						$('#user' + id).remove();
						swal({
							title: "Delete Done! ",
							text: 'Your click the Button',
							icon: 'success',
							button: 'Done',
						});
					},
					error : function(){
						swal({
							title: 'Oops...',
							type: 'error',
							timer : '1500'
						});
					}
				});
			}else{
				swal("Your .....");
			}
		});
	}


	jQuery(document).ready(function($){

	    //----- Open model CREATE -----//
	    // jQuery('.btn-add').click(function () {
	    //     jQuery('#myForm').trigger("reset");
	    //     jQuery('#formModal').modal('show');
	    // });

	    $(".btn-save").on('click', function (e) {
	    	e.preventDefault();

	    	var data = {
	    		'username' : jQuery('#username').val(),
	    		'email': jQuery('#email').val(),
	    		'password': jQuery('#password').val(),
	    		'type': jQuery('#type').val(),
	    	}

	    	$.ajaxSetup({
	            headers: {
	                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
	      		}
	    	});

	    	$.ajax({
	    		type: 'POST',
	    		url: 'user',
	    		data: data,
	    		dataType: 'json',
	    		success: function(response){
	    			if (response.status == 400) {

	    				$('#errors').html("");
	    				$('#errors').addClass("alert alert-danger");
						$.each(response.errors, function(key, err_values){
							$("#errors").append('<li>'+ err_values +'</li>')
						});				    				
					}else{
	    				$('#success_message').html("");
	    				$('#success_message').addClass("alert alert-success");
	    				$('#success_message').text(response.messages);
	    				$('#formModal').modal('hide');
	    				$('#formModal').find('input').val("");
	    				getUserList();
	    			}
	    		}
	    	});
	    });


	    $(document).on('click', '.delete_user', function(e){
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
	    		url: '/admin/users/'+user_id,
	    		data: {
					'_method' : 'DELETE'
				},
	    		success: function(response){
	    			// console.log(response);
	    			$('#success_message').addClass("alert alert-success");
	    			$('#success_message').text(response.messages);
	    			$("#accept").modal('hide');
	    			getUserList();
	    		}
	    	});
	    });


	    // $("#btn-save").click(function (e) {
	    // 	$.ajaxSetup({
	    //         headers: {
	    //             'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
	    //         }
	    //     });
	    //     e.preventDefault();

	    //     var formData = {
	    //         username: jQuery('#username').val(),
	    //         email: jQuery('#email').val(),
	    //         password: jQuery('#password').val(),
	    //         type: jQuery('#type').val(),
	    //     };
	    //     var state = jQuery('#btn-save').val();
	    //     var type = "POST";
	    //     var user_id = jQuery('#user_id').val();
	    //     var ajaxurl = 'user';
	    //     $.ajax({
	    //     	type: type,
     //        	url: ajaxurl,
     //        	data: formData,
     //        	async: true,
     //    	 	dataType: 'json',
     //        	success: function (data) {
     //    			var user = '<tr id="user' + data.id + '"><td>' + data.id + '</td><td>' + data.username + '</td><td>' + data.email + '</td><td>' + data.type + '</td><td>' + data.created_at + '</td><td>' + '<a class=" btn-warning show_button" href="profile/'+ data.username +'"><i class="fas fa-eye"></i></a><input type="checkbox" class="toggle-class" data-id="'+data.id+'" checked><button type="button" name="delete_button" class=" delete_button deleteRecord" onclick=' + 'deleteUser('+ data.id +')' + '><i class="fas fa-times"></i></button></td>';
	    //     		if (state == "add") {
	    //                 jQuery('#todos-list').append(user);
	    //             } else {
	    //                 jQuery("#user" + user_id).replaceWith(user);
     //        		}
     //        		jQuery('#myForm').trigger("reset");
     //        		jQuery('#formModal').modal('hide');
     //    		},
     //    		error : function(response, textStatus, errorThrown){
     //            console.log(errorThrown);   
     //        }
     //    	});
	    // });
    });


    getUserList();
    $(document).on('click', '.active_deactive_user', function() {
        const thisRef = $(this);
        thisRef.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
        $.ajax({
	        type: 'GET',
	        url: 'active_deactive_user/'+thisRef.attr('id'),
	        success:function(response) {
	            if (response) {
	            	showAlert(200, 'Status Updated Successfully');
	                getUserList();
	            }
	    	}   
    	});
   	});


   
    function getUserList() {
	    $.ajax({
	        type: 'GET',
	        url: 'userFetchList',
	        success: function (response) {
	            var response = JSON.parse(response);
	            $('tbody').empty();
	            response.forEach(element => {
                   $('tbody').append(`<tr>
	                    <td>${element.id}</td>
	                    <td>${element.username}</td>
	                    <td>${element.email}</td>
	                    <td>${element.type}</td>
	                    <td>${element.created_at}</td>
	                    <td class='active'><span class='${element.status == true ? `badge badge-success` : `badge badge-warning` } ${element.status == 2 ? `not_access` : `badge-success` }'>${element.status == 0 ? `Blocked` : `Active`}</span></td>
	                    <td>
	                    <button class="btn ${element.status == true ? `btn-danger` : `btn-primary`} btn-sm active_deactive_user ${element.status == 2 ? `btn-danger` : `btn-primary`}" ${element.status == 2 ? `disabled` : ``} id="${element.id}">${element.status == 0 ? `<i class="fas fa-check-circle"></i>` : `<i class="fas fa-ban"></i>`}</button>
	                    <button class="btn btn-dark btn-sm delete_user ${element.status == 2 ? `not_delete` : ``}"  ${element.status == 2 ? `disabled` : ``} value="${element.id}"><i class="fas fa-times"></i></button>
	                    </td>
	                </tr>`);
	            });
	        }
	    })
	}
	function showAlert(code, message) {
	    $('#notifDiv').css('background', (code === 200 ? 'green': 'red'));
	    $('#notifDiv').fadeIn();
	    $('#notifDiv').text(message);
	    setTimeout(() =>{
	        $('#notifDiv').fadeOut();   
	    }, 3000)
	}


</script>
@endsection