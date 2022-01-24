@extends('layouts.frontend.app')

@section('content')


<style>
    #kuchbe {
        height: 25px;
        line-height: 26px;
        color: white;
        text-align: center;
        margin-top: 5px;
        width: 100px;
        overflow: hidden;
        position: relative;
        cursor: pointer;
        border-radius: 3px;
        /*Using a background color, but you can use a background image to represent a button*/
        background-color: #f1c967;
        background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);
        background: linear-gradient(to right, #bd7f0a, #f1c967);
    }

</style>
<!-- main -->
<main>
      <?php
                                          $roles  = Spatie\Permission\Models\Role::where('type','=','FrontEnd')->get(); 
                                        
                                     ?>
    <!-- findFormBlock -->
    <div class="container"></div>
    <form action="#" class="findFormBlock findFormBlock2 bgLightDark hasShadowTop offsetHeaderTop"></form>

    <!-- content -->
    <section id="content" class="container pabIndent">
        <!-- contentFiltersHeadingWrap -->
        <header class="contentFiltersHeadingWrap row">
            <div class="col-xs-12 col-sm-10">
                <h1 class="fontNeuron">Profile</h1>
            </div>

            {{-- <div class="col-xs-12 col-sm-2">
                <!-- viewFilterLinks -->
                <ul class="list-unstyled viewFilterLinks">
                    <li><a href="#"><i class="fi flaticon-share"></i></a></li>
                    <li><a href="#"><i class="fi flaticon-printer"></i></a></li>
                </ul>
            </div> --}}
        </header>
        <!-- userProfile -->
        <div class="userProfile">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-lg-3">
                    <!-- profileSidebar -->
                     <aside class="profileSidebar">
                        <header class="head">
                            <div class="imgProfile">
                                @if(Auth::user()->image)
                                <img src="{{asset(Auth::user()->image)}}" alt="" width="74" height="74">
                                @else 
                                <img src="https://via.placeholder.com/74x74" alt="" width="74" height="74">
                                @endif
                            </div>
                            <div class="info">
                                <span class="text">{{Auth::user()->name}}</span>
                                {{-- <span class="text"><a href="#" class="link">Change Password</a></span> --}}
                            </div>
                        </header>
                            <ul class="navUser list-unstyled">
                                 @can('edit profile')
                            <li>
                                <a href="{{route('agent.dashboard')}}">
                                    <i class="far fa-user"></i>
                                    <span>Account Settings</span>
                                </a>
                            </li>
                             @endcan
                             @can('create property manager')
                            <li>
                                <a href="{{route('agent.all.propertyManager')}}">
                                  <i class="fa fa-users"></i>
                                    <span>Property Managers</span>
                                </a>
                            </li>
                            @endcan
                            @can('property list')
                               <li>
                                <a href="{{route('agent.property')}}">
                                    <i class="fi flaticon-house"></i>
                                    <span>My Properties</span>
                                </a>
                            </li>
                            @endcan
                             @can('favorite property list')
                              <li>
                                <a href="{{route('agent.favourite.property')}}">
                                    <i class="far fa-heart"></i>
                                    <span>Favorited Properties</span>
                                </a>
                            </li>
                             @endcan
                              <?php
                            $role = Auth::user()->getRoleNames()->isEmpty() ? '' : Auth::user()->getRoleNames()[0]
                             ?>
                           @if ($role != 'Buyer')
                                <li>
                                <a href="{{route('agent.subscriptions')}}">
                                    <i class="fa fa-dollar-sign"></i>
                                    <span>Update Subscription</span>
                                </a>
                            </li>         
                           @endif
                            {{-- <li>
                                <a href="{{route('agent.subscription')}}">
                                    <i class="fi flaticon-house"></i>
                                    <span>Subscriptions</span>
                                </a>
                            </li> --}}
                                     @can('subscription list')
                            <li>
                                <a href="{{route('agent.purchased.subscription')}}">
                                    <i class="fa fa-dollar-sign"></i>
                                    <span>My Purchased Subscription</span>
                                </a>
                            </li>
                            @endcan
                           @can('create property')
                                  <li>
                                <a href="{{route('property.create')}}">
                                    <i class="fa fa-plus"></i>
                                    <span>Saved Property</span>
                                </a>
                            </li>
                            @endcan
                             {{-- <li>
                                <a href="{{route('unit.create')}}">
                                    <i class="fa fa-plus"></i>
                                    <span>Submit Units</span>
                                </a>
                            </li> --}}
                                  {{-- <li>
                                <a href="{{route('unit.purchased')}}">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span>Units Purchased</span>
                                </a>
                            </li> --}}
                              <li>
                                <a href="{{route('agent.contact')}}">
                                    <i class="fa fa-address-book" aria-hidden="true"></i>
                                    <span>Contacts</span>
                                </a>
                            </li>
                         
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-xs-12 col-sm-8 col-lg-9">
                   
                   
                    <!-- accountData -->
                    <div class="accountData">
                        <form id="agentForm">
                            @csrf
                            <input type="hidden" name="id" value="{{$agent->id}}">
                            <div class="head">
                                <h4 class="fontNeuron">Edit Property Manager</h4>
                            </div>
                            <div class="accountHolder">
                                <div class="accountContent">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="itemN-8">Name</label>
                                          
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Name..." id="itemN-8"
                                                    name="name" value="{{$agent->name}}">
                                                

                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="itemN-9">Email</label>
                                                
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Email..." id="itemN-9"
                                                    name="email" value="{{$agent->email}}">

                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label for="itemN-10">Password</label>

                                               
                                                <input type="text" class="form-control"
                                                    placeholder="Optional..." id="itemN-10"
                                                    name="password">
                                              
                                            </div>
                                        </div>
                                        {{-- <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="itemN-11">Role</label>
                                                <select name="role_name" class="selectpicker form-control"
                                                data-style="form-control btn-secondary">
                                                @if ($agent->getRoleNames()->isEmpty())
                                                <option disabled selected>No Role</option>
                                                @else
                                                <option value="{{$agent->getRoleNames()[0]}}" selected>
                                                    {{$agent->getRoleNames()[0]}}</option>
                                                @foreach ($roles as $role)
                                                @if ($agent->getRoleNames()[0] == $role->name )
                                                <option style="display: none" value="{{$role->name}}">{{$role->name}}
                                                </option>
                                                @else
                                                <option value="{{$role->name}}">{{$role->name}}</option>
                                                @endif
                                                @endforeach
                                                @endif
                                            </select>
                                               
                                            </div>
                                        </div> --}}
                                    </div>
                                    <button type="submit" class="btn alighRight  buttonL fontNeuron"
                                        style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">
                                        Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        // social media update
        $('#agentForm').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({

                url: '{{route("agent.update.propertyManager")}}',
                method: 'post',
                processData: false,
                contentType: false,
                data: formData,
                beforeSend: function () {
                    $('#add').attr('disabled', 'disabled');
                },
                success: function (data) {
                    if (data.success) {
                        toastr.success(data.success);
                    }else{
                          alert('ss');
                    }
                }
            });
        });

    });

</script>
