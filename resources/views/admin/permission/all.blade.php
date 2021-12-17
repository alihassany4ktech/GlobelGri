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
                    <h1>Permissions List</h1>
                </div>
                {{-- <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a type="button" href="{{route('admin.permission.create')}}"
                            class="btn btn-success text-white">
                            <i class="fa fa-plus"></i> Add Permission
                        </a>
                    </div>
                </div> --}}
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
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                   

                                  @foreach ($permissions as $row)
                                        
                                    <tr>
                                        <td class="text-center" style="width:10px">{{$loop->iteration}}</td>
                                        <td class="font-w600" style="width:50%">{{$row->name}}</td>
                                        <td class="font-w600" style="width:50%">{{$row->type}}</td>
                                        {{-- <td class="text-center"> --}}
                                            {{-- <a href=""
                                                type="button" class="btn btn-sm btn-primary text-white"
                                                data-toggle="tooltip" title="Edit Permission">
                                                <i class="fas fa-edit"></i>
                                            </a> --}}
                                            {{-- <a href="{{route('admin.permission.delete',['id'=>$row->id])}}"
                                                type="button" class="btn btn-sm btn-danger text-white"
                                                data-toggle="tooltip" title="Delete Permission">
                                                <i class="fa fa-trash"></i>
                                            </a> --}}
                                        {{-- </td> --}}
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
{{-- {{ $permissions->links() }} --}}
<!-- /.content-wrapper -->
@endsection

