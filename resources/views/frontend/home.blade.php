@extends('layouts.frontend.app')
@section('content')
 
<style>
    
    #sform {
    margin-top: -320px;
    padding-bottom: 25px;
}
</style>
<!-- main -->
<main>
    <!-- introSlider -->
    <section class="slick-fade slickSlider introSlider">
        <div>
            <!-- introSlide -->
            <article class="introSlide bgCover"
                style="background-image: url(https://ddclawfirm.com/wp-content/uploads/2017/11/4-Things-Real-Estate-Attorneys-Consider-Vital-1030x618.jpg);">
                <div class="container introSlideHolder">
                    <div class="align">
                        <!-- introSlideCaption -->
                        <div class="introSlideCaption captionwithtabs">
                            <h1 class="fontNeuron" style="text-align: center; line-height: 0.9;">Discover a place you'll love to live</h1>
                            <div class="tabSetholder bgWhite">
                                <ul class="list-unstyled tabset">
                                    <li class="active color1">
                                        <a href="#tab1-0">Buy</a>
                                    </li>
                                    <li class="color2" style="border:none; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">
                                        <a href="#tab2-0">Rent</a>
                                    </li>
                                    <li class="color3">
                                        <a href="#tab3-0">Investment</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab1-0" class="active">
                                        <!-- findFormBlock -->
                                        <form action="{{route('BuySearch')}}" class="findFormBlock findFormBlock4" method="POST">
                                            @csrf
                                            <div class="row align-center">
                                                <div class="col-xs-12 col-sm-8">
                                                    <div class="form-group">
                                                        <input type="text" id="search_input" class="form-control elemenBlock"
                                                            placeholder="Search Buy..." autocomplete="off">
                                                            <input type="hidden" name="property_type" value="For Sale">
                                                            <input type="hidden" id="loc_lat" name="latitude" />
                                                            <input type="hidden" id="loc_long" name="longitude" />
                                                            <input type="hidden" id="address" name="item" />
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-4">
                                                    
                                                    <button type="submit"
                                                        class="btn  text-uppercase fontNeuron"  style="border:none; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; ">SEARCH</button>
                                                </div>

                                            </div>

                                        </form>
                                    </div>
                                    <div id="tab2-0" class="js-tab-hidden">
                                        <!-- findFormBlock -->
                                        <form action="{{route('BuySearch')}}" class="findFormBlock findFormBlock4" method="POST">
                                            @csrf
                                            <div class="row align-center">
                                                <div class="col-xs-12 col-sm-8">
                                                    <div class="form-group">
                                                        <input type="text" id="search_input1" class="form-control elemenBlock"
                                                            placeholder="Search Rent..." autocomplete="off">
                                                            <input type="hidden" name="property_type" value="For Rent">
                                                            <input type="hidden" id="loc_lat1" name="latitude" />
                                                            <input type="hidden" id="loc_long1" name="longitude" />
                                                            <input type="hidden" id="address1" name="item" />
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-4">
                                                    <button  type="submit"
                                                        class="btn  text-uppercase fontNeuron" style="border:none;background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">SEARCH</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div id="tab3-0" class="js-tab-hidden">
                                        <!-- findFormBlock -->
                                        <form action="{{route('BuySearch')}}" class="findFormBlock findFormBlock4" method="POST">
                                            @csrf
                                            <div class="row align-center">
                                                <div class="col-xs-12 col-sm-8">
                                                    <div class="form-group">
                                                        <input type="text" id="search_input2" class="form-control elemenBlock"
                                                            placeholder="Search Investment..." autocomplete="off">
                                                            <input type="hidden" name="property_type" value="For Investment">
                                                               <input type="hidden" id="loc_lat2" name="latitude" />
                                                            <input type="hidden" id="loc_long2" name="longitude" />
                                                            <input type="hidden" id="address2" name="item" />
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-4">
                                                    <button type="submit"
                                                        class="btn  text-uppercase fontNeuron" style="border:none;background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">SEARCH</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <div class="container mt-5">
        <div class="row">
                            
            <h1 class="text-center fontNeuron blockH text-uppercase" id="sheading" style="margin-top: -60px;">See how Globelgri can help
            </h1>
            <div class="col-xs-12 col-sm-6 col-md-4" id="s1">
                <div class="imgHolder" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                    <a href="{{route('home_for_sale')}}">
                        <img src="{{asset('frontend/images/homes1.png')}}"  style="margin-top: 20%; height:160px;" alt="image description">
                    </a>
                </div>
                <h4 class="text-center">Buy a home</h4>
                <p class="text-center" style="color: black">With over 1 million+ homes for sale available on the website, Globelgri can match
                    you with a house you will want to call home.</p>

                <div class="col text-center">
                    <a href="{{route('home_for_sale')}}" type="button" class="btn" style="border:none;background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">Find a home </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4" id="s2">
                <div class="imgHolder" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                    <a href="{{route('home_for_sale')}}">
                        <img src="{{asset('frontend/images/homes2.png')}}" style="margin-top: 20%;height:160px" alt="image description">
                    </a>
                </div>
                <h4 class="text-center">Rent a home</h4>
                <p class="text-center" style="color: black">With 35+ filters and custom keyword search, Globelgri can help you easily find a
                    home or apartment for rent that you'll love.</p>

                <div class="col text-center">
                     <a href="{{route('home_for_sale')}}" type="button" class="btn" style="border:none;background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Find a home </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4" id="s3">
                <div class="imgHolder" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                    <a href="{{route('home_for_sale')}}">
                        <img src="{{asset('frontend/images/homes3.png')}}" style="margin-top: 20%;height:160px" alt="image description">
                    </a>
                </div>
                <h4 class="text-center">Investment</h4>
                <p class="text-center" style="color: black">With more neighborhood insights than any other real estate website, we've
                    captured the color and diversity of communities.</p>

                <div class="col text-center">
                    <a href="{{route('home_for_sale')}}" type="button" class="btn" style="border:none;background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Learn more </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center fontNeuron blockH text-uppercase" id="s1heading" style="margin-top: 100px;">See how Globelgri can
                help</h1>
            <p class="text-center" style="color: black">Take a deep dive and browse original neighborhood photos, drone footage, resident
                <br> reviews and local insights to see if the homes for sale are right for you.</p>
            <!-- isoContentHolder -->
            <div class="row">
                <div class="three-slider slickSlider latestPostsSlider slide-v2">
                    <div>
                        <div class="col-xs-12">
                            <!-- postColumn -->
                            <article class="postColumn" style="border: none">
                                <div class="aligncenter">
                                    <!-- postColumnImageSlider -->
                                    <div class="imgHolder">
                                        <a href="{{route('home_for_sale')}}">
                                            <img  src="{{asset('frontend/images/home0.jpg')}}"
                                                            style="height: 185px; width:368px;" id="pica" alt="image description" >
                                        </a>
                                    </div>
                                   <a href="{{route('single_property',['id' => 1])}}"> <span class="btn btnSmall  text-capitalize" style="border:none;background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">For Sale</span></a>
                                    <div class="postion">
                                        <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property',['id' => 1])}}">Luxury
                                                Family Home</a></h2>
                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 490,000</span>
                                            <span class="textUnit fwNormal">/ monthly</span></h3>
                                    </div>


                                </div>

                                <!-- postColumnFoot -->
                                <div class="aligncenter">
                                    <!-- postColumnImageSlider -->
                                    <div class="imgHolder">
                                        <a href="#">
                                            <img src="{{asset('frontend/images/home01.jpeg')}}" id="pica" style="height: 185px; width:368px;" alt="image description">
                                        </a>
                                    </div>
                                    <a href="{{route('single_property',['id' => 1])}}"> <span class="btn btnSmall  text-capitalize" style="border:none;background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">For Rent</span></a>
                                    <div class="postion">
                                        <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property',['id' =>1])}}">Luxury
                                                Family Home</a></h2>
                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 490,000</span>
                                            <span class="textUnit fwNormal">/ monthly</span></h3>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-12">
                            <!-- postColumn -->
                            <article class="postColumn" style="border: none">
                                <div class="aligncenter">
                                    <!-- postColumnImageSlider -->
                                    <div class="imgHolder">
                                        <a href="#">
                                            <img src="{{asset('frontend/images/p1.jpg')}}" id="pica" style="height: 391px; width:368px;" alt="image description">
                                        </a>
                                    </div>
                                   <a href="{{route('single_property',['id' => 1])}}"> <span class="btn btnSmall text-capitalize" style="border:none;background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">For Investmet</span></a>
                                    <div class="postion">
                                        <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property',['id' => 1])}}">Luxury
                                                Family Home</a></h2>
                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 490,000</span>
                                            <span class="textUnit fwNormal">/ monthly</span></h3>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-12">
                            <!-- postColumn -->
                            <article class="postColumn" style="border: none">
                                <div class="aligncenter">
                                    <!-- postColumnImageSlider -->
                                    <div class="imgHolder">
                                        <a href="#">
                                            <img src="{{asset('frontend/images/2.jpg')}}" id="pica" style="height: 185px; width:368px;" alt="image description">
                                        </a>
                                    </div>
                                    <a href="{{route('single_property',['id' => 1])}}"> <span class="btn btnSmall  text-capitalize" style="border:none;background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">For Rent</span></a>
                                    <div class="postion">
                                        <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property',['id' => 1])}}">Luxury
                                                Family Home</a></h2>
                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 490,000</span>
                                            <span class="textUnit fwNormal">/ monthly</span></h3>
                                    </div>


                                </div>

                                <!-- postColumnFoot -->
                                <div class="aligncenter">
                                    <!-- postColumnImageSlider -->
                                    <div class="imgHolder">
                                        <a href="#">
                                            <img src="{{asset('frontend/images/3.jpg')}}" id="pica" style="height: 185px; width:368px;" alt="image description">
                                        </a>
                                    </div>
                                <a href="{{route('single_property',['id' => 1])}}"> <span class="btn btnSmall text-capitalize" style="border:none;background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white" >For Sale</span></a>
                                    <div class="postion">
                                        <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property',['id' => 1])}}">Luxury
                                                Family Home</a></h2>
                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 490,000</span>
                                            <span class="textUnit fwNormal">/ monthly</span></h3>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-12">
                            <!-- postColumn -->
                            <article class="postColumn" style="border: none">
                                <div class="aligncenter">
                                    <!-- postColumnImageSlider -->
                                    <div class="imgHolder">
                                        <a href="#">
                                            <img src="{{asset('frontend/images/4.jpg')}}" id="pica" style="height: 185px; width:368px;" alt="image description">
                                        </a>
                                    </div>
                                    <a href="{{route('single_property',['id' => 1])}}"> <span class="btn btnSmall  text-capitalize" style="border:none;background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">For Sale</span></a>
                                    <div class="postion">
                                        <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property',['id' => 1])}}">Luxury
                                                Family Home</a></h2>
                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 490,000</span>
                                            <span class="textUnit fwNormal">/ monthly</span></h3>
                                    </div>


                                </div>

                                <!-- postColumnFoot -->
                                <div class="aligncenter">
                                    <!-- postColumnImageSlider -->
                                    <div class="imgHolder">
                                        <a href="#">
                                            <img src="{{asset('frontend/images/5.jpg')}}" id="pica" style="height: 185px; width:368px;" alt="image description">
                                        </a>
                                    </div>
                                    <a href="{{route('single_property',['id' => 1])}}"> <span class="btn btnSmall  text-capitalize" style="border:none;background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">For Rent</span></a>
                                    <div class="postion">
                                        <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property',['id' => 1])}}">Luxury Family Home</a></h2>
                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 490,000</span>
                                            <span class="textUnit fwNormal">/ monthly</span></h3>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container mt-5">
        <div class="row">
            <!-- findFormBlock -->
            <form action="#" class="findFormBlock findFormBlock4" id="sform" style="text-align: center">
                <div class="col-xs-12 col-sm-6  col-md-10" >
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your Keyword...">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2">
                    <a href="{{route('home_for_sale')}}" type="button" class="btn btnSmall  text-uppercase fontNeuron" style="border:none;background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">SEARCH</a>
                </div>
            </form>
        </div>
    </div> --}}
    <section class="homeapp" style="margin-top: -14%" id="homeapp">
        <div class="container">
            <div class="row" style="padding: 10%">
                <div class="col-xs-12 col-sm-12  col-md-6" id="allguid" style="margin-left: 0">
                    <h1 class="fontNeuron" style="color: white;">Globelgri Guides</h1>
                    <h4 class="fontNeuron" style="color: white;">Everything you need to know <br> when you're looking to buy,rent, or investment - all in one place.
                    </h4>

                    <a href="{{route('all_guide')}}" style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:7%"  type="button" class="btn  text-uppercase fontNeuron">See all the guides</a>
                </div>
                <div class="col-xs-12 col-sm-6  col-md-6 float-right" id="allguid1">
                    <div class="row" style="margin-top: 6%">
                        <div class="col-xs-6 col-sm-6 col-md-6 ">
                            <div class="imgHolder" style="display: block; margin-left: 40%; width: 50%;">
                                <a href="{{route('buy_a_home')}}">
                                    <img src="{{asset('frontend/images/homes1.png')}}" class="pic" style="height: 90px" alt="image description">
                                </a>
                            </div>
                            <div class="imgHolder"
                                style="display: block; margin-left: 40%; margin-right: auto; width: 50%;">
                                <a href="{{route('rent_a_home')}}">
                                    <img src="{{asset('frontend/images/homes2.png')}}" class="pic" style="height: 90px" alt="image description">
                                </a>
                            </div>
                            <div class="imgHolder"
                                style="display: block; margin-left: 40%; margin-right: auto; width: 50%;">
                                <a href="{{route('invest_a_home')}}">
                                    <img src="{{asset('frontend/images/homes3.png')}}" class="pic"  style="height: 90px" alt="image description">
                                </a>
                            </div>

                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <h2 class="fontNeuron" style="color: white;">Buyer Guides</h2>
                            <a href="{{route('buy_a_home')}}"><p style="color: white;">How to buy <i class="fi flaticon-arrows readMoreIcn"></i></p></a>
                            <h2 class="fontNeuron" style="color: white;">Renter Guides</h2>
                            <a href="{{route('rent_a_home')}}"><p style="color: white;">How to rent <i class="fi flaticon-arrows readMoreIcn"></i></p></a>
                            <h2 class="fontNeuron" style="color: white;">Invester Guides</h2>
                            <a href="{{route('invest_a_home')}}"><p style="color: white;">How to invest <i class="fi flaticon-arrows readMoreIcn"></i></p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container mt-5">
        <h1 class="text-center" style="margin-top: 6%">Discover a place you'll love to live</h1>
        <div class="row" style="margin-top: 5%;">
            <div class="col-xs-6 col-sm-6 col-md-3"  style="text-align: center; margin-left:-2%">       
                <ul style="list-style-type:none;color: black" id="l">
                    <li><h6>Real Estate Markets</h6></li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3" style="text-align: center;margin-left:-2%">
                <ul style="list-style-type:none;color: black" id="l">
                    <li><h6>Popular Searches</h6></li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3"  style="text-align: center;margin-left:-2%">                
                <ul style="list-style-type:none;color: black" id="l">
                    <li><h6>Explore Globel Gri</h6></li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3" style="text-align: center;margin-left:-2%">
                <ul style="list-style-type:none; color: black" id="l">
                    <li><h6>For Professionals</h6></li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                </ul>
            </div>

            <p style="margin-left:4.6%;color: black; margin-top:20%">Trulia is a registered Trademark of Globelgri, Inc. and MLS listings are provided
                by Globelgri, Inc., a licensed real estate brokerage. See here for a list of our real estate licenses. </p>
            <p style="margin-left:4.6%;color: black">Globelgri Group ® Other Brands:Globelgri EastPrivacy PortalCookie
                Preference
                Do Not Sell My Personal Information
            </p>
            <p style="margin-left:4.6%;color: black">Trulia CorporateAbout TruliaAbout Globelgri GroupFair Housing
                GuideCareersNewsroomInvestor RelationsAdvertising TermsPrivacyTerms of UseListings Quality
                PolicySubscription TermsHelpPrivacy PortalCookie Preference
                Do Not Sell My Personal Information
            </p>
            <p style="margin-left:4.6%; margin-bottom:7%; color: black">Globelgri Group is committed to ensuring digital accessibility for individuals
                with disabilities. We are continuously working to improve the accessibility of our web experience for
                everyone, and we welcome feedback and accommodation requests. If you wish to report an issue or seek an
                accommodation, please let us know.</p>

        </div>
         {{-- @if(Session::has('messege'))
            toastr.success("{{ Session::get('messege') }}");
        @endif --}}
       
    </div>
