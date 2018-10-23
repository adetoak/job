@extends('layouts.app')
@section('content')
<div class="alert alert-danger center-block alert-danger" style="margin-top: 30px; width: 98%;" role="alert">
	<button type="button" style="margin-top: -18px;" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
	<strong>Error!</strong> 
</div>
<div class="alert alert-success center-block alert-success" style="margin-top: 30px; width: 98%;" role="alert">
	<button type="button" style="margin-top: -18px;" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
	<strong>Success!</strong> 
</div>
<div class="panel">
	<div class="panel-heading">
		<div class="panel-control">
			<button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
			<button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
			<button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
			<button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
		</div>
		<h3 class="panel-title">Profile</h3>
	</div>
	<!--Horizontal Form-->
	<!--===================================================-->

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
		<li role="presentation"><a href="#passwordtab" aria-controls="passwordtab" role="tab" data-toggle="tab">Password</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="profile">
			<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{ url('profile/edit-user') }}">
		      	<div class="form-group">
			        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
			        </label>
			        <div class="col-md-6 col-sm-6 col-xs-12">
			          <input type="text" id="name" name="name" required="required" value="" class="form-control col-md-7 col-xs-12">
			        </div>
			    </div>	      
		      	<div class="form-group">
			        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
			        </label>
			        <div class="col-md-6 col-sm-6 col-xs-12">
			          <input type="text" id="username" name="username" required="required" value="" class="form-control col-md-7 col-xs-12">
			        </div>
			    </div>	      
			    <div class="form-group">
			        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Type password to confirm changes<span class="required">*</span>
			        </label>
			        <div class="col-md-6 col-sm-6 col-xs-12">
			          <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
			        </div>
			    </div>	      
		      	<div class="ln_solid"></div>
			    <div class="form-group">
			        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
			          <a href="profile" class="btn btn-primary">Cancel</a>
			          <button type="submit" class="btn btn-success">Submit</button>
			        </div>
			    </div>
		    </form>
		</div>
		<div role="tabpanel" class="tab-pane" id="passwordtab">
			<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{ ('profile/edit-password') }}">

		      <div class="form-group">
		        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="passwordnew">New Password <span class="required">*</span>
		        </label>
		        <div class="col-md-6 col-sm-6 col-xs-12">
		          <input type="password" id="passwordnew" name="passwordnew" required="required" class="form-control col-md-7 col-xs-12">
		        </div>
		      </div>
		      
		      <div class="form-group">
		        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="passwordnewconf">Retype new Password <span class="required">*</span>
		        </label>
		        <div class="col-md-6 col-sm-6 col-xs-12">
		          <input type="password" id="passwordnewconf" name="passwordnewconf" required="required" class="form-control col-md-7 col-xs-12">
		        </div>
		      </div>
		      
		      <div class="form-group">
		        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Type old password to confirm changes<span class="required">*</span>
		        </label>
		        <div class="col-md-6 col-sm-6 col-xs-12">
		          <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
		        </div>
		      </div>
		      
		      <div class="ln_solid"></div>
		      <div class="form-group">
		        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
		          <a href="profile" class="btn btn-primary">Cancel</a>
		          <button type="submit" class="btn btn-success">Submit</button>
		        </div>
		      </div>

		    </form>
		</div>
	</div>
</div>
@stop