@extends('layouts.app')
@section('content')
<div class="alert alert-danger alert-danger" role="alert">
  <button type="button" style="margin-top: -18px;" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
  <strong>Error!</strong> 
</div>
<div class="alert alert-success alert-success" role="alert">
  <button type="button" style="margin-top: -18px;" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
  <strong>Success!</strong> 
</div>

<!-- Basic Data Tables -->
<!--===================================================-->
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Products</h3>
    </div>
    <div class="panel-body">
        <!-- <a href="exchange-rate/add" style="margin-bottom: 20px;" class="btn btn-primary"> ADD</a> -->

        <a href="exchange-rate/pull" class="btn btn-primary"  style="margin-bottom: 20px;"> New Product</a>
        
        <!-- <a href="exchange-rate/update" style="margin-bottom: 20px;" class="btn btn-primary"> Update existing data</a> -->
        <table id="demo-dt-basic" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="all">S/N</th>
                    <th class="all">Product Title</th>
                    <th class="all">Seller Username</th>
                    <th class="min-tablet">Seller Telephone</th>
                    <th class="min-tablet">Seller Email</th>
                    <th class="min-tablet">Product Price</th>
                    <th class="all">Action</th>
                </tr>
            </thead>
            <tbody>         
                    <?php $i=1; ?>
                    @foreach ($products as $product)
                    <tr>
                        <td> {{ $i++ }} </td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->username }}</td>
                        <td>{{ $product->telephone }}</td>
                        <td>{{ $product->email }}</td>
                        <td>{{ $product->price }}</td>
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
<!--===================================================-->
<!-- End Striped Table -->

@stop