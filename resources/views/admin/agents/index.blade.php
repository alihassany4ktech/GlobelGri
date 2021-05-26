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
                    <h1>Agents</h1>
                </div>
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <a type="button" href="{{route('admin.addagent')}}" class="btn btn-success text-white">
                            <i class="fa fa-plus"></i>Add Agent
                        </a>
                    </div>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Access</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($agents as $row)
                                    <tr>
                                        <td class="text-center">{{$i}}</td>
                                        <td class="font-w600">{{$row->name}}</td>
                                        <td class="d-none d-sm-table-cell">{{$row->email}}</td>
                                        @if ($row->status == 1)
                                        <td class="d-none d-sm-table-cell"><span class="badge badge-success">
                                                Active
                                                @else
                                        <td class="d-none d-sm-table-cell"><span class="badge badge-danger">
                                                DeActive
                                                @endif
                                            </span></td>
                                            <td class="text-center">
                                                @if($row->role->agent_role == 'Agent')
                                                <span class="badge badge-danger">
                                                {{$row->role->agent_role}}
                                                </span>
                                                @elseif($row->role->agent_role == 'Property Manager')
                                                <span class="badge badge-success">
                                                {{$row->role->agent_role}}
                                                </span>
                                                 @elseif($row->role->agent_role == 'Lender')
                                                <span class="badge badge-info">
                                                {{$row->role->agent_role}}
                                                </span>
                                                  @elseif($row->role->agent_role == 'Builder')
                                                <span class="badge badge-dark">
                                                {{$row->role->agent_role}}
                                                </span>

                                                 @elseif($row->role->agent_role == 'Investor')
                                                <span class="badge badge-light ">
                                                {{$row->role->agent_role}}
                                                </span>

                                                   @elseif($row->role->agent_role == 'Renter')
                                                <span class="badge badge-secondary">
                                                {{$row->role->agent_role}}
                                                </span>
                                                     @elseif($row->role->agent_role == 'Platform Administrator')
                                                <span class="badge badge-warning">
                                                {{$row->role->agent_role}}
                                                </span>
                                                @endif
                                            </td>
                                        <td class="text-center">
                                            <a href="" type="button" class="btn btn-sm btn-info text-white"
                                                data-toggle="tooltip" title="View User">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{route('admin.agent.edit' , ['id'=>$row->id])}}" type="button"
                                                class="btn btn-sm btn-primary text-white" data-toggle="tooltip"
                                                title="Edit User">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button value="{{ $row->id }}" class="btn btn-sm btn-danger"
                                                data-toggle="tooltip" id="trash" title="Trash User">
                                                <i class="fa fa-trash"></i>

                                            </button>

                                            @if ($row->status == 0)
                                            <button value="{{$row->id}}" id="unban" class="btn btn-sm btn-success"
                                                data-toggle="tooltip" title="UnBan User">
                                                <i class="fa fa-unlock"></i>
                                            </button>
                                            @else
                                            <button value="{{$row->id}}" id="ban" class="btn btn-sm btn-dark"
                                                data-toggle="tooltip" title="Ban User">
                                                <i class="fa fa-ban"></i>
                                            </button>
                                            @endif
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        //destroy user /trash
        $('.agenttable').delegate('#trash', 'click', function () {
            var id = $(this).val();
            $.ajax({
                url: '{{route("admin.agent.destroy")}}',
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
