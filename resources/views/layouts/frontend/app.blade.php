<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>globelgri</title>
    <!-- include google roboto font cdn link -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- include the site bootstrap stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/fancybox.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        .findFormBlock .btn {
            padding: 8px;
            font-size: 25px;
            line-height: 1.2;
        }

        a:hover,
        a:focus {
            color: white;
            text-decoration: none;
        }

        .headerHolder {
            padding-top: 28px;
            padding-bottom: 0px;
        }

        @media only screen and (max-width: 600px) {

            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 85% !important;
                height: 50%;
            }

            .modal-content1 {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 85% !important;
                /* height: 50%; */
                height: 17%;
                margin-top: 90% !important;
            }

            #newp {
                width: 100% !important;
            }

            #sheading {
                margin-top: -3050px !important;
            }

            #s1heading {
                margin-top: -1780px !important;
            }

            #sform {
                /* margin-top: -4000px !important;
                    padding-bottom: 25px !important; */
                display: none !important;
            }

            #s1 {
                margin-top: -3000px;
            }

            #s2 {
                margin-top: -2610px;
            }

            #s3 {
                margin-top: -2200px;
            }

            #pageHeader {
                display: none;
            }


            #homeapp {
                margin-top: -3200px !important;
                height: 100% !important;
            }

            #allguid {
                margin-top: -1100px !important;
                margin-left: 50px !important;
            }

            #allguid1 {
                margin-top: -850px !important;
            }

            #mobile-container {
                display: block !important;
            }

            #noshow {
                display: none !important;
            }

            #headingform {
                margin-left: 20px !important;
            }

            .postColumn {
                position: relative;
                padding: 0 50px 13px;
                margin-bottom: 30px;
                width: 100%;
            }

            .mo .col {
                width: 393px !important;
            }

            .slick-slide {
                float: left;
                height: 150%;
                min-height: 1px;
                display: none;
            }

            .navigation {
                margin-top: 0%;
            }

            #hide {
                display: initial !important;
            }

            #bheading {
                margin-top: 15px !important;
                font-size: 34px !important;
            }

            #bheading1 {
                margin-top: -25px !important;
                font-size: 34px !important;
            }

            #bp {
                margin-top: -10px !important;
                font-size: 13px !important;

            }

            #d {
                margin-left: 0px !important;
            }

            #d1 {
                margin-left: 0px !important;
            }

            #cover {
                background-position: 0px 0px !important;
                /* background-repeat: no-repeat !important; */
            }

            #pica {
                margin: 0px;
                width: 428px !important;
            }

            .pic {
                max-width: 100%;
                height: auto;
                margin-top: 33%;
            }

            .imgHolder {
                width: 99.5%;
            }

            #featured {
                margin-left: 0px;
            }

            #l {
                margin-top: 0;
                margin-bottom: 15px;
                margin-left: -26px;
            }


            .tags .widgetTaglist li {
                margin-bottom: 8px;
            }

            .tags h3 {
                margin: 10px 22px 25px 0;
                display: inline-block;
                vertical-align: middle;
            }



        }

        #mobile-container {
            max-width: 100%;
            margin: auto;
            background-color: #555;
            color: white;
            border-radius: 10px;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
            position: relative;
        }

        .topnav #myLinks {
            display: none;
        }

        .topnav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 17px;
            display: block;
        }

        .topnav a.icon {
            background: black;
            display: block;
            position: absolute;
            right: 0;
            top: 0;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .active1 {
            background-color: white;
            color: white;
        }

        .fancybox-close-small {
            background: #f1c967;
            background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);
            background: linear-gradient(to right, #bd7f0a, #f1c967);
        }

    </style>
</head>

<body>
    <div id="mobile-container" style="display: none">
    
        <!-- Top Navigation Menu -->
        <div class="topnav">
            <a href="{{route('index')}}" class="active1"><img src="{{asset('frontend/images/logo5.png')}}"
                    style="width:110px;height:33px; margin-top:-3%" alt="globelgri logo"></a>
            <div id="myLinks">
                <ul class="nav navbar-nav pageMainNav pageMainNav1">
                    <li class="active">
                    <li class="active dropdown">
                        <a style="color: #bd7f0a" href="{{route('index')}}">Home</a>
                        {{-- <a href="#" class="dropdown-toggle">Home<span class="caret"></span> --}}

                    </li>
                    <!-- remove dropdownFull class when its just regular dropdown -->
                    <li>

                    <li class="dropdown dropdownFull">
                        <a href="#" class="dropdown-toggle" style="color: #bd7f0a" onclick="menufunction()">Buy <span
                                class="caret"></span></a>
                        <div class="" id="a" style="background-color:#333;display:none">
                            <ul class="" style=" list-style-type: none;">

                                <li><a href="{{route('home_for_sale')}}" style="font-size: 12px;color:#bd7f0a">Homes for
                                        Sale</a></li>
                                <li><a href="{{route('home_for_sale')}}" style="font-size: 12px;color:#bd7f0a">Open
                                        Houses</a></li>
                                <li><a href="{{route('home_for_sale')}}" style="font-size: 12px;color:#bd7f0a">New
                                        Homes</a></li>
                                <li><a href="{{route('home_for_sale')}}" style="font-size: 12px;color:#bd7f0a">Recently
                                        Soled</a></li>
                                <li><a href="{{route('home_for_sale')}}" style="font-size: 12px;color:#bd7f0a">See
                                        Newest Listning</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" style="color: #bd7f0a" onclick="menufunction1()">Rent<span
                                class="caret"></span></a>
                        <div class="" id="b" style="background-color:#333;display:none">
                            <ul class="" style="list-style-type: none;">

                                <li><a href="{{route('home_for_sale')}}" style="font-size: 12px;color:#bd7f0a">All
                                        Rentals</a></li>
                                <li><a href="{{route('home_for_sale')}}"
                                        style="font-size: 12px;color:#bd7f0a">Apartments for Rent</a></li>
                                <li><a href="{{route('home_for_sale')}}" style="font-size: 12px;color:#bd7f0a">Houses
                                        for Rent</a></li>
                                <li><a href="{{route('home_for_sale')}}" style="font-size: 12px;color:#bd7f0a">See
                                        Newest Listning</a></li>
                                <li><a href="{{route('home_for_sale')}}" style="font-size: 12px;color:#bd7f0a">Post
                                        Rental Listning</a>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <li>
                    <li>
                        <a href="{{route('pricing')}}" style="color: #bd7f0a">Pricing<span></span></a>
                    </li>
                    @if(Auth::check())
                     <?php
                                $role = Auth::user()->getRoleNames()->isEmpty() ? '' : Auth::user()->getRoleNames()[0]
                            ?>
                    @if (App\PurchasedSubscription::where('agent_id', '=', Auth::user()->id)->exists())
                         <li>
                        <a href="{{route('property.create')}}" style="color: #bd7f0a">
                            <i class="fa fa-plus" style="color:#bd7f0a"></i> Submit Property
                        </a>
                    </li>
                    <li>
                        <a href="{{route('agent.dashboard')}}" style="color: #bd7f0a"> Dashboard</a>

                    </li>
                    @else
                   @if ($role != 'Buyer')
                             <li class="">
                        <a href="#popup1" class="lightbox" style="color: #bd7f0a"><i class="fi flaticon-social icn"
                                style="color: #bd7f0a"></i> Login</a>
                    </li>
                    
                    @if (Route::has('register'))
                    <li class="">
                        <a href="#popup1" class="lightbox" style="color: #bd7f0a"><i class="fi flaticon-edit icn"
                                style="color: #bd7f0a"></i> Registe </a>
                    </li>
                    <li>
                        <a href="#popup1" style="color: #bd7f0a" class="lightbox">
                            <i class="fa fa-plus" style="color:#bd7f0a"></i> Submit Property
                        </a>
                    </li>
                    @endif
                   @else
                         <li>
                        <a href="{{route('agent.dashboard')}}" style="color: #bd7f0a"> Dashboard</a>

                    </li>
                   @endif


                    @endif
                   
                    @else
                    <li class="">
                        <a href="#popup1" class="lightbox" style="color: #bd7f0a"><i class="fi flaticon-social icn"
                                style="color: #bd7f0a"></i> Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="">
                        <a href="#popup1" class="lightbox" style="color: #bd7f0a"><i class="fi flaticon-edit icn"
                                style="color: #bd7f0a"></i> Registe </a>
                    </li>
                    <li>
                        <a href="#popup1" style="color: #bd7f0a" class="lightbox">
                            <i class="fa fa-plus" style="color:#bd7f0a"></i> Submit Property
                        </a>
                    </li>
                    @endif
                    @endif

                </ul>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>


        <!-- End smartphone / tablet look -->
    </div>

    <!-- pageWrapper -->
    <div id="pageWrapper">
        <!-- pageMenuPushWrap -->
        <div class="pageMenuPushWrap pageMenuPushWrap1">
            <!-- bgBaseWrap -->
            <div class="bgBaseWrap">
                <!-- pageHeader -->
                <header id="pageHeader" class="bgWhite offsetBottom">

                    <!-- pageHeaderWrap -->
                    <div class="pageHeaderWrap">

                        <?php
                           $phone = '';
                            $email = '';
                            $address = '';
                            $description = '';
                            $logo = '';
                            $setting = App\GeneralSetting::get();
                            foreach ($setting as $row) {
                                $phone = $row->phone;
                                $email = $row->email;
                                $address = $row->address;
                                $description = $row->description;
                                $logo = $row->logo;
                            }
                        ?>
                        <?php $roles = Spatie\Permission\Models\Role::where('type','=','FrontEnd')->where('name','!=','Property Manager')->get(); ?>
                        <div class="container-fluid" style="background-color: #f0f9fb">
                            <!-- headerHolder -->
                            <div class="headerHolder" style="background-color: #f0f9fb">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-5" style="margin-left:7%;">
                                        <ul class="nav navbar-nav pageMainNav pageMainNav1">
                                            <li class="active">
                                                {{-- <li class="active dropdown"> --}}
                                                <a style="color: #bd7f0a" href="{{route('index')}}">Home</a>

                                            </li>
                                            <!-- remove dropdownFull class when its just regular dropdown -->
                                            <li>

                                            <li class="dropdown dropdownFull">
                                                <a href="#" class="dropdown-toggle" style="color: #bd7f0a">Buy <span
                                                        class="caret"></span></a>
                                                <div class="frame-wrap">
                                                    <div class="frame">
                                                        <ul
                                                            class="dropdown-menu pageMainNavDropdown pageMainNavDropdown1">

                                                            <li><a href="{{route('home_for_sale')}}">Homes for Sale</a>
                                                            </li>
                                                            <li><a href="{{route('home_for_sale')}}">Open Houses</a>
                                                            </li>
                                                            <li><a href="{{route('home_for_sale')}}">New Homes</a></li>
                                                            <li><a href="{{route('home_for_sale')}}">Recently Soled</a>
                                                            </li>
                                                            <li><a href="{{route('home_for_sale')}}">See Newest
                                                                    Listning</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>

                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" style="color: #bd7f0a">Rent<span
                                                        class="caret"></span></a>
                                                <div class="frame-wrap">
                                                    <div class="frame">
                                                        <ul
                                                            class="dropdown-menu pageMainNavDropdown pageMainNavDropdown1">

                                                            <li><a href="{{route('home_for_rent')}}">All Rentals</a>
                                                            </li>
                                                            <li><a href="{{route('home_for_rent')}}">Apartments for
                                                                    Rent</a></li>
                                                            <li><a href="{{route('home_for_rent')}}">Houses for Rent</a>
                                                            </li>
                                            </li>
                                            <li><a href="{{route('home_for_rent')}}">See Newest
                                                    Listning</a></li>
                                            <li><a href="{{route('home_for_rent')}}">Post Rental
                                                    Listning</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                </li>
                                <li>

                        <li>
                            <a href="{{route('pricing')}}" style="color: #bd7f0a">Pricing<span></span></a>
                        </li>
                        </ul>

                    </div>
                    <div class="col-xs-6 col-sm-2" style="margin-left:-7%">
                        <!-- logo -->
                        @if ($logo)
                        <div class="logo"><a href="{{route('index')}}"><img src="{{$logo}}"
                                    style="height:120px; width:135px;margin-top:-35px" alt="globelgri"></a>
                        </div>
                        @else
                        <div class="logo"><a href="{{route('index')}}"><img src="{{asset('frontend/images/logo5.png')}}"
                                    style="height:120px; width:135px; margin-top:-35px" alt="globelgri"></a>
                        </div>
                        @endif
                    </div>
                    <div class="col-xs-6 col-sm-4 d-flex" style="margin-left:0%">
                        @if(Auth::check())
                         <?php
                                $role = Auth::user()->getRoleNames()->isEmpty() ? '' : Auth::user()->getRoleNames()[0]
                            ?>
                        @if (App\PurchasedSubscription::where('agent_id', '=', Auth::user()->id)->exists())
                         <!-- headerModalOpener -->
                        <ul class="list-unstyled UserLinksList">
                            <li>
                                <a href="{{route('property.create')}}">
                                    <i class="fa fa-plus" style="color:#bd7f0a"></i>&nbsp;<strong
                                        class="text fwNormal hidden-xs hidden-sm" style="color: #bd7f0a"> Submit
                                        Property</strong>
                                </a>
                            </li>
                        </ul>
                        <a href="{{route('agent.dashboard')}}"
                            class="headerModalOpener text-uppercase fontNeuron fwBold"
                            style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Dashboard</a>
                        @else 
                        @if ($role != 'Buyer')
                             <ul class="list-unstyled UserLinksList">
                            <li>
                                <a href="#popup1" class="lightbox">
                                    <i class="fi flaticon-social icn" style=" color: #bd7f0a;"></i>
                                    <strong class="text fwNormal hidden-xs hidden-sm"
                                        style="color: #bd7f0a">Login</strong>
                                </a>
                            </li>
                            @if (Route::has('register'))
                            <li>
                                <a href="#popup1" class="lightbox">
                                    <i class="fi flaticon-edit icn" style="color: #bd7f0a"></i>
                                    <strong class="text fwNormal hidden-xs hidden-sm"
                                        style="color: #bd7f0a">Register</strong>
                                </a>
                            </li>
                            @endif
                        </ul>
                        <a href="#popup1" class="headerModalOpener text-uppercase fontNeuron fwBold lightbox" style=" background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967);">Submit
                            Property</a>
                        @else
                            <a href="{{route('agent.dashboard')}}"
                            class="headerModalOpener text-uppercase fontNeuron fwBold"
                            style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Dashboard</a>
                        @endif
                        @endif
                       
                        @else
                        <ul class="list-unstyled UserLinksList">
                            <li>
                                <a href="#popup1" class="lightbox">
                                    <i class="fi flaticon-social icn" style=" color: #bd7f0a;"></i>
                                    <strong class="text fwNormal hidden-xs hidden-sm"
                                        style="color: #bd7f0a">Login</strong>
                                </a>
                            </li>
                            @if (Route::has('register'))
                            <li>
                                <a href="#popup1" class="lightbox">
                                    <i class="fi flaticon-edit icn" style="color: #bd7f0a"></i>
                                    <strong class="text fwNormal hidden-xs hidden-sm"
                                        style="color: #bd7f0a">Register</strong>
                                </a>
                            </li>
                            @endif
                        </ul>
                        <a href="#popup1" class="headerModalOpener text-uppercase fontNeuron fwBold lightbox" style=" background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967);">Submit
                            Property</a>
                        @endif
                    </div>
            </div>
        </div>
        <!-- pageNav -->
    </div>
    </div>

    </header>
    @yield('content')
    </div>
    <!-- pageFooterBlock -->
    <div class="pageFooterBlock">
        <!-- pageAside -->
        <aside class="pageAside textWhite">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col">
                        <h2 class="fontNeuron fwSemi text-uppercase">Global Gri</h2>
                        @if($description)
                        <p>{{$description}}</p>
                        @else
                        <p>Global Gri Group is committed to ensuring digital accessibility for individuals with
                            disabilities. </p>
                        @endif
                        <address>
                            <dl>
                                <dt><i class="fi flaticon-navigation" style="color: white"></i></dt>
                                @if ($address)
                                <dd>{{$address}}</dd>
                                @else
                                <dd>PO Box 16122 Collins Street West Victoria 8007 Australia</dd>
                                @endif

                                <dt><i class="fi flaticon-24-hours" style="color: white"></i></dt>
                                @if ($phone)
                                <dd><a href="tel:+12463450695">{{$phone}}</a></dd>
                                @else
                                <dd><a href="tel:+12463450695">+111-222-333</a></dd>
                                @endif

                                <dt><i class="fi flaticon-mail" style="color: white"></i></dt>
                                @if ($email)
                                <dd><a
                                        href="mailto:&#105;&#110;&#102;&#111;&#064;&#104;&#111;&#109;&#101;&#115;&#119;&#101;&#101;&#116;&#046;&#099;&#111;&#109;">{{$email}}</a>
                                </dd>
                                @else
                                <dd><a
                                        href="mailto:&#105;&#110;&#102;&#111;&#064;&#104;&#111;&#109;&#101;&#115;&#119;&#101;&#101;&#116;&#046;&#099;&#111;&#109;">globelgri@gmail.com</a>
                                </dd>
                                @endif

                            </dl>
                        </address>
                    </div>
                    <!-- ftNav -->
                    <nav class="col-xs-12 ftNav col-sm-4 col">
                        <h2 class="fontNeuron fwSemi text-uppercase">Useful Links</h2>
                        <div class="ftNavListsHolder">
                            <ul class="list-unstyled">
                                <li><a href="{{route('term_of_use')}}">Terms of Use</a></li>
                                <li><a href="{{route('about_us')}}">About US</a></li>
                                <li><a href="{{route('privacy_policy')}}">Privacy Policy</a></li>
                                <li><a href="{{route('contact_support')}}">Contact Support</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="{{route('blog')}}">Blog</a></li>
                                <li><a href="{{route('how_it_work')}}">How It Works</a></li>
                                <li><a href="{{route('contact_us')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>

                    <div class="col-xs-12 col-sm-4 col">
                        <h2 class="fontNeuron fwSemi text-uppercase">LATEST PROPERTIES</h2>
                        <!-- postsWidgetList -->
                        <?php
                                $latestproperties = App\Property::orderBy('id','DESC')->Take(2)->get();
                             ?>

                        <ul class="list-unstyled postsWidgetList">
                            @foreach ($latestproperties as $row)
                            <li>
                                <div class="alignleft">
                                    <a href="{{route('home_for_sale')}}">
                                        <img src="{{asset($row->featured_photo)}}" alt="image description">
                                    </a>
                                </div>
                                <div class="descrWrap">
                                    <h3 class="fwNormal"><a
                                            href="{{route('home_for_sale')}}">{{$row->propert_title}}</a>
                                    </h3>
                                    <h4 class="fwSemi" style="color: white">$ {{$row->price}}</h4>
                                </div>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- pageFooter -->
        <footer id="pageFooter" style="background-color: #06356d">
            <div class="container pageFooterHolder">
                <div class="row">
                    <div class="col-xs-12 col-sm-push-6 col-sm-6">
                        <!-- pageFooterSocial -->
                        <ul class="socialNetworks list-unstyled pageFooterSocial">
                            <li style="color: white"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li style="color: white"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li style="color: white"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li style="color: white"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li style="color: white"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li style="color: white"><a href="#"><i class="fab fa-google"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-pull-6 col-sm-6">
                        <p style="color: white">2021 <a href="#">globelgri</a> - All rights reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- btnScrollToTop -->
        <a href="#pageWrapper" class="btnScrollToTop smooth textWhite">Scroll Top <i
                class="fi flaticon-arrows btnScrollIcn"></i></a>
        <span class="bgCover elemenBlock" style="background-image: url({{asset('frontend/images/hm.jpg')}});"></span>
    </div>
    </div>
    <!-- pagePopupWrap -->
    <div class="popup-holder">
        <div id="popup1" class="lightbox-demo">
            <!-- popupLoginFrom -->
            <form action="{{ route('user.login') }}" method="post"
                class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
                @csrf
                <ul class="list-unstyled popupTabsetList text-center fwBold text-uppercase fontNeuron">
                    <li class="active"><a href="#tab01">LOGIN</a></li>
                    <li><a href="#tab02">REGISTER</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab01" class="tab-active">
                        <div class="popupColsHolder">
                            <div class="col bgWhite">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control elemenBlock"
                                        placeholder="Email">
                                    @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>

                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control elemenBlock"
                                        placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label class="fwNormal customLabelCheck">
                                        <input type="checkbox" class="customFormInputReset" name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="fakeCheckbox"></span>
                                        <span class="fakeLabel">Remember me</span>
                                    </label>
                                </div>
                                <button type="submit"
                                    class="btn  elemenBlock fontNeuron fwNormal text-uppercase btnSubmit"
                                    style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);color:white">LOGIN</button>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" style="color: darkgray"
                                    class="linkForget">Forgot Password?</a>
                                @endif
                            </div>

                            <div class="col">
                               
                                <button type="button"
                                    class="btn  elemenBlock fontNeuron fwNormal text-uppercase btnSubmit"
                                    style="background: none">
                                    <img src="{{asset('frontend/images/logo5.png')}}"
                                    style="width:200px;height:80px;" alt="globelgri logo">
                                </button>
                                     <p>You Can Login using your Login Credentials</p>
                                      {{-- @if($errors->any())
                                    <p class="text-danger">Error</p>
                                    {!! implode('', $errors->all('<ul><li class="text-danger">:message</li></ul>')) !!}
                                @endif --}}
                                {{-- <a href="{{route('login.facebook')}}" type="button"
                                    class="btnSocial btnFb elemenBlock"><i class="fab fa-facebook-f btnIco"></i>
                                    Facebook Connect</a> --}}
                                {{-- <a href="{{route('login.google')}}" type="button" class="btnSocial btnG elemenBlock"><i
                                        class="fab fa-google btnIco"></i> Google</a> --}}
                            </div>
                        </div>
                    </div>
            </form>
            <form action="{{ route('user.register') }}" method="post">
                @csrf
                <div id="tab02">
                    
                    <div class="popupColsHolder">
                        <div class="col bgWhite">
                            <div class="form-group">
                                <input type="text" class="form-control elemenBlock" id="name" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Enter  name..">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control elemenBlock" name="password" required
                                    autocomplete="new-password" placeholder="Enter password..">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control elemenBlock" name="password_confirmation"
                                    required autocomplete="new-password" placeholder="confirm password..">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control elemenBlock" name="email"
                                    value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Enter Your valid email..">

                            </div>
                            <div class="form-group">


                                <select data-placeholder="Type" class="chosen-select" name="agent_role">
                                    <option selected="selected">Select Role</option>

                                    @foreach ($roles as $row)
                                    <option value="{{$row->name}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset" checked>
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">I have read and agree to the Term of Service.</span>
                                </label>
                            </div>
                            <button type="submit" class="btn elemenBlock fontNeuron fwNormal text-uppercase btnSubmit"
                                style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);color:white">REGISTER</button>
                        </div>
                        <div class="col">
                            <button type="button"
                                    class="btn  elemenBlock fontNeuron fwNormal text-uppercase btnSubmit"
                                    style="background: none">
                                    <img src="{{asset('frontend/images/logo5.png')}}"
                                    style="width:200px;height:80px; margin-top:-3%" alt="globelgri logo">
                                </button>
                            <p>You Can Register Your New Accounts</p>
                            <hr>
                            {{-- @if($errors->any())
                                    <p class="text-danger">Error</p>
                                    {!! implode('', $errors->all('<ul><li class="text-danger">:message</li></ul>')) !!}
                                @endif --}}
                            {{-- <button type="button" class="btnSocial btnFb elemenBlock"><i
                                    class="fab fa-facebook-f btnIco"></i> Facebook Connect</button>
                            <button type="button" class="btnSocial btnG elemenBlock"><i
                                    class="fab fa-google btnIco"></i> Google Connect</button> --}}
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    </div>
    </div>
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <!-- include bootstrap JavaScript -->
    <script src="{{asset('frontend/js/bootstrap-slider.min.js')}}"></script>
    <!-- include custom JavaScript -->
    <script src="{{asset('frontend/js/jquery.main.js')}}"></script>
    {{-- <script type="text/javascript" src="{{asset('frontend/js/map2.js')}}"></script> --}}
    <script type="text/javascript" src="{{asset('frontend/js/init.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    <script>
        @if(session()->has('error'))

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
        @endif

    </script>

            <script>
                toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "preventDuplicates": true
                    }
            @if(session()->has('errors'))
                @foreach($errors->all() as $error)
                    toastr.error("{{ $error }}");
                @endforeach
            @endif
        </script>

    <script>
        @if(session()->has('message'))

        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
        @endif

    </script>
    <script>
        function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

        function menufunction() {
            $('#a').toggle();
        }

        function menufunction1() {
            $('#b').toggle();
        }

        function menufunction2() {
            $('#c').toggle();
        }

    </script>
</body>

</html>