</main>
@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDxL17Fyl5fOmZ13z3xDVdxBAOEF6ZwKKc">
    </script>

    


   {{-- buy  --}}
 <script>
        var searchInput = 'search_input';

        $(document).ready(function () {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode'],
            });

            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var near_place = autocomplete.getPlace();
                document.getElementById('loc_lat').value = near_place.geometry.location.lat();
                document.getElementById('loc_long').value = near_place.geometry.location.lng();
                var lat = parseFloat(document.getElementById('loc_lat').value);
                var lng = parseFloat(document.getElementById('loc_long').value);
                console.log(lat);
                console.log(lng);
                var latlng = new google.maps.LatLng(lat, lng);
                var geocoder = geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'latLng': latlng
                }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            var k = results[1].formatted_address;
                            document.getElementById('address').value = k;
                            console.log(results[1].address_components[2].long_name);
                        }
                    }
                });
                // document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
                // document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
            });
        });
        $(document).on('change', '#' + searchInput, function () {
            
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode'],
                componentRestrictions: {
                    country: "USA"
                }
            });
        });

</script>


{{-- rent  --}}


<script>
        var searchInput1 = 'search_input1';

        $(document).ready(function () {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput1)), {
                types: ['geocode'],
            });

            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var near_place = autocomplete.getPlace();
                document.getElementById('loc_lat1').value = near_place.geometry.location.lat();
                document.getElementById('loc_long1').value = near_place.geometry.location.lng();
                var lat = parseFloat(document.getElementById('loc_lat1').value);
                var lng = parseFloat(document.getElementById('loc_long1').value);
                console.log(lat);
                console.log(lng);
                var latlng = new google.maps.LatLng(lat, lng);
                var geocoder = geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'latLng': latlng
                }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            var k1 = results[1].formatted_address;
                            document.getElementById('address1').value = k1;
                            console.log(results[1].address_components[2].long_name);
                        }
                    }
                });
                // document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
                // document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
            });
        });
        $(document).on('change', '#' + searchInput1, function () {
            
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput1)), {
                types: ['geocode'],
                componentRestrictions: {
                    country: "USA"
                }
            });
        });

</script>

{{-- investment --}}

<script>
        var searchInput2 = 'search_input2';

        $(document).ready(function () {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput2)), {
                types: ['geocode'],
            });

            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var near_place = autocomplete.getPlace();
                document.getElementById('loc_lat2').value = near_place.geometry.location.lat();
                document.getElementById('loc_long2').value = near_place.geometry.location.lng();
                var lat = parseFloat(document.getElementById('loc_lat2').value);
                var lng = parseFloat(document.getElementById('loc_long2').value);
                console.log(lat);
                console.log(lng);
                var latlng = new google.maps.LatLng(lat, lng);
                var geocoder = geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'latLng': latlng
                }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            var k2 = results[1].formatted_address;
                            document.getElementById('address2').value = k2;
                            console.log(results[1].address_components[2].long_name);
                        }
                    }
                });
                // document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
                // document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
            });
        });
        $(document).on('change', '#' + searchInput2, function () {
            
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput2)), {
                types: ['geocode'],
                componentRestrictions: {
                    country: "USA"
                }
            });
        });

</script>