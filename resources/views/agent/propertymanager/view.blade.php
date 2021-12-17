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
                            
                            <li>
                                <a href="{{route('agent.subscriptions')}}">
                                    <i class="fa fa-dollar-sign"></i>
                                    <span>Update Subscription</span>
                                </a>
                            </li>
                             
                          
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
                        <form>
                            <input type="hidden" name="id" value="{{$agent->id}}">
                            <div class="head">
                                <h4 class="fontNeuron">Property Manager Detail</h4>
                            </div>
                            <div class="accountHolder">
                                <div class="imgProfile">
                                    <div class="imgThumbnail">

                                        <div class="col-8" style="margin-left: 2%">

                                            <div class="img-thumbnail  text-center" id="imagepreview">
                                                {{-- @if($agent->image) --}}
                                                {{-- <img src="{{asset($agent->image)}}"
                                                width="200" height="186.5" alt="agent image" id="one">
                                                @else --}}
                                                <img src="{{asset('dist/img/adminPic.png')}}" alt="" id="one"
                                                    width="200" height="200">

                                                {{-- @endif --}}
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="accountContent">
                                    <div class="form-group">
                                        <label for="itemN-1">Full Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$agent->name}}"
                                            id="itemN-1" disabled style="cursor: pointer">
                                    </div>


                                    <div class="form-group">
                                        <label for="itemN-2">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{$agent->email}}"
                                            id="itemN-2" disabled style="cursor: pointer">
                                    </div>
                                    <div class="form-group">
                                        <label for="itemN-3">Phone</label>
                                        @if($agent->phone == 0)
                                        <input type="tel" class="form-control" name="phone" id="itemN-3"
                                            placeholder="No Phone" disabled style="cursor: pointer">
                                        @else

                                        <input type="tel" class="form-control" name="phone" value="{{$agent->phone}}"
                                            id="itemN-3" disabled style="cursor: pointer">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="itemN-3">Address</label>
                                        @if($agent->address == '0')
                                        <input type="text" class="form-control" name="address" id="itemN-3"
                                            placeholder="No Address" disabled style="cursor: pointer">
                                        @else
                                        <input type="text" class="form-control" name="address"
                                            value="{{$agent->address}}" id="itemN-3" disabled style="cursor: pointer">
                                        @endif

                                    </div>

                                    <div class="form-group">
                                        <label for="itemN-4">Biography</label>
                                        @if($agent->biography == '0')
                                        <textarea id="itemN-4" rows="1" cols="50" class="form-control" name="biography"
                                            placeholder="No Biography" disabled style="cursor: pointer"></textarea>
                                        @else
                                        <textarea id="itemN-4" rows="1" cols="50" class="form-control" name="biography"
                                            disabled style="cursor: pointer">{{$agent->biography}}</textarea>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- accountData -->
                    <div class="accountData">
                        <form>

                            <div class="head">
                                <h4 class="fontNeuron">Role And Permissions</h4>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">


                                    <div class="form-group">
                                        <label for="itemN-1">Role</label>

                                        @if ($agent->getRoleNames()->isEmpty())
                                        <p>No Role</p>
                                        @else
                                        <p>{{$agent->getRoleNames()[0]}}</p>

                                        @endif
                                    </div>


                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label for="itemN-7">Permissions</label><br>
                                         @if ($agent->getAllPermissions()->isEmpty())
                                <p> No Permissions</p>
                                @else
                                @foreach ($agent->getAllPermissions() as $permission)
                                <ol><li>{{$permission->name}}</li></ol>
                                @endforeach
                                @endif
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- accountData -->
                    <div class="accountData">
                        <form id="social_media_form">
                            <div class="head">
                                <h4 class="fontNeuron">Social Links</h4>
                            </div>
                            <div class="accountHolder">
                                <div class="accountContent">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="itemN-8">Facebook URL</label> <br>
                                                @if ($agent->facebook_url == '0')
                                                <p>No Facebook Url</p>
                                                @else
                                                <p>{{$agent->facebook_url}}</p>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="itemN-9">Twitter URL</label> <br>
                                                @if ($agent->twitter_url == '0')
                                                <p>No Twitter Url</p>

                                                @else
                                                <p>{{$agent->twitter_url}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="itemN-10">Linkedin URL</label>

                                                @if ($agent->linkedin_url == '0')
                                                <p>No Linkedin Url</p>

                                                @else
                                                <p>{{$agent->linkedin_url}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="itemN-11">Instagram URL</label>


                                                @if ($agent->instagram_url == '0')
                                                <p>No Instagram Url</p>

                                                @else
                                                <p>{{$agent->instagram_url}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="itemN-12">Google Plus URL</label>
                                                @if ($agent->google_url == '0')
                                                <p>No Google Plus Url</p>

                                                @else
                                                <p>{{$agent->google_url}}</p>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="form-group">
                                                <label for="itemN-13">Skype</label>


                                                @if ($agent->skype_url == '0')
                                                <p>No Skype Url</p>

                                                @else
                                                <p>{{$agent->skype_url}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
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
