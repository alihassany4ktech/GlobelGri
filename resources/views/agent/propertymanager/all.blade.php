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
                             @if ($role != 'Buyer')
                                  <li>
                                <a href="{{route('agent.contact')}}">
                                    <i class="fa fa-address-book" aria-hidden="true"></i>
                                    <span>Contacts</span>
                                </a>
                            </li>   
                              @endif
                         
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
                    

                            <div class="head">
                                <h4 class="fontNeuron">All Property Manager</h4>
                                <a type="button" style="border:none ;background: #f1c967; 
                                 background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);
                                  background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;float: right"
                                   href="{{route('agent.add.propertyManager')}}" class="btn">
                                                <i class="fa fa-plus"></i> Add Property Manager
                                                </a>
                            </div>
                            <div class="accountHolder">
                                <div class="accountContent">
                                    <table class="table agenttable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th style="text-align:right;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($agents as $row)
                                                <tr>
                                                <td scope="row">{{$loop->iteration}}</td>
                                                <td>{{$row->name}}</td>
                                                <td>{{$row->email}}</td>
                                                <td>
                                                       @if ($row->getRoleNames()->isEmpty())
                                                            No Role
                                                        @else
                                                        {{$row->getRoleNames()[0]}}
                                                        @endif
                                                </td>
                                                <td style="text-align:right;">
                                                    <a href="{{route('agent.view.propertyManager',['id'=>$row->id])}}" type="button" class="btn btn-sm btn-info text-white"
                                                        data-toggle="tooltip" title="View Agent">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="{{route('agent.edit.propertyManager',['id'=>$row->id])}}" type="button" class="btn btn-sm btn-success text-white"
                                                        data-toggle="tooltip" title="Edit Agent">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                      <a  type="button" onclick="getProperty(this)" id="{{$row->id}}"  class="btn btn-sm btn-danger"
                                                data-toggle="tooltip" title="Delete Agent">
                                                <i class="fa fa-trash"></i>

                                            </a>
                                                </td>
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                  
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
             function getProperty(elem){
            var id = $(elem).attr("id");
            $.ajax({
                url: "{{ route('agent.delete.propertyManager') }}",
                method: "POST",
                dataType: "json",

                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                },

                success: function (data) {
                       if (data.success) {
                        toastr.success(data.success);
                    }else{
                         toastr.error(data.error);
                    }
                }
            });
            };

</script>