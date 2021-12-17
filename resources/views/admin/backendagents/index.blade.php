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
                    <h1>BackEnd Users</h1>
                </div>
                @if(Auth::guard('admin')->user()->can('create backend user'))
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a type="button" href="{{route('admin.backend.addagent')}}" class="btn btn-info text-white">
                            <i class="fa fa-plus"></i> Add BackEnd User
                        </a>
                    </div>
                </div>
                @endif
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
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</td>
                                        <th>Permissions</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agents as $row)
                                    <tr>
                                        <td class="text-center" style="width: 3%">{{$loop->iteration}}</td>
                                         <td class="text-center" style="width: 5%">
                                           <div class="image">
                                        {{-- @if (Auth::guard('admin')->user()->image)
                                            <img src="{{asset(Auth::guard('admin')->user()->image)}}" class="img-circle elevation-2" alt="admin Image" style="height: 35px;width:35px">
                                        @else --}}
                                            <img src="{{asset('dist/img/adminPic.png')}}" class="img-circle elevation-2" alt="admin Image" style="height: 35px;width:35px">
                                        {{-- @endif --}}
                                    </div>
                                        </td>
                                        <td class="font-w600" style="width: 15%">{{$row->name}}</td>
                                        <td class="d-none d-sm-table-cell" style="width: 15%">{{$row->email}}</td>
                                        <td class="font-w600" style="width: 15%">
                                            @if ($row->getRoleNames()->isEmpty())
                                            No Role
                                            @else
                                            {{$row->getRoleNames()[0]}}
                                            @endif
                                        </td>
                                          <td class="font-w600" style="width: 20%">
                                              @if ($row->getAllPermissions()->isEmpty())
                                            No Permissions
                                            @else
                                            @foreach ($row->getAllPermissions() as $permission)

                                            <a href="#" class="badge badge-info"> {{$permission->name}}</a>
                                            @endforeach
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if(Auth::guard('admin')->user()->can('edit backend user'))
                                            <a href="{{route('admin.backend.agent.edit' , ['id'=>$row->id])}}" type="button"
                                                class="btn btn-sm btn-primary text-white" data-toggle="tooltip"
                                                title="Edit User">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            @endif
                                            @if(Auth::guard('admin')->user()->can('delete backend user'))
                                            <button value="{{ $row->id }}" class="btn btn-sm btn-danger"
                                                data-toggle="tooltip" id="delete" title="Delete User">
                                                <i class="fa fa-trash"></i>

                                            </button>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        //destroy user /trash
        $('.agenttable').delegate('#delete', 'click', function () {
            var id = $(this).val();
            $.ajax({
                url: '{{route("admin.backend.agent.delete")}}',
                type: "POST",
                data: {
                    "id": id,
                    _token: '{{ csrf_token() }}',
                },
                success: function (data) {
                    if (data.success) {
                        $('#result').html('<div class="alert alert-danger">' + data
                            .success + '</div>');
                    } else {
                        $('#result').html('<div class="alert alert-danger">' + data.error +
                            '</div>');
                    }

                }
            });
        });

        // ban user

        $('.agenttable').delegate('#ban', 'click', function () {
            var id = $(this).val();
            $.ajax({
                url: '{{route("admin.agent.ban")}}',
                type: "POST",
                data: {
                    "id": id,
                    _token: '{{ csrf_token() }}',
                },
                success: function (data) {
                    if (data.success) {
                        $('#result').html('<div class="alert alert-success">' + data
                            .success + '</div>');
                    } else {
                        $('#result').html('<div class="alert alert-danger">' + data.error +
                            '</div>');
                    }

                }
            });
        });

        // Unban user

        $('.agenttable').delegate('#unban', 'click', function () {
            var id = $(this).val();
            $.ajax({
                url: '{{route("admin.agent.unban")}}',
                type: "POST",
                data: {
                    "id": id,
                    _token: '{{ csrf_token() }}',
                },
                success: function (data) {
                    if (data.success) {
                        $('#result').html('<div class="alert alert-success">' + data
                            .success + '</div>');
                    } else {
                        $('#result').html('<div class="alert alert-danger">' + data.error +
                            '</div>');
                    }

                }
            });
        });

    });

</script>
