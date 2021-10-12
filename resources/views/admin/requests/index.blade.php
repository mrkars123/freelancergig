@extends('layout.admin')


@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header py-3">
	                <div class="row">
                    	<div class="col">
                    		<h3 class="m-0 font-weight-bold text-primary">Requests List</h3>
                    	</div>
                    	<div class="col" align="right">
                    		<a href="#" name="add_user" class="btn btn-success">
                    			<i class="fas fa-plus"></i>
                    			<span style="font-size: 14px;font-weight: 600">Add Requests</span>
                    		</a>
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
								<th>Title Requests</th>
								<th>Date</th>
								<th>Price</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									I Will Desgin Website i'am Profisinal working
								</td>
								<td>8 Dec, 2020</td>
								<td>15.00$</td>
								<td>
									<span class="badge badge-warning">Pending</span>
								</td>
								<td>
									<button type="button" name="delete_button" class="btn btn-primary btn-circle btn-sm view_button" data-id="3" data-status="Enable">
										<i class="fas fa-check-circle"></i>
									</button>
									<button type="button" name="delete_button" class="btn btn-danger btn-circle btn-sm delete_button" data-id="3" data-status="Enable">
										<i class="fas fa-times"></i>
									</button>
								</td>
							</tr>
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