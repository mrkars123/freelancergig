$("#btn-save").click(function (e) {
	    	$.ajaxSetup({
	            headers: {
	                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
	            }
	        });
	        e.preventDefault();

	        var formData = {
	            username: jQuery('#username').val(),
	            email: jQuery('#email').val(),
	            password: jQuery('#password').val(),
	            type: jQuery('#type').val(),
	        };
	        var state = jQuery('#btn-save').val();
	        var type = "POST";
	        var user_id = jQuery('#user_id').val();
	        var ajaxurl = 'user';
	        $.ajax({
	        	type: type,
            	url: ajaxurl,
            	data: formData,
            	async: true,
        	 	dataType: 'json',
            	success: function (data) {
        			var user = '<tr id="user' + row.id + '"><td>' + data.id + '</td><td>' + data.username + '</td><td>' + data.email + '</td><td>' + data.type + '</td><td>' + data.created_at + '</td><td>' + '<a class=" btn-warning show_button" href="profile/'+ data.username +'"><i class="fas fa-eye"></i></a><input type="checkbox" class="toggle-class" data-id="'+data.id+'" checked><button type="button" name="delete_button" class=" delete_button deleteRecord" onclick=' + 'deleteUser('+ data.id +')' + '><i class="fas fa-times"></i></button></td>';
	        		if (state == "add") {
	                    jQuery('#todos-list').append(user);
	                } else {
	                    jQuery("#user" + user_id).replaceWith(user);
            		}
            		jQuery('#myForm').trigger("reset");
            		jQuery('#formModal').modal('hide');
        		},
        		error : function(response, textStatus, errorThrown){
                console.log(errorThrown);   
            }
        	});
	    });