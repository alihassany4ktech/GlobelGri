@extends('layouts.frontend.app')
@section('content')
<!-- main -->
<main>
    <!-- findFormBlock -->
    <form action="#" class="findFormBlock findFormBlock2 bgLightDark hasShadowTop offsetHeaderTop">
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
                    <button type="button" class="btn btnDark text-uppercase fontNeuron">SEARCH</button>
                </div>
            </div>
        </div>
    </form>
    <!-- twoColumns -->
    <section class="twoColumns container">
        <!-- contentFiltersHeadingWrap -->
        <header class="contentFiltersHeadingWrap row">
            <div class="col-xs-12 col-sm-10">

                <h1 class="fontNeuron">Blog Single</h1>
            </div>
            <div class="col-xs-12 col-sm-2">
                <!-- viewFilterLinks -->
                <ul class="list-unstyled viewFilterLinks">
                    <li><a href="#"><i class="fi flaticon-share"></i></a></li>
                    <li><a href="#"><i class="fi flaticon-printer"></i></a></li>
                </ul>
            </div>
        </header>
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <!-- content -->
                <div id="content">
                    <div class="post-detail">
                        <!-- newsPostColumn -->
                        <article class="accountData newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
                            <div class="aligncenter">
                                <img src="{{asset('frontend/images/3.jpg')}}" style="height:400px"
                                    alt="image description">
                            </div>
                            <h2 class="fontNeuron">Getting Started Designing Apps for the Apple Watch</h2>
                            <p>
                                <a href="#" class="btn btnSmall" style="background-color: #8b5925; color:white">Ali
                                    Tufan</a>
                                <time datetime="2011-01-12">February 9, 2017</time>
                                <a href="#" class="commentsCount">12 comment</a>
                            </p>
                            <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis
                                lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi
                                varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit
                                risus at metus. Sed fermentum, lorem vitae efficitur imperdiet, neque velit tristique
                                turpis, et iaculis mi tortor finibus turpis.</p>
                            <p>Donec luctus lacinia sem potenti aptent est platea, orci tortor dui fringilla curae
                                varius tempor, rhoncus commodo sapien auctor himenaeos laoreet maecenas tempor venenatis
                                accumsan lacinia congue dolor laoreet, ut nostra nulla nunc aptent dolor quisque, lorem
                                sociosqu nunc convallis curabitur faucibus.</p>
                            <p>Ornare sagittis ante erat nec ultricies amet aenean netus sodales at, amet vehicula quis
                                vel platea mattis vel felis hendrerit ad, at rhoncus tortor habitasse venenatis etiam
                                senectus erat sit varius proin ligula lectus mi accumsan curabitur orci varius justo nec
                                elit.</p>
                            <blockquote>
                                <q>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis
                                    lectus. sit amet rutrum elementum, est elit tristique turpis, et iaculis mi tortor
                                    finibus turpis.</q>
                            </blockquote>
                            <h2 class="fontNeuron">Phasellus posuere felis sed eros porttitor mattis</h2>
                            <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis
                                lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi
                                varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit
                                risus at metus. Sed fermentum, lorem vitae efficitur imperdiet, neque velit tristique
                                turpis, et iaculis mi tortor finibus turpis.</p>
                        </article>
                        <div class="accountData tags bgWhite">
                            <h3 class="fontNeuron fwBold text-capitalize">Tags</h3>
                            <ul class="list-unstyled widgetTaglist">
                                <li><a href="#">Apartment</a></li>
                                <li><a href="#">Luxury </a></li>
                                <li><a href="#">Real Estate</a></li>
                                <li><a href="#">LemanHouse</a></li>
                                <li><a href="#">For Rent</a></li>
                            </ul>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <!-- sidebar -->
                <aside id="sidebar">
                    <!-- widgetCalc -->
                    <section class="widget widgetPadding widgetCalc bgWhite">
                        <!-- widgetCalcForm -->
                        <form action="#" class="widgetSearchForm">
                            <div class="form-group">
                                <input type="text" class="form-control elemenBlock" placeholder="Search">
                                <button type="submit"
                                    class="elemenBlock btn btnSecondary fontNeuron text-uppercase bdr-none"><i
                                        class="fi flaticon-search"></i></button>
                            </div>
                        </form>
                    </section>
                    <section class="widget widgetPadding widgetCalc bgWhite">
                        <h3 class="fontNeuron fwBold text-capitalize">Categories</h3>
                        <ul class="list-unstyled widgetCategoryList">
                            <li><a href="#">2016 Trend</a></li>
                            <li><a href="#">Creative Design</a></li>
                            <li><a href="#">Home Decor</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Modern Style</a></li>
                        </ul>
                    </section>
                    <!-- widgetRecentPosts -->
                    <section class="widget widgetPadding widgetRecentPosts bgWhite">
                        <h3 class="fontNeuron fwBold text-capitalize">Recent Post</h3>
                        <!-- widgetRecentPostsList -->
                        <ul class="list-unstyled widgetRecentPostsList padlReset">
                            <li>
                                <div class="alignleft">
                                    <a href="#"><img src="{{asset('frontend/images/p1.jpg')}}"
                                            style="height:80;width:110px" alt="image description"></a>
                                </div>
                                <div class="descrWrap">
                                    <h4 class="fontNeuron fwBold"><a href="#">Villa on Hollywood</a></h4>
                                    <p>February 9, 2017</p>
                                </div>
                            </li>
                            <li>
                                <div class="alignleft">
                                    <a href="#"><img src="{{asset('frontend/images/home01.jpeg')}}"
                                            style="height:80;width:110px" alt="image description"></a>
                                </div>
                                <div class="descrWrap">
                                    <h4 class="fontNeuron fwBold"><a href="#">4 Bedroom New House</a></h4>
                                    <p>February 9, 2017</p>
                                </div>
                            </li>
                            <li>
                                <div class="alignleft">
                                    <a href="#"><img src="{{asset('frontend/images/4.jpg')}}"
                                            style="height:80;width:110px" alt="image description"></a>
                                </div>
                                <div class="descrWrap">
                                    <h4 class="fontNeuron fwBold"><a href="#">Eagle Apartments</a></h4>
                                    <p>February 9, 2017</p>
                                </div>
                            </li>
                        </ul>
                    </section>
                    <section class="widget widgetPadding widgetCalc bgWhite">
                        <h3 class="fontNeuron fwBold text-capitalize">Our Photos</h3>
                        <ul class="list-unstyled widgetInstaList">
                            <li><a href="#"><img src="{{asset('frontend/images/p1.jpg')}}"
                                        style="width: 90px;  height:70px" class="img-responsive"
                                        alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/p2.jpg')}}"
                                        style="width: 90px;  height:70px" class="img-responsive"
                                        alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/p3.jpg')}}"
                                        style="width: 90px;  height:70px" class="img-responsive"
                                        alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/p4.jpg')}}"
                                        style="width: 90px;  height:70px " class="img-responsive"
                                        alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/p5.jpg')}}"
                                        style="width: 90px;  height:70px" class="img-responsive"
                                        alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/home0.jpg')}}"
                                        style="width: 90px;  height:70px" class="img-responsive"
                                        alt="image description"></a></li>
                        </ul>
                    </section>
                    <section class="widget widgetPadding widgetCalc bgWhite">
                        <h3 class="fontNeuron fwBold text-capitalize">Tags</h3>
                        <ul class="list-unstyled widgetTaglist">
                            <li><a href="#">Apartment</a></li>
                            <li><a href="#">Luxury </a></li>
                            <li><a href="#">Real Estate</a></li>
                            <li><a href="#">LemanHouse</a></li>
                            <li><a href="#">For Rent</a></li>
                        </ul>
                    </section>
                </aside>
            </div>
        </div>
    </section>

</main>
@endsection
