@extends('layouts.admin.layouts')
@section('content')
@include('layouts.admin.includes.sidebar')
<!-- Header -->
@include('layouts.admin.includes.header')
<style>
    @media only screen and (max-width: 600px) {
        #profile_form
        {
            margin-left: -4px !important;
        }
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add BackEnd User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <span id="result"></span>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6 align-self-center" id="profile_form" style="margin-left: 25%">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
                                          $roles  = Spatie\Permission\Models\Role::where('type','=','BackEnd')->get(); 
                                        
                                     ?>
              <form id="agentform">
                  @csrf
                  <input type="hidden" name="id" value="{{$user->id}}">
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" value="{{$user->email}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Choose a safe one..">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="confirm-password" class="form-control" placeholder="..and confirm it!">
                  </div>
                  <div class="form-group">
                  <label>Role</label>
                        <select name="role_name" class="selectpicker form-control"
                                                data-style="form-control btn-secondary">
                                                @if ($user->getRoleNames()->isEmpty())
                                                <option disabled selected>No Role</option>
                                                @else
                                                <option value="{{$user->getRoleNames()[0]}}" selected>
                                                    {{$user->getRoleNames()[0]}}</option>
                                                @foreach ($roles as $role)
                                                @if ($user->getRoleNames()[0] == $role->name )
                                                <option style="display: none" value="{{$role->name}}">{{$role->name}}
                                                </option>
                                                @else
                                                <option value="{{$role->name}}">{{$role->name}}</option>
                                                @endif
                                                @endforeach
                                                @endif
                                            </select>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit"  id="update" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
       
       $('#agentform').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.backend.agent.update")}}',
                method:'post',
                data:$(this).serialize(),
                dataType:'json',
                beforeSend:function(){
                    $('#update').attr('disabled','disabled');
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