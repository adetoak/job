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
        <h3 class="panel-title">Mail</h3>
    </div>
    <!--Horizontal Form-->
    <!--===================================================-->
	<!-- Nav tabs -->
	  	<ul class="nav nav-tabs" role="tablist">
	    	<li role="presentation" class="active"><a href="#newMail" aria-controls="newMail" role="tab" data-toggle="tab">Send Mail to All Clients </a></li>
		    <li role="presentation"><a href="#mails" aria-controls="mails" role="tab" data-toggle="tab">Sent Mails</a></li>		   
	  	</ul>

	  <!-- Tab panes -->
	  	<div class="tab-content">
	    	<div role="tabpanel" class="tab-pane active" id="newMail">
	    		<form id="demo-form2" class="form-horizontal form-label-left" method="post" action="{{ url('sendmail') }}">
	    			{{ csrf_field() }}
	    			<div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subject">Subject<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="subject" id="subject" name="subject" required="required" class="form-control col-md-7 col-xs-12">
                <p class="help-block">
        		        <strong>{{ $errors->first('subject') }}</strong>
        		    </p>
              </div>
          	</div>
    		    <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="body">Body<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea name="message"></textarea>
                <p class="help-block">
			           <strong>{{ $errors->first('message') }}</strong>
			          </p>
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
		    <div role="tabpanel" class="tab-pane" id="mails">
		    	<div class="panel-body">
              <!-- <a href="exchange-rate/add" style="margin-bottom: 20px;" class="btn btn-primary"> ADD</a> -->              
              
              <!-- <a href="exchange-rate/update" style="margin-bottom: 20px;" class="btn btn-primary"> Update existing data</a> -->
              <table id="demo-dt-basic" class="table table-striped table-bordered">
                  <thead>
                      <tr>
                          <th class="all">S/N</th>
                          <th class="min-tablet">Date Sent</th>
                          <th class="all">Sent To</th>
                          <th class="all">Subject</th>                                                  
                          <th class="all">Action</th>
                      </tr>
                  </thead>
                  <tbody>         
                          <?php $i=1; ?>
                          @foreach ($mails as $mail)
                          <tr>
                              <td> {{ $i++ }} </td>
                              <td>{{ $mail->created_at }}</td>
                              <td>{{ $mail->username }}</td>
                              <td>{{ $mail->subject }}</td>                                             
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
	  </div>
	</div>
	 
@stop