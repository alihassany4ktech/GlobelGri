@extends('layouts.frontend.app')

@section('content')
<style>
    .pagination > li > a:hover, .pagination > li > a:focus, .pagination > li > span:hover, .pagination > li > span:focus {
    z-index: 2;
    color: #fff;
    border:1px solid #f1c967 ;
    background-color: #f1c967;background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;
    /* border-color: #13293d; */
}

</style>
<!-- main -->
<main>

 <div class="container"></div>
     <form action="#" class="findFormBlock findFormBlock2 bgLightDark hasShadowTop offsetHeaderTop"></form>

    <!-- content -->
    <section id="content" class="container pabIndent">
        <!-- contentFiltersHeadingWrap -->
        <header class="contentFiltersHeadingWrap row">
            <div class="col-xs-12 col-sm-10">
                <h1 class="fontNeuron">Profile</h1>
            </div>
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
                </form>
                  <div class="col-xs-12 col-sm-8 col-lg-9">
                            <!-- accountData -->
                            <div class="accountData">
                              <div class="head">
                                <h4 class="fontNeuron">My Contacts</h4>
                              </div>
                              <!-- propertiesList -->
                              
                              <p>Not Found</p>
                              @if ($contacts->isEmpty())
                              @else
                                     <div class="propertiesList">
                                    @foreach ($contacts as $row)
                                        <article class="propertyRow">
                                  <div class="info">                                    
                                    <div class="textBox">
                                      <h4 class="fontNeuron"><a href=""><span class="status fontNeuron" style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);">{{$row->type}}</span></a></h4>
                                      <address><i class="fa fa-envelope" aria-hidden="true"></i>{{$row->email}} &nbsp; <i class="fa fa-phone" aria-hidden="true"></i> &nbsp; {{$row->phone}} &nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> {{$row->date}} &nbsp; Time: {{$row->time}}</address>
                                    </div>
                                  </div>
            
                                </article>
                                    @endforeach
                                

                              </div>
                              @endif
                           
                            </div>
                            <!-- pagination -->
                            {{-- {{ $data->links() }} --}}
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
                        $('#result').html('<div class="alert alert-success">' + data
                            .success + '</div>');
                    } else {
                        $('#result').html('<div class="alert alert-danger">' + data.error +
                            '</div>');
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
                        $('#result').html('<div class="alert alert-success">' + data
                            .success + '</div>');
                    } else {
                        $('#result').html('<div class="alert alert-danger">' + data.error +
                            '</div>');
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
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#one')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
