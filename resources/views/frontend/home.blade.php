@extends('layouts.frontend.app')
@section('content')
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
                                    <li class="color2">
                                        <a href="#tab2-0">Rent</a>
                                    </li>
                                    <li class="color3">
                                        <a href="#tab3-0">Investment</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab1-0" class="active">
                                        <!-- findFormBlock -->
                                        <form action="#" class="findFormBlock findFormBlock4">
                                            <div class="row align-center">
                                                <div class="col-xs-12 col-sm-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control elemenBlock"
                                                            placeholder="Search Buy...">
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-4">
                                                    
                                                    <a href="{{route('home_for_sale')}}" type="button"
                                                        class="btn  text-uppercase fontNeuron"  style="background-color: #8b5925; color:white; ">SEARCH</a>
                                                </div>

                                            </div>

                                        </form>
                                    </div>
                                    <div id="tab2-0" class="js-tab-hidden">
                                        <!-- findFormBlock -->
                                        <form action="#" class="findFormBlock findFormBlock4">
                                            <div class="row align-center">
                                                <div class="col-xs-12 col-sm-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control elemenBlock"
                                                            placeholder="Search Rent...">
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-4">
                                                    <a href="{{route('home_for_sale')}}" type="button"
                                                        class="btn  text-uppercase fontNeuron" style="background-color: #8b5925; color:white">SEARCH</a>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <div id="tab3-0" class="js-tab-hidden">
                                        <!-- findFormBlock -->
                                        <form action="#" class="findFormBlock findFormBlock4">
                                            <div class="row align-center">
                                                <div class="col-xs-12 col-sm-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control elemenBlock"
                                                            placeholder="Search Investment...">
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-4">
                                                    <a href="{{route('home_for_sale')}}" type="button"
                                                        class="btn  text-uppercase fontNeuron" style="background-color: #8b5925; color:white">SEARCH</a>
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
            <h1 class="text-center fontNeuron blockH text-uppercase" style="margin-top: 50px;">See how Globelgri can help
            </h1>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="imgHolder" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                    <a href="{{route('home_for_sale')}}">
                        <img src="{{asset('frontend/images/homes1.png')}}"  style="margin-top: 20%; height:160px" alt="image description">
                    </a>
                </div>
                <h4 class="text-center">Buy a home</h4>
                <p class="text-center" style="color: black">With over 1 million+ homes for sale available on the website, Globelgri can match
                    you with a house you will want to call home.</p>

                <div class="col text-center">
                    <a href="{{route('home_for_sale')}}" type="button" class="btn" style="background-color: #8b5925; color:white;">Find a home </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="imgHolder" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                    <a href="{{route('home_for_sale')}}">
                        <img src="{{asset('frontend/images/homes1.png')}}" style="margin-top: 20%;height:160px" alt="image description">
                    </a>
                </div>
                <h4 class="text-center">Rent a home</h4>
                <p class="text-center" style="color: black">With 35+ filters and custom keyword search, Globelgri can help you easily find a
                    home or apartment for rent that you'll love.</p>

                <div class="col text-center">
                     <a href="{{route('home_for_sale')}}" type="button" class="btn" style="background-color: #8b5925; color:white">Find a home </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="imgHolder" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                    <a href="{{route('home_for_sale')}}">
                        <img src="{{asset('frontend/images/homes1.png')}}" style="margin-top: 20%;height:160px" alt="image description">
                    </a>
                </div>
                <h4 class="text-center">Investment</h4>
                <p class="text-center" style="color: black">With more neighborhood insights than any other real estate website, we've
                    captured the color and diversity of communities.</p>

                <div class="col text-center">
                    <a href="{{route('home_for_sale')}}" type="button" class="btn" style="background-color: #8b5925; color:white">Learn more </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center fontNeuron blockH text-uppercase" style="margin-top: 100px;">See how Globelgri can
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
                                                            style="height: 185px; width:368px;" alt="image description">
                                        </a>
                                    </div>
                                   <a href="{{route('single_property')}}"> <span class="btn btnSmall  text-capitalize" style="background-color: #8b5925; color:white">For Sale</span></a>
                                    <div class="postion">
                                        <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property')}}">Luxury
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
                                            <img src="{{asset('frontend/images/home01.jpeg')}}" style="height: 185px; width:368px;" alt="image description">
                                        </a>
                                    </div>
                                    <a href="{{route('single_property')}}"> <span class="btn btnSmall  text-capitalize" style="background-color: #8b5925; color:white">For Rent</span></a>
                                    <div class="postion">
                                        <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property')}}">Luxury
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
                                            <img src="{{asset('frontend/images/p1.jpg')}}" style="height: 391px; width:368px;" alt="image description">
                                        </a>
                                    </div>
                                   <a href="{{route('single_property')}}"> <span class="btn btnSmall text-capitalize" style="background-color: #8b5925; color:white">For Investmet</span></a>
                                    <div class="postion">
                                        <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property')}}">Luxury
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
                                            <img src="{{asset('frontend/images/2.jpg')}}" style="height: 185px; width:368px;" alt="image description">
                                        </a>
                                    </div>
                                    <a href="{{route('single_property')}}"> <span class="btn btnSmall  text-capitalize" style="background-color: #8b5925; color:white">For Rent</span></a>
                                    <div class="postion">
                                        <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property')}}">Luxury
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
                                            <img src="{{asset('frontend/images/3.jpg')}}" style="height: 185px; width:368px;" alt="image description">
                                        </a>
                                    </div>
                                <a href="{{route('single_property')}}"> <span class="btn btnSmall text-capitalize" style="background-color: #8b5925; color:white" >For Sale</span></a>
                                    <div class="postion">
                                        <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property')}}">Luxury
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
                                            <img src="{{asset('frontend/images/4.jpg')}}" style="height: 185px; width:368px;" alt="image description">
                                        </a>
                                    </div>
                                    <a href="{{route('single_property')}}"> <span class="btn btnSmall  text-capitalize" style="background-color: #8b5925; color:white">For Sale</span></a>
                                    <div class="postion">
                                        <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property')}}">Luxury
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
                                            <img src="{{asset('frontend/images/5.jpg')}}" style="height: 185px; width:368px;" alt="image description">
                                        </a>
                                    </div>
                                    <a href="{{route('single_property')}}"> <span class="btn btnSmall  text-capitalize" style="background-color: #8b5925; color:white">For Rent</span></a>
                                    <div class="postion">
                                        <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property')}}">Luxury Family Home</a></h2>
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
    <div class="container mt-5">
        <div class="row">
            <!-- findFormBlock -->
            <form action="#" class="findFormBlock findFormBlock4" style="text-align: center">
                <div class="col-xs-12 col-sm-6  col-md-10" >
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your Keyword...">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2">
                    <a href="{{route('home_for_sale')}}" type="button" class="btn btnSmall  text-uppercase fontNeuron" style="background-color: #8b5925; color:white">SEARCH</a>
                </div>
            </form>
        </div>
    </div>
    <section class="homeapp" style="margin-top: 3%">
        <div class="container">
            <div class="row" style="padding: 10%">
                <div class="col-xs-12 col-sm-12  col-md-6" style="margin-left: 0">
                    <h1 class="fontNeuron" style="color: white;">Globelgri Guides</h1>
                    <h4 class="fontNeuron" style="color: white;">Everything you need to know <br> when you're looking to buy,rent, or sell - all in one place.
                    </h4>

                    <a href="{{route('home_for_sale')}}" style="font-size: 20px; background-color: #8b5925; color:white; margin-top:7%"  type="button" class="btn  text-uppercase fontNeuron">See all the guides</a>
                </div>
                <div class="col-xs-12 col-sm-6  col-md-6 float-right">
                    <div class="row" style="margin-top: 6%">
                        <div class="col-xs-6 col-sm-6 col-md-6 ">
                            <div class="imgHolder" style="display: block; margin-left: 40%; width: 50%;">
                                <a href="{{route('home_for_sale')}}">
                                    <img src="{{asset('frontend/images/homes1.png')}}" style="height: 90px" alt="image description">
                                </a>
                            </div>
                            <div class="imgHolder"
                                style="display: block; margin-left: 40%; margin-right: auto; width: 50%;">
                                <a href="{{route('home_for_sale')}}">
                                    <img src="{{asset('frontend/images/homes1.png')}}" style="height: 90px" alt="image description">
                                </a>
                            </div>
                            <div class="imgHolder"
                                style="display: block; margin-left: 40%; margin-right: auto; width: 50%;">
                                <a href="{{route('home_for_sale')}}">
                                    <img src="{{asset('frontend/images/homes1.png')}}"  style="height: 90px" alt="image description">
                                </a>
                            </div>

                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <h2 class="fontNeuron" style="color: white;">Buyer Guides</h2>
                            <a href="{{route('home_for_sale')}}"><p style="color: white;">How to buy <i class="fi flaticon-arrows readMoreIcn"></i></p></a>
                            <h2 class="fontNeuron" style="color: white;">Renter Guides</h2>
                            <a href="{{route('home_for_sale')}}"><p style="color: white;">How to rent <i class="fi flaticon-arrows readMoreIcn"></i></p></a>
                            <h2 class="fontNeuron" style="color: white;">Invester Guides</h2>
                            <a href="{{route('home_for_sale')}}"><p style="color: white;">How to sell <i class="fi flaticon-arrows readMoreIcn"></i></p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container mt-5">
        <h1 class="text-center" style="margin-top: 6%">Discover a place you'll love to live</h1>
        <div class="row" style="margin-top: 10%">
            <div class="col-xs-6 col-sm-6 col-md-3" style="text-align: center; margin-left:-2%">
                <h6 style="">Real Estate Markets</h6>
                <ul style="list-style-type:none;color: black">
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3" style="text-align: center">
                <h6 style="">Popular Searches</h6>
                <ul style="list-style-type:none;color: black">
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3" style="text-align: center">
                <h6 style="">Explore Globel Gri</h6>
                <ul style="list-style-type:none;color: black">
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3" style="text-align: center">
                <h6 style="">For Professionals</h6>
                <ul style="list-style-type:none; color: black">
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                    <li>For Professionals</li>
                </ul>
            </div>

            <p style="margin-left:4.6%;color: black">Trulia is a registered Trademark of Globelgri, Inc. and MLS listings are provided
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
    </div>
</main>
@endsection
