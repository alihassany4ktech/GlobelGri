@extends('layouts.frontend.app')
@section('content')
<main>
    <!-- propertyIntroBlock -->
    <section class="propertyIntroBlock" >
 
        <div class="slick-fade slickSlider introSlider propertyIntroImageSlider"  >
            @if($data->gallery_photos)  
            @foreach(json_decode($data->gallery_photos, true) as $row)
       
            <div >
                <span class="bgCover elemenBlock introSlide" style="background-image: url({{asset('/gallery/'.$row)}});" ></span>
            </div>
           
            @endforeach
            @endif
            <div>
                 <span class="bgCover elemenBlock introSlide" style="background-image: url({{asset('frontend/images/d.jpg')}});" ></span>
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
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <h3>{{$data->propert_title}}</h3>
                            <p style="font-size:12px">San Francisco, CA 94112 <a href="" style="color: #bd7f0a"> Oceanview </a></p>
                            <p style="margin-top: 20px; font-size:11px"><i class="fa fa-bed" aria-hidden="true"></i> {{$data->bedroom}}
                                Bed <i class="fa fa-bath" aria-hidden="true"></i> {{$data->bathroom}} Baths <i
                                    class="fa fa-chart-area"></i>{{$data->area}} sqft</p>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <h3>Price</h3>
                            <p style="font-size:12px;">${{$data->price}}</p>
                            <a href="#" class="btn" style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:10px">{{$data->property_type}}</a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4" style=" margin-top:10px">
                           
                            <div class="map-area" style="height:200px;">
                                <div id="map-container">
                                    <div id="map_div">
                                        &nbsp;
                                    
                                    </div>
                                </div>
                            </div>
                            {{-- </figure> --}}
                        </div>

                      

                    </section>
                    <section id="Video" class="accountData aboutBlock overlaychange">
                        <div class="head">
                            <h4 class="fontNeuron">Featured Image</h4>
                        </div>
                        <div class="video-holder ">
                             @if ($data->featured_photo)
                            <img src="{{asset($data->featured_photo)}}" alt="image description"
                                class="img-responsive" style="height: 362px; width:645px;">
                                    @else
                                        <img src="{{asset('frontend/images/home01.jpeg')}}" style="height: 362px; width:687px;"
                                        alt="image description">
                                    @endif
                           
                        </div>
                    </section>
                    <section id="PageViews" class="Pageviews">
                        <div class="head">
                            <h4 class="fontNeuron">Description</h4>
                        </div>
                        <p class="" style="color:black">{{$data->description}}
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
                                <a class="nav-link active" data-toggle="tab" href="#home" style="color:#bd7f0a"><b>
                                        Schedule a Tour</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu1" style="color:#bd7f0a"><b>Request
                                        Info</b></a>
                            </li>
                        </ul>
                        
	                            <div class="hb-headarea" style="margin-top: 5%">
											<div class="holder">
												<figure class="hb-author-img pull-left">
                                                                              @if ($data->user->image)
                                                                                    <a href="#"><img src="{{asset($data->user->image)}}" style="height:75px;width:100px" alt="image description"></a>
                                                                              @else
													    <a href="#"><img src="https://via.placeholder.com/100x75" alt="image description"></a>
                                                                          @endif
												</figure>
												<div class="pull-left">
													<div class="hb-headcontent">
														<h3>{{$data->user->name}}</h3>
														<span>{{$data->user->address}}</span>
														<a href="mailto:&#105;&#110;&#102;&#111;&#064;&#104;&#111;&#109;&#101;&#115;&#119;&#101;&#101;&#116;&#046;&#099;&#111;&#109;">{{$data->user->email}}</a>
													</div>
												</div>
											</div>
											<div class="hb-numberbox text-center">
												<h3><i class="fi flaticon-24-hours"></i>{{$data->user->phone}}</h3>
											</div>
										</div>      
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
                                        style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Schedule a
                                        Tour</button>
                                    <h6 class="fontNeuron"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                        Public Health Advisory</h6>
                                    <p class="fontNeuron" style="font-size: 11px;">By pressing Schedule A Tour, you agree
                                        that Trulia and real estate professionals may contact you via phone/text about
                                        your inquiry, which may involve the use of automated means. You are not required
                                        to consent as a condition of purchasing any property, goods or services.
                                        Message/data rates may apply. You also agree to our <a href="" style="color: #bd7f0a"> Terms of Use</a>
                                        Trulia does not endorse any <a href="" style="color: #bd7f0a" > real estate professionals</a> </p>

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
                                        style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Request Info</button>
                                    <h6 class="fontNeuron"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                        Public Health Advisory</h6>
                                    <p class="fontNeuron" style="font-size: 11px">By pressing Schedule A Tour, you agree
                                        that Trulia and real estate professionals may contact you via phone/text about
                                        your inquiry, which may involve the use of automated means. You are not required
                                        to consent as a condition of purchasing any property, goods or services.
                                        Message/data rates may apply. You also agree to our <a href="" style="color: #bd7f0a"> Terms of Use</a>
                                        Trulia does not endorse any <a href="" style="color: #bd7f0a"> real estate professionals</a> </p>

                                </form>
                            </div>

                        </div>

                    </section>

                </aside>
            </div>
        </div>
    </div>
</main>
@endsection
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAziipzIN4zP3UtFIBC3-e6NcNfY2vIG48&callback=myMap">
    </script>
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
