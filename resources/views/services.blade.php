@extends('layouts.app')
@section('content')
@if ($message = Session::get('error_msg'))
<div class="alert alert-danger center-block alert-danger" style="margin-top: 30px; width: 98%;" role="alert">
  <button type="button" style="margin-top: -18px;" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
  <strong>Error!</strong> 
</div>
@endif
@if ($message = Session::get('success_msg'))
<div class="alert alert-success center-block alert-success" style="margin-top: 30px; width: 98%;" role="alert">
  <button type="button" style="margin-top: -18px;" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
  <strong>Success!</strong> 
</div>
@endif
<div class="panel">
    <div class="panel-heading">
        <div class="panel-control">
            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
            <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
        </div>
        <h3 class="panel-title">Services</h3>
    </div>
    <!--Horizontal Form-->
    <!--===================================================-->
	<!-- Nav tabs -->
	  	<ul class="nav nav-tabs" role="tablist">
	    	<li role="presentation" class="active"><a href="#newTab" aria-controls="newTab" role="tab" data-toggle="tab">Services</a></li>
		    <li role="presentation"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">New Service</a></li>
		    <li role="presentation"><a href="#roles" aria-controls="users" role="tab" data-toggle="tab">Service Category</a></li> 
	  	</ul>

	  <!-- Tab panes -->
	  	<div class="tab-content">
	    	<div role="tabpanel" class="tab-pane active" id="newTab">
	    		<div class="panel-body">
			        <!-- <a href="exchange-rate/add" style="margin-bottom: 20px;" class="btn btn-primary"> ADD</a> -->			        
			        
			        <!-- <a href="exchange-rate/update" style="margin-bottom: 20px;" class="btn btn-primary"> Update existing data</a> -->
			        <table id="demo-dt-basic" class="table table-striped table-bordered">
			            <thead>
			                <tr>
			                    <th class="all">S/N</th>
			                    <th class="all">Service Title</th>
			                    <th class="all">Seller Username</th>
			                    <th class="min-tablet">Seller Telephone</th>
			                    <th class="min-tablet">Seller Email</th>
			                    <th class="min-tablet">service Price</th>
			                    <th class="min-tablet text-center">Status</th>
			                    <th class="all">Action</th>
			                </tr>
			            </thead>
			            <tbody>         
			                    <?php $i=1; ?>
			                    @foreach ($services as $service)
			                    <tr>
			                        <td> {{ $i++ }} </td>
			                        <td>{{ $service->title }}</td>
			                        <td>{{ $service->username }}</td>
			                        <td>{{ $service->telephone }}</td>
			                        <td>{{ $service->email }}</td>
			                        <td>{{ $service->price }}</td>
			                        <td class="text-center">
			                        	@if ($service->verification != 0)
			                        		<button class="btn btn-warning">Not Verified</button>
			                        	@else
			                        		<button class="btn btn-success">Verified</button>
			                        	@endif
			                        </td>
			                        <td>
			                          <div class="btn-group">
			                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Action <span class="caret"></span></button>
			                            <ul role="menu" class="dropdown-menu">
			                              <li><a href="#">Send Mail</a></li>
			                              <li><a href="#">Edit</a></li>
			                              <li><a href="#">Delete</a></li>        
			                            </ul>
			                          </div><!-- /btn-group -->
			                        </td>
			                    </tr>
			                    @endforeach
			                     
			            </tbody>
			        </table>
			    </div>
	    	</div>
	    	<div role="tabpanel" class="tab-pane" id="users">
		    	<form class="form-group" method="post" enctype="multipart/form-data" action="newservice">
	    			{{ csrf_field() }}
	    			@include('partials.post-service-form')	              
	    	</form>
	    </div>
	    <div role="tabpanel" class="tab-pane clearfix" id="roles">
	    	<div class="">
	    		<form id="demo-form2" method="post" action="{{ url('servicescategory') }}">
	    			{{ csrf_field() }}
		    		<div class="form-group col-md-8">
			    		<div class="form-group">
						  <label class="" for="inlineFormInputName2">Category Title</label>
						  <input type="text" name="categorytitle" class="form-control col-md-8" placeholder="e.g Computer &amp; Accessories">  
						</div>		    			
		    		</div>					
					<div class="col-md-12 form-group">
						<button type="submit" class="btn btn-primary">Add</button>
					</div>				
				</form>	    		
	    	</div>
	    	<div class="col-md-12">
		    	<table id="demo-dt-basic" class="table table-striped table-bordered">
	                <thead>
	                    <tr>
	                        <th>S/N</th>
	                        <th>service Category Title</th>
	                        <th>Action</th>
	                    </tr>
	                </thead>
	                <tbody>	  
	                <?php $x=1; ?>        
	                @foreach($servicecategories as $servicecategory)      	
	                	<tr>
	                		<td>{{ $x++ }}</td>           		
	                		<td>{{ $servicecategory->title }}</td>	                		
	                		<td>
	                			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#roleModal">Edit</button>
	                		</td>
	                	</tr>
	                @endforeach
	                	<div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel">
						  	<div class="modal-dialog" role="document">
						   		<div class="modal-content">
							    <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="exampleModalLabel">Edit User Type</h4>
							    </div>
							    <div class="modal-body">
							      	<form class="form-group" method="post" action="profile/edit-role/">
							    		<div class="form-group">
										  <label class="" for="inlineFormInputName2">User Group</label>
										  <input type="text" name="role" value="" class="form-control" placeholder="Add user role">  
										</div>
										<div class="form-group">
											<label>Privileges</label>
										</div>				  	
										<div class="form-group">
										  	<label class="checkbox-inline">
											  <input type="checkbox" name="domaintlds" 'checked=""': '';  value="1"> Domain Tlds
											</label>
										 	<label class="checkbox-inline">
											  <input type="checkbox" name="tldgroups" value="1"> Add Tld Groups
											</label>
											<label class="checkbox-inline">
											  <input type="checkbox" name="exchangerate" value="1"> Exchange Rate
											</label>												
										 	<label class="checkbox-inline">
											  <input type="checkbox" name="adduser" value="1"> Manage User
											</label>
										</div>
										<div class="form-group">
											<label class="checkbox-inline">
											  <input type="checkbox" name="questiontypes" value="1"> Question Types
											</label>
											<label class="checkbox-inline">
											  <input type="checkbox" name="conversiontracker" value="1"> Conversion Tracker
											</label>
											<label class="checkbox-inline">
											  <input type="checkbox" name="upsells" value="1"> Up Sells
											</label>
											<label class="checkbox-inline">
											  <input type="checkbox" name="logs" value="1"> Logs
											</label>											
										</div>
										</div>										
								      	<div class="modal-footer">
								        	<a id="delete" href="" class="btn btn-danger" >Delete</a>
								        	<button type="submit" class="btn btn-primary">Update</button>
								      	</div>	       									
									</form>							    	
							    </div>
						    	</div>
						  	</div>
						</div>	                	
	                </tbody>
	            </table>	    		
	    	</div>
	    </div>
	  </div>
	 </div>

	 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
	      </div>
	       <form id="update" data-parsley-validate class="form-horizontal form-label-left" method="post" action="">
	      <div class="modal-body">
	    		 <div class="form-group">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username<span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>
	    		 <div class="form-group">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="name" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>
	    		 <div class="form-group">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password<span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="password" id="password" name="password" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>
	    		 <div class="form-group">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="passwordnewconf">Confirm Password<span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <input type="password" id="passwordnewconf" name="passwordnewconf" class="form-control col-md-7 col-xs-12">
	                </div>
	              </div>
	    		 <div class="form-group">
	                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="levelId">Level<span class="required">*</span>
	                </label>
	                <div class="col-md-6 col-sm-6 col-xs-12">
	                  <select name="levelId" id="levelId" class="form-control" required="required">
	                    	<option value="">Hello</option>	                  	
	                    	<option value="">Welcome</option>
	                  </select>
	                </div>
	              </div>

	              <div class="ln_solid"></div>
	      </div>
	      <div class="modal-footer">
	        <a id="delete" href="#" class="btn btn-danger" >Delete</a>
	        <button type="submit" class="btn btn-primary">Update</button>
	      </div>

	    	</form>
	    </div>
	  </div>
	</div>
@stop