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
        <h3 class="panel-title">Clients</h3>
    </div>
    <!--Horizontal Form-->
    <!--===================================================-->
  <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#newTab" aria-controls="newTab" role="tab" data-toggle="tab">clients</a></li>
        <li role="presentation"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">New client</a></li>
        <li role="presentation"><a href="#roles" aria-controls="users" role="tab" data-toggle="tab">Client Category</a></li> 
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
                          <th class="all">Full Name</th>
                          <th class="all">Username</th>
                          <th class="min-tablet">Telephone</th>
                          <th class="min-tablet">Email</th>                          
                          <th class="all">Action</th>
                      </tr>
                  </thead>
                  <tbody>         
                    <?php $i=1; ?>
                    @foreach ($clients as $client)
                    <tr>
                        <td> {{ $i++ }} </td>
                        <td>{{ $client->full_name }}</td>
                        <td>{{ $client->username }}</td>
                        <td>{{ $client->telephone }}</td>
                        <td>{{ $client->email }}</td>                              
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
          <form class="form-group" method="post" enctype="multipart/form-data" action="{{ url('clientcategory') }}">
            {{ csrf_field() }}
            @include('partials.post-client-form')                
        </form>
      </div>
      <div role="tabpanel" class="tab-pane clearfix" id="roles">
        <div class="text-right">                    
          <div class="col-md-12 form-group">
            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#clientcategory">New Category</button>
          </div>                       
        </div>
        <div class="modal fade" id="clientcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New Client Category</h4>
              </div>
              <form id="update" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="{{ url('clientcategory') }}">
                {{ csrf_field() }}
                <div class="modal-body">
                  <div class="form-group">
                      <label class="col-sm-3 control-label" for="level1">Image</label>
                      <div class="col-sm-9">
                          <input type="file" name="categoryimg">
                      </div>
                  </div>
                  <p class="help-block">
                      <strong>{{ $errors->first('categoryimg') }}</strong>
                  </p>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title*<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                    <p class="help-block">
                     <strong>{{ $errors->first('title') }}</strong>
                    </p>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Price(N)<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="price" name="price" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                    <p class="help-block">
                     <strong>{{ $errors->first('price') }}</strong>
                    </p>
                  </div>                                    
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sdescription">Short Description<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="sdescription" name="sdescription" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                  <p class="help-block">
                     <strong>{{ $errors->first('sdescription') }}</strong>
                    </p>
                </div>   
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="body">Long Description<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea name="ldescription"></textarea>
                    <p class="help-block">
                     <strong>{{ $errors->first('ldescription') }}</strong>
                    </p>
                  </div>
                </div>                                                   
                <div class="ln_solid"></div>
                </div>                
                <div class="modal-footer">
                  <a id="delete" href="#" class="btn btn-default" >close</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <table id="demo-dt-basic" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Client Category Title</th>
                    <th>Short Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>        
            <?php $x=1; ?>
            @foreach($clientcategorys as $clientcategory)                 
              <tr>
                <td>{{ $x++ }}</td>               
                <td>{{ $clientcategory->title }}</td>               
                <td>{{ $clientcategory->sdescription }}</td> 
                <td>{{ $clientcategory->price }}</td>                     
                <td>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editclientcategory{{ $clientcategory->id }}">Edit</button>
                </td>
              </tr>              
              <div class="modal fade" id="editclientcategory{{ $clientcategory->id }}" tabindex="-1" role="dialog" aria-labelledby="sexampleModalLabel">
                <div class="modal-dialog" role="dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="exampleModalLabel">Edit Client Category</h4>
                    </div>
                    <form id="update" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="{{ url('clientcategory') }}">
                      {{ csrf_field() }}
                      <div class="modal-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="level1">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="categoryimg">
                            </div>
                        </div>
                        <p class="help-block">
                            <strong>{{ $errors->first('categoryimg') }}</strong>
                        </p>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title*<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                          <p class="help-block">
                           <strong>{{ $errors->first('title') }}</strong>
                          </p>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Price(N)<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="price" name="price" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                          <p class="help-block">
                           <strong>{{ $errors->first('price') }}</strong>
                          </p>
                        </div>                                    
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sdescription">Short Description<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="sdescription" name="sdescription" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                          <p class="help-block">
                             <strong>{{ $errors->first('sdescription') }}</strong>
                            </p>
                        </div>   
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="body">Long Description<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="ldescription"></textarea>
                            <p class="help-block">
                             <strong>{{ $errors->first('ldescription') }}</strong>
                            </p>
                          </div>
                        </div>                                                   
                        <div class="ln_solid"></div>
                      </div>                
                      <div class="modal-footer">
                        <a id="delete" href="#" class="btn btn-default" >close</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>   
            @endforeach                  
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