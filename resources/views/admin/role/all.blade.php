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
                    <h1>FrontEnd Roles</h1>
                </div>
                @if(Auth::guard('admin')->user()->can('create frontend role'))
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a type="button" href="{{route('admin.role.create')}}"
                            class="btn btn-success text-white">
                            <i class="fa fa-plus"></i> Add Role
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
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Permissions</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $row)
                                          <tr>
                                        <td class="text-center" style="width:10px">{{$loop->iteration}}</td>
                                        <td class="font-w600" style="width:20%">{{$row->name}}</td>
                                        <td class="font-w600">{{$row->type}}</td>
                                        <td class="d-none d-sm-table-cell" style="width:50%">
                                                        @if ($row->getAllPermissions()->isEmpty())
                                            No Permissions
                                            @else
                                            @foreach ($row->getAllPermissions() as $permission)

                                            <a href="#" class="badge badge-info"> {{$permission->name}}</a>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if(Auth::guard('admin')->user()->can('edit frontend role'))
                                            <a href="{{route('admin.role.edit',['id'=>$row->id])}}"
                                                type="button" class="btn btn-sm btn-primary text-white"
                                                data-toggle="tooltip" title="Edit Role">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            @endif
                                            @if(Auth::guard('admin')->user()->can('delete frontend role'))
                                            <a href="{{route('admin.role.delete',['id'=>$row->id])}}"
                                                type="button" class="btn btn-sm btn-danger text-white"
                                                data-toggle="tooltip" title="Delete Role">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            @endif
                                        </td>
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
