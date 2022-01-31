@extends('layouts.frontend.app')

@section('content')


<style>
    #kuchbe
{
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
    background-color: #f1c967;background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);background: linear-gradient(to right, #bd7f0a, #f1c967);
}
</style>
<!-- main -->
<main>
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
                                @if(Auth::guard('web')->user()->image)
                                <img src="{{asset(Auth::guard('web')->user()->image)}}" alt="" width="74" height="74">
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
                    {{-- @can('edit profile') --}}
                    <!-- accountData -->
                    <div class="accountData">
                        <form id="agentform" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <input type="hidden" name="id" value="{{Auth::user()->id}}">
                            <div class="head">
                                <h4 class="fontNeuron">Account Settings</h4>
                            </div>
                            <div class="accountHolder">
                                <div class="imgProfile">
                                    <div class="imgThumbnail">

                                        <div class="col-8" style="margin-left: 2%">

                                            <div class="img-thumbnail  text-center" id="imagepreview">
                                                @if(Auth::user()->image)
                                                <img src="{{asset(Auth::guard('web')->user()->image)}}"
                                                    width="200" height="186.5"  alt="agent image" id="one">
                                                @else 
                                                <img src="https://via.placeholder.com/200x200" alt="" id="one" width="200" height="200">
                                                
                                                @endif
                                            </div>
                                            <div class="custom-file mt-5">
                                                <label id="kuchbe" for="file">Choose file</label>
                                                <input type="file" id="file" class="custom-file-input" name="image"
                                                    onchange="readURL(this);" accept="image/*" style="display: none;">
                                                
                                            </div>
                                        </div>
                                      
                                    </div>

                                </div>
                                <div class="accountContent">
                                    <div class="form-group">
                                        <label for="itemN-1">Full Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{Auth::user()->name}}" id="itemN-1">
                                    </div>
                                    <div class="form-group">
                                        <label for="itemN-2">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{Auth::user()->email}}" id="itemN-2">
                                    </div>
                                    <div class="form-group">
                                        <label for="itemN-3">Phone</label>
                                        @if(Auth::user()->phone == 0)
                                        <input type="tel" class="form-control" name="phone"
                                            id="itemN-3" placeholder="Enter Phone...">
                                        @else 

                                        <input type="tel" class="form-control" name="phone"
                                            value="{{Auth::user()->phone}}" id="itemN-3">
                                            @endif
                                    </div>
                                     <div class="form-group">
                                         <label for="itemN-3">Address</label>
                                         @if(Auth::user()->address == '0')
                                         <input type="text" class="form-control" name="address"
                                             id="itemN-3" placeholder="Enter Your Address...">
                                         @else 
                                         <input type="text" class="form-control" name="address"
                                            value="{{Auth::user()->address}}" id="itemN-3">
                                         @endif
                                        
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="itemN-4">Biography</label>
                                          @if(Auth::user()->biography == '0')
                                            <textarea id="itemN-4" rows="1" cols="50" class="form-control" name="biography"
                                            placeholder="Biography.."></textarea>
                                            @else 
                                              <textarea id="itemN-4" rows="1" cols="50" class="form-control" name="biography"
                                            >{{Auth::user()->biography}}</textarea>
                                            @endif
                                      
                                    </div>

                                    <button type="submit" class="btn alighRight 
                                     buttonL fontNeuron" style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">Update
                                        Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- accountData -->
                    <div class="accountData">
                        <form id="changepassword">
                            @csrf
                             <input type="hidden" name="id" value="{{Auth::user()->id}}">
                            <div class="head">
                                <h4 class="fontNeuron">Change Password</h4>
                            </div>
                            <div class="accountHolder">
                                <div class="accountContent">
                                    <div class="row">
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label for="itemN-6">New Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="itemN-6"
                                            required autocomplete="new-password" placeholder="New Password..">
                                    </div>
                                     @error('password')
                                          <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                        @enderror
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label for="itemN-7">Confirm New Password</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            id="itemN-7" required autocomplete="new-password"
                                            placeholder="Confirm New Password..">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn alighRight  buttonL fontNeuron" style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">Change
                                Password</button>
                    </div>
                </div>
                </form>
            </div>
            <!-- accountData -->
            <div class="accountData">
                <form id="social_media_form">
                    @csrf
                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                    <div class="head">
                        <h4 class="fontNeuron">Social Profiles</h4>
                    </div>
                    <div class="accountHolder">
                        <div class="accountContent">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label for="itemN-8">Facebook URL</label>
                                        @if (Auth::user()->facebook_url == '0')
                                            <input type="text" class="form-control"
                                            placeholder="Enter your facebook url..." id="itemN-8" name="facebook_url">
                                        @else
                                            <input type="text" class="form-control"
                                            value="{{Auth::user()->facebook_url}}" id="itemN-8" name="facebook_url">
                                        @endif
                                        
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label for="itemN-9">Twitter URL</label>
                                        @if (Auth::user()->twitter_url == '0')
                                        <input type="text" class="form-control" placeholder="Enter your twitter url..." id="itemN-9" name="twitter_url">

                                        @else
                                            <input type="text" class="form-control"
                                            value="{{Auth::user()->twitter_url}}" id="itemN-8" name="twitter_url">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label for="itemN-10">Linkedin URL</label>
                                        
                                                 @if (Auth::user()->linkedin_url == '0')
                                                <input type="text" class="form-control" placeholder="Enter your linkedin url..."
                                                                id="itemN-10" name="linkedin_url">
                                        @else
                                            <input type="text" class="form-control"
                                            value="{{Auth::user()->linkedin_url}}" id="itemN-8" name="linkedin_url">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="itemN-11">Instagram URL</label>
                                       

                                                    @if (Auth::user()->instagram_url == '0')
                                                 <input type="text" class="form-control" placeholder="Enter your instagram url..."
                                            id="itemN-11" name="instagram_url">
                                        @else
                                            <input type="text" class="form-control"
                                            value="{{Auth::user()->instagram_url}}" id="itemN-8" name="instagram_url">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label for="itemN-12">Google Plus URL</label>
                                                    @if (Auth::user()->google_url == '0')
                                             <input type="text" class="form-control" placeholder="Enter your google plus url..."
                                            id="itemN-12" name="google_url">
                                        @else
                                            <input type="text" class="form-control"
                                            value="{{Auth::user()->google_url}}" id="itemN-8" name="google_url">
                                        @endif
                                        
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label for="itemN-13">Skype</label>
                                        

                                                        @if (Auth::user()->skype_url == '0')
                                         <input type="text" class="form-control" placeholder="Enter your skype url..."
                                            id="itemN-13" name="skype_url">
                                        @else
                                            <input type="text" class="form-control"
                                            value="{{Auth::user()->skype_url}}" id="itemN-8" name="skype_url">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn alighRight  buttonL fontNeuron" style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">Save
                                Changes</button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- @endcan --}}
        </div>
        </div>
        </div>
    </section>
</main>


@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $('#agentform').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({

                url: '{{route("agent.profile.update")}}',
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
                    } else {
                        toastr.error(data.error[0]);
                    }
                }
            });
        });

        // change password
         $('#changepassword').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({

                url: '{{route("agent.password.update")}}',
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
                    } else {
                        toastr.error(data.error[0]);
                    }

                }
            });
        });

   // social media update
         $('#social_media_form').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({

                url: '{{route("agent.social_media.update")}}',
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
                    }

                }
            });
        });

    });

</script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#one')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(186.5);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
