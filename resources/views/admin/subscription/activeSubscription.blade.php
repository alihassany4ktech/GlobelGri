@extends('layouts.admin.layouts')
@section('content')
@include('layouts.admin.includes.sidebar')
<!-- Header -->
@include('layouts.admin.includes.header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Active Subscriptions</h1>
                </div>
                @if(Auth::guard('admin')->user()->can('create subscription'))
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a type="button" href="{{route('admin.subscription.create')}}" class="btn btn-success text-white">
                            <i class="fa fa-plus"></i> Add Subscription
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div><!-- /.container-fluid -->
        @if(Session::has('message'))

<p class="alert alert-danger">{{Session::get('message') }}</p>

@endif
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="agenttable" class="table table-bordered table-hover agenttable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Valid Property</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                  @foreach ($activeSubscriptions as $row)
                                      <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td style="width:12%">{{$row->title}}</td>
                                        <td style="width:10%">${{$row->price}}</td>
                                        <td style="width:12%">{{$row->valid_property}}</td>
                                        <td>{{$row->description}}</td>
                                      </tr>
                                  @endforeach
                              
                                </tbody>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection


