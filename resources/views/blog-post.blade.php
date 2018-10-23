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
        <h3 class="panel-title">Blog Posts</h3>
    </div>
    <!--Horizontal Form-->
    <!--===================================================-->
	<!-- Nav tabs -->
	  	<ul class="nav nav-tabs" role="tablist">
	    	<li role="presentation" class="active"><a href="#blogposts" aria-controls="blogposts" role="tab" data-toggle="tab">Posts</a></li>
		    <li role="presentation"><a href="#newpost" aria-controls="newpost" role="tab" data-toggle="tab">New Post</a></li>		     
	  	</ul>

	  <!-- Tab panes -->
	  	<div class="tab-content">
	    	<div role="tabpanel" class="tab-pane active" id="blogposts">
	    		<div class="panel-body">
			        <!-- <a href="exchange-rate/add" style="margin-bottom: 20px;" class="btn btn-primary"> ADD</a> -->			        
			        
			        <!-- <a href="exchange-rate/update" style="margin-bottom: 20px;" class="btn btn-primary"> Update existing data</a> -->
			        <table id="demo-dt-basic" class="table table-striped table-bordered">
			            <thead>
			                <tr>
			                    <th class="all">S/N</th>
			                    <th class="all">Date Posted</th>
			                    <th class="all">Post Title</th>
			                    <th class="min-tablet">Post Link</th>			                    
			                    <th class="all">Action</th>
			                </tr>
			            </thead>
			            <tbody>         
		                    <?php $i=1; ?>
		                    @foreach ($posts as $post)
		                    <tr>
		                        <td> {{ $i++ }} </td>
		                        <td>{{ $post->created_at }}</td>
		                        <td>{{ $post->title }}</td>
		                        <td>{{ $post->link }}</td>			                                       
		                        <td>
		                          <div class="btn-group">
		                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Action <span class="caret"></span></button>
		                            <ul role="menu" class="dropdown-menu">                          
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
    	<div role="tabpanel" class="tab-pane" id="newpost">
	    	<form class="form-group" method="post" enctype="multipart/form-data" action="newpost">
    			{{ csrf_field() }}
    			@include('partials.new-post-form')	              
	    	</form>
	    </div>	    
	</div>
</div>

@stop