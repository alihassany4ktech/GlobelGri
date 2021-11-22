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
                    <h1>Subscriptions</h1>
                </div>
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a type="button" href="{{route('admin.subscription.create')}}"
                            class="btn btn-success text-white">
                            <i class="fa fa-plus"></i>Add Subscription
                        </a>
                    </div>
                </div>
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
                                        <th>Agent Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>

                                    @foreach ($subscriptions as $row)
                                    <tr>
                                        <td class="text-center">{{$i}}</td>
                                        <td class="font-w600">{{$row->title}}</td>
                                        <td class="d-none d-sm-table-cell">{{$row->price}}</td>
                                        <td class="d-none d-sm-table-cell">{{$row->valid_property}}</td>

                                        <td class="text-center">
                                            @if($row->agent_role == 'Agent')
                                            <span class="badge badge-danger">
                                                {{$row->agent_role}}
                                            </span>
                                            @elseif($row->agent_role == 'Property Manager')
                                            <span class="badge badge-success">
                                                {{$row->agent_role}}
                                            </span>
                                            @elseif($row->agent_role == 'Lender')
                                            <span class="badge badge-info">
                                                {{$row->agent_role}}
                                            </span>
                                            @elseif($row->agent_role == 'Builder')
                                            <span class="badge badge-dark">
                                                {{$row->agent_role}}
                                            </span>

                                            @elseif($row->agent_role == 'Investor')
                                            <span class="badge badge-light ">
                                                {{$row->agent_role}}
                                            </span>

                                            @elseif($row->agent_role == 'Renter')
                                            <span class="badge badge-secondary">
                                                {{$row->agent_role}}
                                            </span>
                                            @elseif($row->agent_role == 'Platform Administrator')
                                            <span class="badge badge-warning text-white">
                                                {{$row->agent_role}}
                                                @elseif($row->agent_role == 'Buyer')
                                                <span class="badge text-white" style="background-color: #b548d0">
                                                    {{$row->agent_role}}
                                                </span>
                                                @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('admin.subscription.edit',['id' => $row->id])}}"
                                                type="button" class="btn btn-sm btn-primary text-white"
                                                data-toggle="tooltip" title="Edit Subscription">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{route('admin.subscription.delete',['id' => $row->id])}}"
                                                type="button" class="btn btn-sm btn-danger text-white"
                                                data-toggle="tooltip" title="Delete Subscription">
                                                <i class="fa fa-trash"></i>
                                            </a>



                                        </td>
                                    </tr>
                                    <?php $i++; ?>
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
