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
                    <h1>SubAdmis</h1>
                </div>
                @if(Auth::guard('admin')->user()->can('create subadmin'))
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a type="button" href="{{route('admin.add.subadmin')}}" class="btn btn-success text-white">
                            <i class="fa fa-plus"></i> Add SubAdmin
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
                                    @foreach ($sunAdmins as $row)
                                    <tr>
                                        <td class="text-center" style="width: 3%">{{$loop->iteration}}</td>
                                         <td class="text-center" style="width: 5%">
                                           <div class="image">
                                        @if ($row->image)
                                            <img src="{{asset($row->image)}}" class="img-circle elevation-2" alt="admin Image" style="height: 35px;width:35px">
                                        @else
                                            <img src="{{asset('dist/img/avatar.png')}}" class="img-circle elevation-2" alt="admin Image" style="height: 35px;width:35px">
                                        @endif
                                    </div>
                                        </td>
                                        <td class="font-w600" style="width: 15%">{{$row->name}}</td>
                                        <td class="font-w600" style="width: 15%">{{$row->email}}</td>
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
                                              @if(Auth::guard('admin')->user()->can('edit subadmin'))
                                            <a href="{{route('admin.subadmin.edit' , ['id'=>$row->id])}}" type="button"
                                                class="btn btn-sm btn-primary text-white" data-toggle="tooltip"
                                                title="Edit SubAdmin">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            @endif
                                            @if(Auth::guard('admin')->user()->can('delete subadmin'))
                                            <button value="{{ $row->id }}" class="btn btn-sm btn-danger"
                                                data-toggle="tooltip" id="trash" title="Delete SubAdmin">
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
        $('.agenttable').delegate('#trash', 'click', function () {
            var id = $(this).val();
            $.ajax({
                url: '{{route("admin.subadmin.delete")}}',
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

    });

</script>
