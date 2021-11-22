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
                    <h1>All Agent Requests</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <span id="result"></span>
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
                                        <th>Aget Name</th>
                                        <th>Agent Email</th>
                                        <th>Agent Phone</th>
                                        <th>Agent Address</th>
                                        <th>Property Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                  
                                    @foreach ($threesixtyRequests as $row)
                                      {{-- {{dd($row->status)}} --}}
                                    <tr>
                                        <td class="text-center">{{$i}}</td>
                                        <td class="font-w600">{{$row->agent_name}}</td>
                                        <td class="d-none d-sm-table-cell">{{$row->agent_email}}</td>
                                          <td class="d-none d-sm-table-cell">{{$row->agent_phone}}</td>
                                          <td class="d-none d-sm-table-cell">{{$row->agent_address}}</td>
                                          <td class="d-none d-sm-table-cell">{{$row->property_title}}</td>
                                        <td class="text-center">
                                           
                                            <a href="{{route('admin.property.edit' , ['id'=>$row->property_id])}}" type="button"
                                                class="btn btn-sm btn-primary text-white" data-toggle="tooltip"
                                                title="Edit Property">
                                                <i class="fas fa-edit"></i>
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

