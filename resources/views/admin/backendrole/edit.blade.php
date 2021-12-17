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
                <h3 class="card-title">Edit BackEnd Role</h3> &nbsp; <small class="text-dark">(update only role permissions and type)</small>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form method="POST" action="{{route('admin.backend.role.update')}}" >
                  @csrf
                  <input type="hidden" name="role_id" value="{{$role->id}}">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="role_name" class="form-control" value={{$role->name}}>
                    @error('role_name')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                    </div>
                  </div>
                  <?php
                                                $permissions = Spatie\Permission\Models\Permission::where('type','=','BackEnd')->get() ?>
                                             
                  <div class="row">
                    <div class="col-sm-12">
                     <div class="form-group">
                  <label>Permissions</label>
                  <select class="select2" name="permissions[]" multiple="multiple" style="width: 100%;" required>
                                           @foreach ($permissions as $key => $value)
                                                       
                                                      @if(isset($role->getAllPermissions()[$key]))
                                                            <option value="{{$value->name}}" {{$role->getAllPermissions()[$key]->name == $value->name ? 'selected' : ''}} >{{$value->name}}</option>
                                            
                                                                
                                                            @else
                                                             <option value="{{$value->name}}">{{$value->name}}</option>

                                                            @endif
                                                        @endforeach 
                
                  </select>
           
                    </div>
                    </div>
                  </div>
                    {{-- <div class="row">
                    <div class="col-sm-12">
                     <div class="form-group">
                  <label>Role Type</label><br>
                  <div class="icheck-primary d-inline">

                        <input type="radio" id="radioPrimary1" name="type" {{$role->type == 'FrontEnd'? 'checked': ''}} >
                        <label for="radioPrimary1">FrontEnd
                        </label>
                      </div>
                  <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="type" {{$role->type == 'BackEnd'? 'checked': ''}}>
                        <label for="radioPrimary2">BackEnd
                        </label>
                      </div>
                    </div> 
                    </div>
                  </div> --}}
                </div>
                <div class="card-footer">
                  <button type="submit"  id="add" class="btn btn-primary">Update</button>
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
