@extends('layouts.frontend.app')
@section('content')
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
                            class="btn  buttonSmall text-uppercase fontNeuron hidden-xs headerModalOpener"
                            style="border:none;background-color: #f1c967;background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);background: linear-gradient(to right, #bd7f0a, #f1c967);">SEARCH</a>
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
                        style="background-color: #f1c967;background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">SEARCH</button>
                </div>
            </div>
        </div>
    </form>
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
                                
                            </ul>
                        </div>
                    </header>
                    <!-- isoContentHolder -->
                    <?php
                    $property_for_investment = App\Property::where('property_type' , '=', 'For Investment')->get();
                    $total_for_investment = count($property_for_investment);
                    ?>
                    <div class="isoContentHolder">
                        <div class="row">
                            @foreach ($property_for_investment as $row)
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <!-- postColumn -->
                                <article class="postColumn hasOver bgWhite">
                                    <div class="aligncenter">
                                        <!-- postColumnImageSlider -->
                                        <div class="slick-carousel slickSlider postColumnImageSlider">
                                            @if($row->gallery_photos)
                                            @foreach(json_decode($row->gallery_photos, true) as $row1)
                                            <div>
                                                <a href="{{route('single_property',['id' => $row->id])}}">
                                                    <div class="imgHolder">
                                                        <img src="{{asset('/gallery/'.$row1)}}"
                                                            style="height: 260px; width:370px;" alt="image description">
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                            @else
                                            <div>
                                                <a href="{{route('single_property',['id' => $row->id])}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/p1.jpg')}}"
                                                            alt="image description" style="height: 260px; width:370px;">

                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{route('single_property',['id' => $row->id])}}">
                                                    <div class="imgHolder">

                                                        <img src="{{asset('frontend/images/p1.jpg')}}"
                                                            alt="image description" style="height: 260px; width:370px;">

                                                    </div>
                                                </a>
                                            </div>
                                            @endif
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
                                    <h2 class="fontNeuron text-capitalize"><a href="{{route('single_property',['id' => $row->id])}}">{{$row->propert_title}}</a></h2>
                                    <address>
                                        <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                        <p>The Village, Jersey City, NJ 07302, USA </p>
                                    </address>
                                    <span class="btn btnSmall  text-capitalize"
                                        style="border:none;background-color: #f1c967;background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">{{$row->property_type}}</span>
                                    <h3 class="fontNeuron fwSemi"><span class="textSecondary">$ {{$row->price}}</span> <span
                                            class="textUnit fwNormal"></span></h3>
                                    <!-- postColumnFoot -->
                                    <a href="{{route('single_property',['id' => $row->id])}}">
                                        <footer class="postColumnFoot">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Area</strong>
                                                    <strong class="fwNormal elemenBlock" style="color:#bd7f0a">{{$row->area}} m2</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Beds</strong>
                                                    <strong class="fwNormal elemenBlock" style="color:#bd7f0a">{{$row->bedroom}}</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Baths</strong>
                                                    <strong class="fwNormal elemenBlock" style="color:#bd7f0a">{{$row->bathroom}}</strong>
                                                </li>
                                                <li>
                                                    <strong class="fwNormal elemenBlock text-primary">Garages</strong>
                                                    <strong class="fwNormal elemenBlock" style="color:#bd7f0a">{{$row->garages}}</strong>
                                                </li>
                                            </ul>
                                        </footer>
                                    </a>
                                </article>
                             

                            </div>
                            @endforeach
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
                
                <p style="text-align: center"><a href="" style="color: #bd7f0a"> United States </a> <i class="fa fa-angle-right"></i> <a
                        href="" style="color: #bd7f0a"> California </a><i class="fa fa-angle-right"></i> San Francisco</p>
                <h3 class="fontNeuron">San Francisco, CA Real Estate Trends</h3>
                <p style="color: black">Learn about the San Francisco, CA housing market through trends and averages.
                </p>
                <h3 class="fontNeuron">See Homes in Neighborhoods Near San Francisco, CA</h3>
                <!-- introBanner -->
                <section class="threeBanner">
                    <!-- bannerImageSlideshow -->
                    {{-- {{dd($property)}} --}}
                    <div class="banner-slider slickSlider">
                        @foreach($property_for_investment as $row)
                        <div>
                            <div class="banner-content" style="padding: 1%">
                                <figure class="imgHolder">
                                    @if ($row->featured_photo)
                                        <img src="{{asset($row->featured_photo)}}" style="height: 462px; width:489px;"
                                        alt="image description">
                                    @else
                                        <img src="{{asset('frontend/images/p1.jpg')}}" style="height: 462px; width:489px;"
                                        alt="image description">
                                    @endif
                                    
                                    <figcaption class="captionWrap">
                                        <h2 class="fontNeuron text-capitalize">{{$row->propert_title}}</h2>
                                        <div class="textwrap ">
                                            <address>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <p>{{$total_for_investment}} total homes available</p>
                                            </address>

                                            <button type="button"
                                                style="border:none;margin-left:10%; margin-top:10%;background-color: #f1c967;background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);background: linear-gradient(to right, #bd7f0a, #f1c967); color:white"
                                                class="btn">See home {{$row->property_type}}</button>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
                <!-- findFormBlock -->
                <h3 class="fontNeuron">Explore Neighborhoods in San Francisco, CA</h3>
                <!-- introBanner -->
                <section class="threeBanner" style="margin-bottom: 3%">
                    <!-- bannerImageSlideshow -->
                    <div class="banner-slider slickSlider">
                          @foreach($property_for_investment as $row)
                        <div>
                            <div class="banner-content" style="padding: 1%">
                                <figure class="imgHolder">
                                    @if($row->featured_photo)
                                    <img src="{{asset($row->featured_photo)}}" alt="image description"
                                        style="height: 226px; width:600px;">
                                    @else
                                    <img src="{{asset('frontend/images/d.jpg')}}" alt="image description"
                                        style="height: 226px; width:600px;">
                                    @endif
                                    
                                    <figcaption class="captionWrap">
                                        <h2 class="fontNeuron text-capitalize">{{$row->property_title}}</h2>
                                        <div class="textwrap ">
                                            <address>
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <p>{{$total_for_investment}} Homes for You</p><br>
                                                <i class="fas fa-shopping-cart"></i>
                                                <p>$ {{$row->price}}</p><br>
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
                        @endforeach
                    </div>

                </section>
            </div>

        </div>
</main>
@endsection

