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
        <h3 class="panel-title">Transactions</h3>
    </div>
    <div class="panel-body">
        <!-- <a href="exchange-rate/add" style="margin-bottom: 20px;" class="btn btn-primary"> ADD</a> -->

        <a href="exchange-rate/pull" class="btn btn-danger"  style="margin-bottom: 20px;"> Pull New Data</a>
        
        <a href="exchange-rate/update" style="margin-bottom: 20px;" class="btn btn-primary"> Update existing data</a>
        <table id="demo-dt-basic" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="all">S/N</th>
                    <th class="all">Date</th>
                    <th class="all">Description</th>
                    <th class="min-tablet">Purchased By</th>
                    <th class="min-tablet">Sold By</th>
                    <th class="min-tablet">Service Price</th>
                    <th class="all">Action</th>
                </tr>
            </thead>
            <tbody>         
                @foreach ($transactionss as $transactions)
                <tr>
                    <td>1</td>
                    <td>{{ $transactions->title }}</td>
                    <td>{{ $transactions->username }}</td>
                    <td>{{ $transactions->telephone }}</td>
                    <td>{{ $transactions->email }}</td>
                    <td>{{ $transactions->price }}</td>
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