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
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <span id="result"></span>
    </section>
<?php
                                          $roles  = Spatie\Permission\Models\Role::where('type','=','FrontEnd')->get(); 
                                        
                                     ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6 align-self-center" id="profile_form" style="margin-left: 25%">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add FrontEnd User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="agentform">
                  @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter a username.." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Your valid email.." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Choose a safe one.." required>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="confirm-password" class="form-control" placeholder="..and confirm it!" required>
                  </div>
                  <div class="form-group">
                  <label>Role</label>
                  <select name="role_name" class="form-control" style="width: 100%" data-placeholder="Choose" required>
                                           
                                                       
                                                       @foreach ($roles as $row)
                                                       
                                                        @if ($row->name == 'Property Manager')
                                                             <option value="{{$row->name}}" style="display: none">{{$row->name}}</option>
                                                        @else
                                                             <option value="{{$row->name}}">{{$row->name}}</option>
                                                        @endif
                                                        
                                                         
                                                          
                                                        @endforeach                                              
                                                </select>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit"  id="add" class="btn btn-primary">Add</button>
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
  <!-- /.content-wrapper -->
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
       
       $('#agentform').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:'{{route("admin.agent.store")}}',
                method:'post',
                data:$(this).serialize(),
                dataType:'json',
                beforeSend:function(){
                    $('#add').attr('disabled','disabled');
                },
                success: function (data) {
                    if (data.success) {
                        $('#result').html('<div class="alert alert-success">' + data
                            .success + '</div>');
                    } else {
                        $('#result').html('<div class="alert alert-danger">' +  data +
                            '</div>');
                    }

                }
            });
     });


    });
</script>