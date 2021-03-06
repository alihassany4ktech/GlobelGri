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
                    <h1>Trashed Agents</h1>
                </div>
                @if(Auth::guard('admin')->user()->can('create frontend user'))
                <div class="col-sm-6">
                      <div class="float-sm-right">
                        <a type="button" href="{{route('admin.addagent')}}" class="btn btn-success text-white">
                            <i class="fa fa-plus"></i>Add Agent
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Access</th>
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
                                            @if(Auth::guard('admin')->user()->can('recover frontend user'))
                                          <button class="btn btn-success btn-sm" type="button" id="recover" data-toggle="tooltip"  value="{{$row->id}}" title="Restore User">
                                          <i class="fa fa-share"></i>
                                          </button>
                                          @endif
                                          @if(Auth::guard('admin')->user()->can('delete frontend user'))                           
                                          <button  id="unban" value="{{$row->id}}" class="btn btn-sm btn-danger" data-toggle="tooltip" id="delete" title="Delete User">
                                                <i class="fas fa-user-times"></i>
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
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
      $(document).ready(function(){


      // agent recover
         $('.agenttable').delegate('#recover', 'click', function () {
            var id = $(this).val();
            $.ajax({
                url: '{{route("admin.agent.recover")}}',
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

               // delete agent
        $('.agenttable').delegate('#unban', 'click', function () {
            var id = $(this).val();
            $.ajax({
                url: '{{route("admin.agent.delete")}}',
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