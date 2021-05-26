@extends('layouts.frontend.app')
@section('content')
<main>
    <!-- propertyIntroBlock -->
    <section class="propertyIntroBlock" >
        <!-- propertyIntroImageSlider -->
        <div class="slick-fade slickSlider introSlider propertyIntroImageSlider"  >
            <div >
                <span class="bgCover elemenBlock introSlide"
                    style="background-image: url({{asset('frontend/images/d.jpg')}});" ></span>
            </div>
            <div>
                <span class="bgCover elemenBlock introSlide"
                    style="background-image: url({{asset('frontend/images/2.jpg')}});"></span>
            </div>
            <div>
                <span class="bgCover elemenBlock introSlide"
                    style="background-image: url({{asset('frontend/images/3.jpg')}});"></span>
            </div>
        </div>
        <!-- rightPanelList -->
        <ul class="list-unstyled rightPanelList hidden-xs">
            <li>
                <a href="#" class="hasOver">
                    <span class="fi flaticon-photo icn"></span>
                    <strong class="fwNormal textCaption"><span class="indentWrap elemenBlock">View
                            Photos</span></strong>
                </a>
            </li>
            <li>
                <a href="#" class="hasOver">
                    <span class="fi flaticon-placeholder icn"></span>
                    <strong class="fwNormal textCaption"><span class="indentWrap elemenBlock">Map View</span></strong>
                </a>
            </li>
            <li>
                <a href="#" class="hasOver">
                    <span class="fi flaticon-street-view icn"></span>
                    <strong class="fwNormal textCaption"><span class="indentWrap elemenBlock">Street
                            View</span></strong>
                </a>
            </li>
            <li>
                <a href="#" class="hasOver">
                    <span class="fi flaticon-360-degrees icn"></span>
                    <strong class="fwNormal textCaption"><span class="indentWrap elemenBlock">360 Virtual
                            Tour</span></strong>
                </a>
            </li>
        </ul>
    </section>

    <div class="twoColumns indentTop container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8">
                <!-- content -->
                <article id="content">
                    <!-- boxPanelBlock -->
                    <section id="Detail" class="accountData" style="background-color: #f0f9fb">
                        <div class="col-xs-12 col-sm-12 col-md-4" style="text-align: right;">
                            <h3>828 Niagara Ave</h3>
                            <p style="font-size:12px">San Francisco, CA 94112 <a href=""> Oceanview </a></p>
                            <p style="margin-top: 20px; font-size:11px"><i class="fa fa-bed" aria-hidden="true"></i> 3
                                Bed <i class="fa fa-bath" aria-hidden="true"></i> 2 Baths <i
                                    class="fa fa-chart-area"></i> 1,455 sqft</p>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4" style="text-align: right;">
                            <h3>$759,000</h3>
                            <p style="font-size:12px;">Est. Mortgage $3,013/mo*</p>
                            <a href="#" class="btn" style="background-color: #8b5925; color:white">Get Pre-Qualified</a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4" style="text-align: right; margin-top:10px">
                            {{-- <figure class="hb-author-img"> --}}
                            {{-- <a href="#"><img src="https://via.placeholder.com/150x150" alt="image description"></a> --}}
                            <div class="map-area" style="height:200px;">
                                <div id="map-container">
                                    <div id="map_div">
                                        &nbsp;

                                    </div>
                                </div>
                            </div>
                            {{-- </figure> --}}
                        </div>

                        {{-- <h1>Description</h1> --}}

                    </section>
                    <section id="Video" class="accountData aboutBlock overlaychange" style="margin-left:6% ">
                        <div class="head">
                            <h4 class="fontNeuron">Property Video</h4>
                        </div>
                        <div class="video-holder overlay">
                            <img src="https://via.placeholder.com/700x315" alt="image description"
                                class="img-responsive">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" data-fancybox="true"
                                class="video-play"><i class="fi flaticon-play-button"></i></a>
                        </div>
                    </section>
                    <section id="PageViews" class="Pageviews">
                        <div class="head" style="margin-left: 45px">
                            <h4 class="fontNeuron">Description</h4>
                        </div>
                        <p class="" style="margin-left: 45px; color:black">Fantastic opportunity in prime Ingleside
                            location. Well preserved 1925 view home a short
                            stroll from Ocean Ave. commercial corridor. Walk to Whole Foods, BART and MUNI trains. Main
                            level includes a spacious living room with fireplace, formal dining room, large eat-in
                            kitchen and two generous bedrooms w/ expansive panoramic views of the East bay. Hardwood
                            floors and many original details through-out. Bonus room and bath down make for easy
                            expansion potential. Large rear deck and level yard. Easy access to the 101 & 280 freeways.
                        </p>
                    </section>


                </article>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <aside id="sidebar">
                    <!-- contactFormPage -->
                    <section class="contactFormPage widget">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" style="color:#8b5925"><b>
                                        Schedule a Tour</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu1" style="color:#8b5925"><b>Request
                                        Info</b></a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                <h4 style="margin-top: 30px">Tour Type <i class="fa fa-question-circle"
                                        aria-hidden="true"></i></h4>
                                <form class="widgetCalcForm">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <label for="" class="fwNormal ">Choose a Date</label>
                                            <div class="form-group">
                                                <input type="date" name="date" placeholder="Your Name"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <label for="" class="fwNormal ">Choose a time</label>
                                            <div class="form-group">
                                                <input type="time" name="time" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <input type="text" name="phone" placeholder="Phone" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Email"
                                                    class="form-control" required>
                                                <p style="font-size: 12px; color:red; margin-top:5px"><i
                                                        class="fas fa-exclamation-circle"></i> Enter a valid email.</p>
                                            </div>

                                        </div>

                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <input type="checkbox" name="check"> I want to talk about financing
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btnDark fontNeuron buttonXL"
                                        style="background-color: #8b5925; color:white">Schedule a
                                        Tour</button>
                                    <h6 class="fontNeuron"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                        Public Health Advisory</h6>
                                    <p class="fontNeuron" style="font-size: 11px">By pressing Schedule A Tour, you agree
                                        that Trulia and real estate professionals may contact you via phone/text about
                                        your inquiry, which may involve the use of automated means. You are not required
                                        to consent as a condition of purchasing any property, goods or services.
                                        Message/data rates may apply. You also agree to our <a href=""> Terms of Use</a>
                                        Trulia does not endorse any <a href=""> real estate professionals</a> </p>

                                </form>
                            </div>
                            <div class="tab-pane" id="menu1">
                                <form class="widgetCalcForm">
                                    <div class="row" style="margin-top: 30px">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <input type="text" name="phone" placeholder="Phone" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="" class="fwNormal ">Message</label>
                                                <textarea name="" id="" cols="10" rows="1" class="form-control"
                                                    required>I am interested in 828 Niagara Ave, San Francisco, CA 94112</textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Email"
                                                    class="form-control" required>
                                                <p style="font-size: 12px; color:red; margin-top:5px"><i
                                                        class="fas fa-exclamation-circle"></i> Enter a valid email.</p>
                                            </div>

                                        </div>

                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <input type="checkbox" name="check"> I want to talk about financing
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btnDark fontNeuron buttonXL"
                                        style="background-color: #8b5925; color:white">Request Info</button>
                                    <h6 class="fontNeuron"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                        Public Health Advisory</h6>
                                    <p class="fontNeuron" style="font-size: 11px">By pressing Schedule A Tour, you agree
                                        that Trulia and real estate professionals may contact you via phone/text about
                                        your inquiry, which may involve the use of automated means. You are not required
                                        to consent as a condition of purchasing any property, goods or services.
                                        Message/data rates may apply. You also agree to our <a href=""> Terms of Use</a>
                                        Trulia does not endorse any <a href=""> real estate professionals</a> </p>

                                </form>
                            </div>

                        </div>

                    </section>

                </aside>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 bgWhite" style="margin-left: 5%; width:1096px;">

                <div class="head">
                    <h4 class="fontNeuron">Floor Plans</h4>

                </div>

            </div>
        </div>
    </div>
</main>
@endsection

<script>
    $(document).ready(function () {
        // Select all tabs
        $('.nav-tabs a').click(function () {
            $(this).tab('show');
        })

        // Select tab by name
        $('.nav-tabs a[href="#home"]').tab('show')

        // Select first tab
        $('.nav-tabs a:first').tab('show')

        // Select last tab
        $('.nav-tabs a:last').tab('show')

        // Select fourth tab (zero-based)
        $('.nav-tabs li:eq(3) a').tab('show')
    });

</script>
