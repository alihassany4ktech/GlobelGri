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
      @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
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
                <h3 class="card-title">Add Role</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form method="POST" action="{{route('admin.role.store')}}" >
                  @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    {{-- <input type="text" name="role_name" class="form-control" placeholder="Enter name.."> --}}
                    <select name="role_name" id="" class="form-control">
                      @foreach ($roles as $role)
                          <option value="{{$role->name}}">{{$role->name}}</option>
                      @endforeach
                    </select>
                    @error('role_name')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                    </div>
               
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                     <div class="form-group">
                  <label>Permissions</label>
                  <select class="select2" name="permissions[]" multiple="multiple" data-placeholder="Select a permissions" style="width: 100%;" required>
                    @foreach ($permissions as $row)
                        <option value="{{$row->name}}">{{$row->name}}</option>
                    @endforeach
                
                  </select>
           
                    </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit"  id="add" class="btn btn-primary">Save</button>
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
