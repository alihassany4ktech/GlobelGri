@extends('layouts.frontend.app')
@section('content')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> --}}
{{-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> --}}
<!-- main -->
<main>
    <!-- findFormBlock -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="map-area" style="height:530px; margin-left:-1%;margin-right:-1%">
                    <div id="map-container">
                        <div id="map_div">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- findFormBlock -->
    <form action="#" class="findFormBlock findFormBlock2 bgLightDark hasShadowTop offsetHeaderTop"
        style="margin-top: -3.5%">
        <div class="container">
            <div class="row align-center d-flex">
                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-5">
                    <div class="form-group">
                        <input type="text" class="form-control elemenBlock noBdr sizeMedium"
                            placeholder="Enter address e.g. street, city and state or zip">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2">
                    <div class="form-group">
                        <i class="fi flaticon-target icnInput"></i>
                        <input type="text" class="form-control elemenBlock noBdr sizeMedium" placeholder="All Cities">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-2">
                    <div class="form-group">
                        <select data-placeholder="All Areas" class="chosen-select noBdr sizeMedium">
                            <option value="1">All Areas</option>
                            <option value="2">All Areas</option>
                            <option value="2">All Areas</option>
                            <option value="2">All Areas</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3">
                    <div class="btnsWrap">
                        <!-- otherFeaturesOpener -->
                        <a class="btnPlus otherFeaturesOpener text-capitalize noTopBottom" role="button"
                            data-toggle="collapse" href="#otherFeaturescollapse" aria-expanded="false"
                            aria-controls="otherFeaturescollapse">
                            <i class="fas btnIcn fa-plus-circle text-info opener"></i>
                            <i class="fas fa-minus-circle closer btnIcn text-info"></i>
                            Advanced
                        </a>
                        <a href="{{route('home_for_sale')}}" type="button"
                            class="btn  buttonSmall text-uppercase fontNeuron hidden-xs"
                            style="background-color: #8b5925; color:white">SEARCH</a>
                    </div>
                </div>
            </div>
            <!-- orderRow -->
            <div class="row">
                <div class="col-xs-12">
                    <!-- otherFeaturesCollapse -->
                    <div class="collapse otherFeaturesCollapse" id="otherFeaturescollapse">
                        <!-- checkList -->
                        <ul class="list-unstyled checkList text-primary">
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Air conditioning</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cofee pot</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Fan</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Hi-fi</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Balcony</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Computer</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Fridge</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Internet</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Bedding</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cot</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Grill</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Iron</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cable TV</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Dishwasher</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Hairdryer</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Juicer</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cleaning after exit</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">DVD</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Heating</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Lift</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                    <a href="{{route('home_for_sale')}}" type="button"
                        class="btn btnDark text-uppercase fontNeuron">SEARCH</a>
                </div>
            </div>
        </div>
    </form>
    <form action="#" class="bgWhite findFormBlock hasShadow" id="form" style="height:460px;display:none">
        <div class="container-fluid" style="margin-top: 4%">
            <h2 class="fontNeuron">FIND YOUR <span class="text-info">HOME</span></h2>
            <hr class="sep elemenBlock">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control elemenBlock" placeholder="Enter Your Keyword&hellip;">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control elemenBlock" placeholder="Location">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <select data-placeholder="All Property Types" class="chosen-select">
                            <option value="1">For Rent</option>
                            <option value="2">For Sale</option>
                            <option value="3">House</option>
                            <option value="4">Property</option>
                            <option value="5">Real Estate</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <select data-placeholder="All Property Types" class="chosen-select">
                            <option value="1">For Rent</option>
                            <option value="2">For Sale</option>
                            <option value="3">House</option>
                            <option value="4">Property</option>
                            <option value="5">Real Estate</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <div class="price-wrapper">Price Range: From <b class="startValue">$500</b> to <b
                                class="endValue">$500,000</b><!-- Filter by price interval: <b>€ 10</b><b>€ 1000</b> -->
                        </div>
                        <input id="price-range" type="text" class="span2" value="" data-slider-min="500"
                            data-slider-max="500000" data-slider-step="10" data-slider-value="[100000,400000]" />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <select data-placeholder="Beds" class="chosen-select">
                                    <option value="1">Beds</option>
                                    <option value="1">Beds</option>
                                    <option value="1">Beds</option>
                                    <option value="1">Beds</option>
                                    <option value="1">Beds</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <select data-placeholder="Baths" class="chosen-select">
                                    <option value="1">Baths</option>
                                    <option value="1">Baths</option>
                                    <option value="1">Baths</option>
                                    <option value="1">Baths</option>
                                    <option value="1">Baths</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control elemenBlock" placeholder="Area Min... (Sq Ft)">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <select data-placeholder="Parking" class="chosen-select">
                            <option value="1">Parking</option>
                            <option value="1">Parking</option>
                            <option value="1">Parking</option>
                            <option value="1">Parking</option>
                            <option value="1">Parking</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- orderRow -->
            <div class="row orderRow">
                <div class="col-xs-12 col-sm-3 order1">
                    <!-- otherFeaturesOpener -->
                    <a class="btnPlus otherFeaturesOpener text-capitalize" role="button" data-toggle="collapse"
                        href="#otherFeaturescollapse" aria-expanded="false" aria-controls="otherFeaturescollapse">
                        <i class="fas btnIcn fa-plus-circle text-info opener"></i>
                        <i class="fas fa-minus-circle closer btnIcn text-info"></i>
                        Others Features
                    </a>
                </div>
                <div class="col-xs-12 order3">
                    <!-- otherFeaturesCollapse -->
                    <div class="collapse otherFeaturesCollapse" id="otherFeaturescollapse">
                        <!-- checkList -->
                        <ul class="list-unstyled checkList text-primary">
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Air conditioning</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cofee pot</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Fan</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Hi-fi</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Balcony</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Computer</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Fridge</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Internet</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Bedding</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cot</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Grill</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Iron</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cable TV</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Dishwasher</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Hairdryer</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Juicer</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cleaning after exit</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">DVD</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Heating</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Lift</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-offset-6 col-sm-3 order2">
                    <button type="button" class="btn  text-uppercase fontNeuron pull-right"
                        style="background-color: #8b5925; color:white">SEARCH</button>
                </div>
            </div>
        </div>
    </form>
    {{-- <div style="float: right; margin-right:15px; margin-top:2%">
        <input type="checkbox" name="status" id="status" checked autocomplete="off" />
    </div> --}}
    <!-- latestPostsBlock -->
    <div class="container-fluid">
        <div class="row">
            <h1 class="fontNeuron" style="margin-left: 0.9%;">San Francisco, CA Homes For Sale & Real Estate</h1>
            <div class="col-xs-12 col-md-12">
                <!-- content -->
                <div id="content">
                    <header class="row rowHead rowHead2">
                        <div class="col-xs-12 col-md-8">
                            <!-- postsFiltersList -->
                            <ul
                                class="list-unstyled postsFiltersList postsFiltersList2 text-capitalize text-center isoFiltersList">
                                <li class="active"><a href="#">All</a></li>
                                <li><a href="#" data-filter=".rent">For Rent</a></li>
                                <li><a href="#" data-filter=".sale">For Sale</a></li>
                            </ul>
                        </div>
                        {{-- <div class="col-xs-12 col-md-4">
                            <!-- sortGroup -->
                            <div class="sortGroup">
                                <strong class="groupTitle fwNormal">Sort by:</strong>
                                <div class="dropdown">
                                    <button class="dropdown-toggle buttonReset" type="button" id="sortGroup"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Default Order
                                        <i class="icn fas fa-chevron-down"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="sortGroup">
                                        <li><a href="#">Default Order</a></li>
                                        <li><a href="#">Default Order</a></li>
                                        <li><a href="#">Default Order</a></li>
                                        <li><a href="#">Default Order</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    </header>
                    <!-- isoContentHolder -->
                    <div class="isoContentHolder">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3 col isoCol sale">
                                <!-- postColumn -->
                                <article class="postColumn hasOver bgWhite">
                                    <div class="aligncenter">
                                        <!-- postColumnImageSlider -->
                                        <div class="slick-carousel slickSlider postColumnImageSlider">
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">
                                                        <img src="{{asset('frontend/images/home01.jpeg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/home01.jpeg')}}"
                                                            alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/home01.jpeg')}}"
                                                            alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- postHoverLinskList -->
                                        <ul class="list-unstyled postHoverLinskList">
                                            <li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
                                            <li class="hasOver">
                                                <a href="#"><i class="fi flaticon-share"></i></a>
                                                <!-- postColumnSocial -->
                                                <ul class="list-unstyled socialNetworks postColumnSocial">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- linkToFavourite -->
                                        <a href="#"
                                            class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property')}}">Luxury
                                            Family Home</a></h2>
                                    <address>
                                        <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                        <p>The Village, Jersey City, NJ 07302, USA </p>
                                    </address>
                                    <span class="btn btnSmall  text-capitalize"
                                        style="background-color: #8b5925; color:white">For Sale</span>
                                    <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 490,000</span> <span
                                            class="textUnit fwNormal">/ monthly</span></h3>
                                    <!-- postColumnFoot -->
                                    <a href="{{route('single_property')}}">
                                        <footer class="postColumnFoot">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Area</strong>
                                                    <strong class="fwNormal elemenBlock">2100 m2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Beds</strong>
                                                    <strong class="fwNormal elemenBlock">3</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Baths</strong>
                                                    <strong class="fwNormal elemenBlock">2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Garages</strong>
                                                    <strong class="fwNormal elemenBlock">1</strong>
                                                </li>
                                            </ul>
                                        </footer>
                                    </a>
                                </article>

                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-3 col isoCol rent">
                                <!-- postColumn -->
                                <article class="postColumn hasOver bgWhite">
                                    <div class="aligncenter">
                                        <!-- postColumnImageSlider -->
                                        <div class="slick-carousel slickSlider postColumnImageSlider">
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/home0.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">
                                                        <img src="{{asset('frontend/images/home0.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/home0.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- postHoverLinskList -->
                                        <ul class="list-unstyled postHoverLinskList">
                                            <li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
                                            <li class="hasOver">
                                                <a href="#"><i class="fi flaticon-share"></i></a>
                                                <!-- postColumnSocial -->
                                                <ul class="list-unstyled socialNetworks postColumnSocial">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- linkToFavourite -->
                                        <a href="#"
                                            class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property')}}">Meridian
                                            Villas</a></h2>
                                    <address>
                                        <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                        <p>London, United Kingdom</p>
                                    </address>
                                    <span class="btn btnSmall  text-capitalize"
                                        style="background-color: #8b5925; color:white">For Rent</span>
                                    <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 920,000</span> <span
                                            class="textUnit fwNormal">/ monthly</span></h3>
                                    <!-- postColumnFoot -->
                                    <a href="{{route('single_property')}}">
                                        <footer class="postColumnFoot">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Area</strong>
                                                    <strong class="fwNormal elemenBlock">2100 m2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Beds</strong>
                                                    <strong class="fwNormal elemenBlock">3</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Baths</strong>
                                                    <strong class="fwNormal elemenBlock">2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Garages</strong>
                                                    <strong class="fwNormal elemenBlock">1</strong>
                                                </li>
                                            </ul>
                                        </footer>
                                    </a>
                                </article>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col isoCol rent">
                                <!-- postColumn -->
                                <article class="postColumn hasOver bgWhite">
                                    <div class="aligncenter">
                                        <!-- postColumnImageSlider -->
                                        <div class="slick-carousel slickSlider postColumnImageSlider">
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/2.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/2.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/2.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- postHoverLinskList -->
                                        <ul class="list-unstyled postHoverLinskList">
                                            <li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
                                            <li class="hasOver">
                                                <a href="#"><i class="fi flaticon-share"></i></a>
                                                <!-- postColumnSocial -->
                                                <ul class="list-unstyled socialNetworks postColumnSocial">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- linkToFavourite -->
                                        <a href="#"
                                            class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property')}}">Elegant
                                            studio flat</a></h2>
                                    <address>
                                        <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                        <p>The Village, Jersey City, NJ 07302, USA</p>
                                    </address>
                                    <span class="btn btnSmall  text-capitalize"
                                        style="background-color: #8b5925; color:white">For Rent</span>
                                    <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 490,000</span> <span
                                            class="textUnit fwNormal">/ monthly</span></h3>
                                    <!-- postColumnFoot -->
                                    <a href="{{route('single_property')}}">
                                        <footer class="postColumnFoot">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Area</strong>
                                                    <strong class="fwNormal elemenBlock">2100 m2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Beds</strong>
                                                    <strong class="fwNormal elemenBlock">3</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Baths</strong>
                                                    <strong class="fwNormal elemenBlock">2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Garages</strong>
                                                    <strong class="fwNormal elemenBlock">1</strong>
                                                </li>
                                            </ul>
                                        </footer>
                                </article>
                                </a>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col isoCol rent">
                                <!-- postColumn -->
                                <article class="postColumn hasOver bgWhite">
                                    <div class="aligncenter">
                                        <!-- postColumnImageSlider -->
                                        <div class="slick-carousel slickSlider postColumnImageSlider">
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/3.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/3.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/3.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- postHoverLinskList -->
                                        <ul class="list-unstyled postHoverLinskList">
                                            <li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
                                            <li class="hasOver">
                                                <a href="#"><i class="fi flaticon-share"></i></a>
                                                <!-- postColumnSocial -->
                                                <ul class="list-unstyled socialNetworks postColumnSocial">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- linkToFavourite -->
                                        <a href="#"
                                            class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <h2 class="fontNeuron text-capitalize"><a href="#">Full Floor Office Condo</a></h2>
                                    <address>
                                        <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                        <p>London, United Kingdom</p>
                                    </address>
                                    <span class="btn btnSmall text-capitalize"
                                        style="background-color: #8b5925; color:white">For Rent</span>
                                    <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 920,000</span> <span
                                            class="textUnit fwNormal">/ monthly</span></h3>
                                    <!-- postColumnFoot -->
                                    <a href="{{route('single_property')}}">
                                        <footer class="postColumnFoot">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Area</strong>
                                                    <strong class="fwNormal elemenBlock">2100 m2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Beds</strong>
                                                    <strong class="fwNormal elemenBlock">3</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Baths</strong>
                                                    <strong class="fwNormal elemenBlock">2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Garages</strong>
                                                    <strong class="fwNormal elemenBlock">1</strong>
                                                </li>
                                            </ul>
                                        </footer>
                                    </a>
                                </article>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col isoCol rent">
                                <!-- postColumn -->
                                <article class="postColumn hasOver bgWhite">
                                    <div class="aligncenter">
                                        <!-- postColumnImageSlider -->
                                        <div class="slick-carousel slickSlider postColumnImageSlider">
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/4.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/4.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/4.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- postHoverLinskList -->
                                        <ul class="list-unstyled postHoverLinskList">
                                            <li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
                                            <li class="hasOver">
                                                <a href="#"><i class="fi flaticon-share"></i></a>
                                                <!-- postColumnSocial -->
                                                <ul class="list-unstyled socialNetworks postColumnSocial">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- linkToFavourite -->
                                        <a href="#"
                                            class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property')}}">4 Bedroom
                                            New House For Sale</a></h2>
                                    <address>
                                        <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                        <p>778 Country St. Panama City, FL</p>
                                    </address>
                                    <span class="btn btnSmall  text-capitalize"
                                        style="background-color: #8b5925; color:white">For Rent</span>
                                    <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 250,000</span> <span
                                            class="textUnit fwNormal">/ monthly</span></h3>
                                    <!-- postColumnFoot -->
                                    <a href="{{route('single_property')}}">
                                        <footer class="postColumnFoot">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Area</strong>
                                                    <strong class="fwNormal elemenBlock">2100 m2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Beds</strong>
                                                    <strong class="fwNormal elemenBlock">3</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Baths</strong>
                                                    <strong class="fwNormal elemenBlock">2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Garages</strong>
                                                    <strong class="fwNormal elemenBlock">1</strong>
                                                </li>
                                            </ul>
                                        </footer>
                                    </a>
                                </article>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col isoCol rent">
                                <!-- postColumn -->
                                <article class="postColumn hasOver bgWhite">
                                    <div class="aligncenter">
                                        <!-- postColumnImageSlider -->
                                        <div class="slick-carousel slickSlider postColumnImageSlider">
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/5.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/5.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{route('single_property')}}">
                                                    <div class="imgHolder">
                                                        <img src="{{asset('frontend/images/5.jpg')}}"
                                                            style="height: 260px; width:370px;" alt="image description">

                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- postHoverLinskList -->
                                        <ul class="list-unstyled postHoverLinskList">
                                            <li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
                                            <li class="hasOver">
                                                <a href="#"><i class="fi flaticon-share"></i></a>
                                                <!-- postColumnSocial -->
                                                <ul class="list-unstyled socialNetworks postColumnSocial">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- linkToFavourite -->
                                        <a href="#"
                                            class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property')}}">Villa on
                                            Hollywood Boulevard</a></h2>
                                    <address>
                                        <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                        <p>778 Country St. Panama City, FL</p>
                                    </address>
                                    <span class="btn btnSmall  text-capitalize"
                                        style="background-color: #8b5925; color:white">For Rent</span>
                                    <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ 320,000</span> <span
                                            class="textUnit fwNormal">/ monthly</span></h3>
                                    <!-- postColumnFoot -->
                                    <a href="{{route('single_property')}}">
                                        <footer class="postColumnFoot">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Area</strong>
                                                    <strong class="fwNormal elemenBlock">2100 m2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Beds</strong>
                                                    <strong class="fwNormal elemenBlock">3</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Baths</strong>
                                                    <strong class="fwNormal elemenBlock">2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Garages</strong>
                                                    <strong class="fwNormal elemenBlock">1</strong>
                                                </li>
                                            </ul>
                                        </footer>
                                    </a>
                                </article>
                            </div>
                        </div>
                    </div>
                    <!-- navigation pagination -->
                    <nav class="navigation pagination pagination1 fontNeuron" role="navigation">
                        <div class="nav-links">
                            <a class="prev page-numbers" href="#">Previous</a>
                            <a class="page-numbers" href="#">1</a>
                            <span class="page-numbers current">2</span>
                            <a class="page-numbers" href="#">3</a>
                            <span class="page-numbers dots">&hellip;</span>
                            <a class="page-numbers" href="#">22</a>
                            <a class="next page-numbers" href="#">Next</a>
                        </div>
                    </nav>
                </div>

                <p style="text-align: center"><a href=""> United States </a> <i class="fa fa-angle-right"></i> <a
                        href=""> California </a><i class="fa fa-angle-right"></i> San Francisco</p>
                <h3 class="fontNeuron">San Francisco, CA Real Estate Trends</h3>
                <p style="color: black">Learn about the San Francisco, CA housing market through trends and averages.
                </p>
                <h3 class="fontNeuron">See Homes in Neighborhoods Near San Francisco, CA</h3>
                <!-- introBanner -->
                <section class="threeBanner">
                    <!-- bannerImageSlideshow -->
                    <div class="banner-slider slickSlider">
                        <div>
                            <div class="banner-content" style="padding: 1%">
                                <figure class="imgHolder">
                                    <img src="{{asset('frontend/images/p5.jpg')}}" style="height: 462px; width:489px;"
                                        alt="image description">
                                    <figcaption class="captionWrap">
                                        <h2 class="fontNeuron text-capitalize">South of Market</h2>
                                        <div class="textwrap ">
                                            <address>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <p>117 total homes available</p>
                                            </address>

                                            <button type="button"
                                                style="margin-left:10%; margin-top:10%;background-color: #8b5925; color:white"
                                                class="btn">See home for sale</button>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div>
                            <div class="banner-content" style="padding: 1%">
                                <figure class="imgHolder">
                                    <img src="{{asset('frontend/images/p4.jpg')}}" style="height: 462px; width:489px;"
                                        alt="image description">
                                    <figcaption class="captionWrap">
                                        <h2 class="fontNeuron text-capitalize">Mission</h2>
                                        <div class="textwrap ">
                                            <address>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <p>89 total homes available</p>
                                            </address>

                                            <button type="button"
                                                style="margin-left:10%; margin-top:10%;background-color: #8b5925; color:white"
                                                class="btn ">See home for sale</button>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div>
                            <div class="banner-content" style="padding: 1%">
                                <figure class="imgHolder">
                                    <img src="{{asset('frontend/images/p03.jpeg')}}" style="height: 462px; width:489px;"
                                        alt="image description">
                                    <figcaption class="captionWrap">
                                        <h2 class="fontNeuron text-capitalize">Rincon Hill</h2>
                                        <div class="textwrap ">
                                            <address>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <p>53 total homes available</p>
                                            </address>

                                            <button type="button"
                                                style="margin-left:10%; margin-top:10%;background-color: #8b5925; color:white"
                                                class="btn ">See home for sale</button>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div>
                            <div class="banner-content" style="padding: 1%">
                                <figure class="imgHolder">
                                    <img src="{{asset('frontend/images/p2.jpg')}}" style="height: 462px; width:489px;"
                                        alt="image description">
                                    <figcaption class="captionWrap">
                                        <h2 class="fontNeuron text-capitalize">Pacific Heights</h2>
                                        <div class="textwrap ">
                                            <address>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <p>48 total homes available</p>
                                            </address>

                                            <button type="button" style="margin-left:10%; margin-top:10%"
                                                class="btn btnSecondary">See home for sale</button>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <div>
                            <div class="banner-content" style="padding: 1%">
                                <figure class="imgHolder">
                                    <img src="{{asset('frontend/images/p1.jpg')}}" style="height: 462px; width:489px;"
                                        alt="image description">
                                    <figcaption class="captionWrap">
                                        <h2 class="fontNeuron text-capitalize">Nob Hill</h2>
                                        <div class="textwrap ">
                                            <address>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <p>40 total homes available</p>
                                            </address>

                                            <button type="button" style="margin-left:10%; margin-top:10%"
                                                class="btn btnSecondary">See home for sale</button>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <div>
                            <div class="banner-content" style="padding: 1%">
                                <figure class="imgHolder">
                                    <img src="{{asset('frontend/images/a.jpg')}}" style="height: 462px; width:489px;"
                                        alt="image description">
                                    <figcaption class="captionWrap">
                                        <h2 class="fontNeuron text-capitalize">Russian Hill</h2>
                                        <div class="textwrap ">
                                            <address>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <p>36 total homes available</p>
                                            </address>

                                            <button type="button" style="margin-left:10%; margin-top:10%"
                                                class="btn btnSecondary">See home for sale</button>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- findFormBlock -->
                <h3 class="fontNeuron">Explore Neighborhoods in San Francisco, CA</h3>
                <!-- introBanner -->
                <section class="threeBanner" style="margin-bottom: 3%">
                    <!-- bannerImageSlideshow -->
                    <div class="banner-slider slickSlider">
                        <div>
                            <div class="banner-content" style="padding: 1%">
                                <figure class="imgHolder">
                                    <img src="{{asset('frontend/images/c.jpg')}}" alt="image description"
                                        style="height: 226px; width:600px;">
                                    <figcaption class="captionWrap">
                                        <h2 class="fontNeuron text-capitalize">Bayview</h2>
                                        <div class="textwrap ">
                                            <address>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <p>13 Homes for You</p><br>
                                                <i class="fas fa-shopping-cart"></i>
                                                <p>Buy: $639k - $2.95m</p><br>
                                            </address>


                                            <a href="">
                                                <h6 class="" style="margit-left:20px; color:white">See Local Highlights
                                                </h6>
                                            </a>
                                        </div>

                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div>
                            <div class="banner-content" style="padding: 1%">
                                <figure class="imgHolder">
                                    <img src="{{asset('frontend/images/a.jpg')}}" alt="image description"
                                        style="height: 226px; width:600px;">
                                    <figcaption class="captionWrap">
                                        <h2 class="fontNeuron text-capitalize">Cow Hollow</h2>
                                        <div class="textwrap ">
                                            <address>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <p>13 Homes for You</p><br>
                                                <i class="fas fa-shopping-cart"></i>
                                                <p>Buy: $639k - $2.95m</p><br>
                                            </address>


                                            <a href="">
                                                <h6 class="" style="margit-left:20px; color:white">See Local Highlights
                                                </h6>
                                            </a>
                                        </div>

                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div>
                            <div class="banner-content" style="padding: 1%">
                                <figure class="imgHolder">
                                    <img src="{{asset('frontend/images/e.jpg')}}" alt="image description"
                                        style="height: 226px; width:600px;">
                                    <figcaption class="captionWrap">
                                        <h2 class="fontNeuron text-capitalize">North Beach</h2>
                                        <div class="textwrap ">
                                            <address>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <p>13 Homes for You</p><br>
                                                <i class="fas fa-shopping-cart"></i>
                                                <p>Buy: $639k - $2.95m</p><br>
                                            </address>


                                            <a href="">
                                                <h6 class="" style="margit-left:20px; color:white">See Local Highlights
                                                </h6>
                                            </a>
                                        </div>

                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div>
                            <div class="banner-content" style="padding: 1%">
                                <figure class="imgHolder">
                                    <img src="{{asset('frontend/images/c.jpg')}}" alt="image description"
                                        style="height: 226px; width:600px;">
                                    <figcaption class="captionWrap">
                                        <h2 class="fontNeuron text-capitalize">Lower Haight</h2>
                                        <div class="textwrap ">
                                            <address>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <p>13 Homes for You</p><br>
                                                <i class="fas fa-shopping-cart"></i>
                                                <p>Buy: $639k - $2.95m</p><br>
                                            </address>


                                            <a href="">
                                                <h6 class="" style="margit-left:20px; color:white">See Local Highlights
                                                </h6>
                                            </a>
                                        </div>

                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <div>
                            <div class="banner-content" style="padding: 1%">
                                <figure class="imgHolder">
                                    <img src="{{asset('frontend/images/d.jpg')}}" alt="image description"
                                        style="height: 226px; width:600px;">
                                    <figcaption class="captionWrap">
                                        <h2 class="fontNeuron text-capitalize">Fairmount</h2>
                                        <div class="textwrap ">
                                            <address>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <p>13 Homes for You</p><br>
                                                <i class="fas fa-shopping-cart"></i>
                                                <p>Buy: $639k - $2.95m</p><br>
                                            </address>

                                            <a href="">
                                                <h6 class="" style="margit-left:20px; color:white">See Local Highlights
                                                </h6>
                                            </a>
                                        </div>

                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <div>
                            <div class="banner-content" style="padding: 1%">
                                <figure class="imgHolder">
                                    <img src="{{asset('frontend/images/d.jpg')}}" alt="image description"
                                        style="height: 226px; width:370px;">
                                    <figcaption class="captionWrap">
                                        <h2 class="fontNeuron text-capitalize">Portola</h2>
                                        <div class="textwrap ">
                                            <address>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <p>13 Homes for You</p><br>
                                                <i class="fas fa-shopping-cart"></i>
                                                <p>Buy: $639k - $2.95m</p><br>
                                            </address>


                                            <a href="">
                                                <h6 class="" style="margit-left:20px; color:white">See Local Highlights
                                                </h6>
                                            </a>
                                        </div>

                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- findFormBlock -->
                {{-- <p style="color:black">Neighborhood stats provided by third party data sources.</p>

                <h3 class="fontNeuron">San Francisco Guide</h3>
                <h6 class="">What kinds of homes are available in San Francisco?</h6>
                <hr class="solid"
                    style="color:black; border-top: 5px solid #80d6dd; width:70px; float: left; margin-top:-.2%">
                <p style="margin-top: 6%; color:black">In San Francisco, around one third of buildings are large
                    apartment buildings,
                    and the rest of the dwellings are mainly small apartment buildings, single detached homes, and
                    townhouses. This municipality also has a good variety of housing sizes - houses range from lofts to
                    four or more bedrooms. About 55% of the population of this municipality rent their home whereas
                    owners make up the remainder. Most of the housing growth in this municipality took place before the
                    1960s.</p>
                <h6 class="" style="margin-top: 5%">What are the schools, resturants and shopping like in San Francisco?
                </h6>
                <hr class="solid"
                    style="color:black; border-top: 5px solid #80d6dd; width:70px; float: left; margin-top:-.2%">
                <p style="margin-top: 6%; color:black">It is a reasonably short walk to get to primary as well as high
                    schools from
                    most houses for sale in this municipality. In addition to public schools, there are private
                    elementary and high schools. In terms of eating, a grocery store is typically accessible within a
                    short walk from most properties for sale in this municipality. Over 1200 groceries are situated
                    nearby, and the best selection can be found on streets such as Market Street. In addition, there are
                    over 3900 restaurants and over 1100 coffee shops to enjoy in this municipality.</p>

                <h6 class="" style="margin-top: 5%">What are the best ways to get around in San Francisco?
                </h6>
                <hr class="solid"
                    style="color:black; border-top: 5px solid #80d6dd; width:70px; float: left; margin-top:-.2%">
                <p style="margin-top: 6%; color:black">San Francisco will please property owners that use different
                    means of transportation. With various rapid transit stations on the Dublin/Pleasanton - Daly City
                    Line, Warm Springs/South Fremont - Daly City Line, Richmond - Daly City/Millbrae Line and Antioch -
                    SFIA/Millbrae Line, and over 200 nearby bus lines, the very good public transit infrastructure
                    allows people to get to many destinations without needing a car. Many of the houses for sale in this
                    municipality are located in places that are also very suitable for those who travel by foot; most
                    common errands can be run without needing to resort to a car, and a variety of businesses are close
                    by. Cycling is at times difficult in San Francisco since riding is made arduous by the often steep
                    terrain. Nevertheless, certain bike-friendly sectors exist, and San Francisco is home to a
                    reasonably good cycling infrastructure.</p>

                <h6 class="" style="margin-top: 5%">What's it like to live in San Francisco?
                </h6>
                <hr class="solid"
                    style="color:black; border-top: 5px solid #80d6dd; width:70px; float: left; margin-top:-.2%">
                <p style="margin-top: 6%; color:black">No matter what type of character home buyers prefer in a
                    municipality, San Francisco is a reasonably good option. This municipality has many areas to
                    explore. Even though there are few nearby entertainment venues, there are a large number of people
                    around most of the time, and finding one of the over 500 nightlife venues is very easy since they
                    are generally situated in very convenient locations. Most areas in San Francisco are quiet, as there
                    tend to be low levels of noise from traffic, although that is not the case near one of the railway
                    lines, Interstate 280 or Junipero Serra Freeway. This municipality also features a small amount of
                    greenery; more specifically, residents will find that the tree canopy coverage for most streets is
                    sub-par. Nonetheless, there are over 200 public green spaces nearby for residents to explore, such
                    as Glen Canyon Park and Candlestick Point State Recreation Area, which makes it very easy to access
                    them from most locations in this municipality.</p>

                <h6>
                    <img src="{{asset('frontend/images/h.jpeg')}}" alt="image description"
                style="height: 20px; width:100px;">
                </h6>
                <p style="color: black">IDX information is provided exclusively for personal, non-commercial use, and
                    may not be used for any
                    purpose other than to identify prospective properties consumers may be interested in purchasing.
                    Information is deemed reliable but not guaranteed.</p>

                <h6>
                    <img src="{{asset('frontend/images/h1.jpeg')}}" alt="image description"
                        style="height: 20px; width:50px;">
                </h6>
                <p style="color:black">Property Information © 2021 MLSListings Inc. All rights reserved. Certain
                    information contained herein is derived from information which is the licensed property of, and
                    copyrighted by, MLSListings Inc.></p>

                <h6>
                    <img src="{{asset('frontend/images/h3.jpeg')}}" alt="image description"
                        style="height: 20px; width:50px;">
                </h6>
                <p style="color: black">Bay East 2021. CCAR 2021. bridgeMLS 2021. Information Deemed Reliable But Not
                    Guaranteed. This information is being provided by the Bay East MLS, or CCAR MLS, or bridgeMLS. The
                    listings presented here may or may not be listed by the Broker/Agent operating this website. This
                    information is intended for the personal use of consumers and may not be used for any purpose other
                    than to identify prospective properties consumers may be interested in purchasing. Data last updated
                    at 2021-05-20 03:24:27 PDT.</p>
                <h6>
                    <img src="{{asset('frontend/images/h4.jpeg')}}" alt="image description"
                        style="height: 20px; width:150px;">
                </h6>
                <p style="color: black">Copyright 2021 globelgri. All rights reserved. Information is deemed reliable
                    but not guaranteed.</p>
                <div class="row" style="margin-top:6%">
                    <div class="col-md-3">
                        <h6 style="margin-left: 9%">Nearby Real Estate</h6>
                        <ul style="list-style-type:none;">
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h6 style="margin-left: 0%">San Francisco Neighborhoods</h6>
                        <ul style="list-style-type:none;">
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h6 style="margin-left: 0%">San Francisco Property Types</h6>
                        <ul style="list-style-type:none;">
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h6 style="margin-left: 0%">Real Estate and Mortgage Guides</h6>
                        <ul style="list-style-type:none;">
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                            <li>For Professionals</li>
                        </ul>
                    </div>
                </div>
                <p style="color: black; margin-top:6%;font-weight: bold;">Trulia is a registered Trademark of Zillow,
                    Inc. and MLS listings are provided by Zillow, Inc., a licensed real estate brokerage. See <a
                        href=""> here</a> for a list of our real estate licenses. <a href=""> Contact globelgri, Inc
                        Brokerage</a></p>
                <p style="color: black;margin-top:5%"> Trulia Corporate <i class="fa fa-circle"
                        style="font-size: 5px;"></i> About
                    Trulia <i class="fa fa-circle" style="font-size: 5px;"></i> About Zillow Group <i
                        class="fa fa-circle" style="font-size: 5px;"></i> Fair Housing
                    Guide <i class="fa fa-circle" style="font-size: 5px;"></i> Careers <i class="fa fa-circle"
                        style="font-size: 5px;"></i> Newsroom <i class="fa fa-circle" style="font-size: 5px;"></i>
                    Investor Relations <i class="fa fa-circle" style="font-size: 5px;"></i> Advertising <i
                        class="fa fa-circle" style="font-size: 5px;"></i> Terms <i class="fa fa-circle"
                        style="font-size: 5px;"></i> Privacy <i class="fa fa-circle" style="font-size: 5px;"></i> Terms
                    of Use <i class="fa fa-circle" style="font-size: 5px;"></i> Listings Quality
                    Policy <i class="fa fa-circle" style="font-size: 5px;"></i> Subscription Terms <i
                        class="fa fa-circle" style="font-size: 5px;"></i> Help <i class="fa fa-circle"
                        style="font-size: 5px;"></i> Privacy Portal <i class="fa fa-circle" style="font-size: 5px;"></i>
                    Cookie Preference <i class="fa fa-circle" style="font-size: 5px;"></i><br>
                    <a href=""> <b> Do Not Sell My Personal Information </b><i
                            class="fi flaticon-arrows readMoreIcn"></i></a>
                </p>
                <p style="color: black; margin-top:5%;">Zillow Group is committed to ensuring digital accessibility for
                    individuals with disabilities. We are continuously working to improve the accessibility of our web
                    experience for everyone, and we welcome feedback and accommodation requests. If you wish to report
                    an issue or seek an accommodation, please <a href=""> let us know</a>.</p>
                <p style="color: black; margin-top:5%;">copyright © 2021 globelgri. All rights reserved. <a href="">
                        Equal Housing Opportunity</a>. Have a Question? Visit our <a href=""> Help Center</a> to find
                    the answer.</p> --}}

            </div>

        </div>
</main>
@endsection



{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $('#status').bootstrapToggle({
            on: 'Map',
            off: 'Search',
            onstyle: 'info',
            offstyle: 'primary'
        });

        $('#status').change(function () {
            if ($(this).prop('checked')) {
                $('#form').show();
                $('#map').hide();

            } else {
                $('#map').show();
                $('#form').hide();
            }

        });

    });

</script> --}}
