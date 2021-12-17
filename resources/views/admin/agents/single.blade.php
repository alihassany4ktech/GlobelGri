@extends('layouts.admin.layouts')
@section('content')
@include('layouts.admin.includes.sidebar')
<!-- Header -->
@include('layouts.admin.includes.header')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  @if ($agent->image == '0')
                      <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('dist/img/user4-128x128.jpg')}}"
                       alt="profile picture">
                  @else
                      <img class="profile-user-img img-fluid img-circle"
                       src="{{asset($agent->image)}}"
                       alt="User img">
                  @endif
                </div>

                <h3 class="profile-username text-center mb-5">{{$agent->name}}</h3>

                {{-- <p class="text-muted text-center">Software Engineer</p> --}}

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$agent->email}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Phone</b> <a class="float-right">
                          @if ($agent->phone == 0)
                              No Phone
                           @else 
                              {{$agent->phone}}
                          @endif
                       
                        </a>
                  </li>
                  <li class="list-group-item">
                    <b>Address</b> <a class="float-right">
                           @if ($agent->address == 0)
                              No Address
                           @else 
                              {{$agent->address}}
                          @endif
                        </a>
                  </li>
                </ul>

                {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            {{-- <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div> --}}
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Role And Permissions</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <a href="#">Role</a>
                            @if ($agent->getRoleNames()->isEmpty())
                                <p>No Role</p>
                                @else
                                <ul><li>{{$agent->getRoleNames()[0]}}</li></ul>
                                @endif
                        </span>
                      </div>

                        <div class="user-block">
                        <span class="username">
                          <a href="#">Permissions</a>
                             @if ($agent->getAllPermissions()->isEmpty())
                                <p> No Permissions</p>
                                @else
                                @foreach ($agent->getAllPermissions() as $permission)
                                <ul><li>{{$permission->name}}</li></ul>
                                @endforeach
                                @endif
                        </span>
                      </div>
                     
                    </div>
                    
                  
                  </div>
            
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


