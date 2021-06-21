@extends('layouts.frontend.app')
@section('content')
{{-- <link rel="stylesheet" href="frontend/css/style.css"> --}}
<style>
     @media only screen and (max-width: 600px) {
            #mp {
                margin-left: -25px !important;
                width:283px !important;
            }
     }

     .geodir_post_meta {
    text-indent: .25px;
    margin-top: 6px;
}
</style>
<main>
    <!-- propertyIntroBlock -->
    <section class="propertyIntroBlock" >
        <!-- propertyIntroImageSlider -->
        <div class="slick-fade slickSlider introSlider propertyIntroImageSlider">
            @if($mapShops->gallery_photos)
              @foreach(json_decode($mapShops->gallery_photos, true) as $row)
                <div >
                <span class="bgCover elemenBlock introSlide"
                    style="background-image: url({{asset('/gallery/'.$row)}});" ></span>
                </div>
                @endforeach
            @else
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
            @endif
          
        </div>
        <!-- rightPanelList -->
        <ul class="list-unstyled rightPanelList hidden-xs">
            <li>
                <a href="#" class="hasOver">
                    <span class="fi flaticon-photo icn" style=""></span>
                    <strong class="fwNormal textCaption"><span class="indentWrap elemenBlock">View
                            Photos</span></strong>
                </a>
            </li>
            <li>
                <a href="#" class="hasOver">
                    <span class="fi flaticon-placeholder icn" ></span>
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
                        <div class="col-xs-12 col-sm-12 col-md-4" style="">
                            <h3>{{$mapShops->propert_title}}</h3>
                            <p style="font-size:12px">{{$mapShops->address}} <a href="" style="color: #bd7f0a"> Oceanview </a></p>
                            <p style="margin-top: 20px; font-size:11px"><i class="fa fa-bed" aria-hidden="true"></i> {{$mapShops->bedroom}}
                                Bed <i class="fa fa-bath" aria-hidden="true"></i> {{$mapShops->bathroom}} Baths <i
                                    class="fa fa-chart-area"></i> {{$mapShops->area}} sqft</p>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4" style="">
                            <h3>Price</h3>
                            <p style="font-size:12px;">${{$mapShops->price}}</p>
                            <a href="#" class="btn" style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:10px">{{$mapShops->property_type}}</a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4" style=" margin-top:10px">
                            {{-- <figure class="hb-author-img"> --}}
                            {{-- <a href="#"><img src="https://via.placeholder.com/150x150" alt="image description"></a> --}}
                            <div class="map-area" id="mp" style="height:200px; margin-left: -95px;width: 324px;">
                                <div id="map-container">
                                    <div id="map-canvas" style="height: 525px; width: 100%; position: relative; overflow: hidden;">
                                </div>
                                </div>
                            </div>
                            {{-- </figure> --}}
                        </div>

                        {{-- <h1>Description</h1> --}}

                    </section>
                    <section id="featured" class="accountData aboutBlock overlaychange">
                        <div class="head">
                
                            <h4 class="fontNeuron">Featured Image</h4>
                        </div>
                        <div class="video-holder">
                            
                            @if ($mapShops->featured_photo)
                            <img src="{{asset($mapShops->featured_photo)}}" alt="image description"
                                class="img-responsive" style="height: 362px; width:645px;">
                                    @else
                                        <img src="{{asset('frontend/images/home01.jpeg')}}" style="height: 362px; width:687px;"
                                        alt="image description">
                                    @endif
                        </div>
                    </section>
                    <section id="PageViews" class="Pageviews">
                        <div class="head" style="margin-left: 0px">
                            <h4 class="fontNeuron">Description</h4>
                        </div>
                        <p class="" style="margin-left: 0px; color:black">{{$mapShops->description}}
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
                                                  
													    <a href="#"><img src="{{asset($mapShops->user->image)}}" style="height:75px; width:100px" alt="image description"></a>
                                                    
												</figure>
												<div class="pull-left">
													<div class="hb-headcontent">
														<h3>{{$mapShops->user->name}}</h3>
														<span>{{$mapShops->user->address}}</span>
														<a href="mailto:&#105;&#110;&#102;&#111;&#064;&#104;&#111;&#109;&#101;&#115;&#119;&#101;&#101;&#116;&#046;&#099;&#111;&#109;">{{$mapShops->user->email}}</a>
													</div>
												</div>
											</div>
											<div class="hb-numberbox text-center">
												<h3><i class="fi flaticon-24-hours"></i>{{$mapShops->user->phone}}</h3>
											</div>
										</div>      
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                <h4 style="margin-top: 30px">Tour Type <i class="fa fa-question-circle"
                                        aria-hidden="true"></i></h4>
                                <form  id="contact_form">
                                    @csrf
                                    <input type="hidden" name="owner_id" value="{{$mapShops->user->id}}">
                                    <input type="hidden" name="property_id" value="{{$mapShops->id}}">
                                    <input type="hidden" name="type" value="Tour">
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
                                                <input type="time" name="time" class="form-control">
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
                                    <button type="submit" class="btn  fontNeuron buttonXL"
                                        style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Schedule a
                                        Tour</button>                                
                                </form>
                                <h6 class="fontNeuron"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                        Public Health Advisory</h6>
                                    <p class="fontNeuron" style="font-size: 11px">By pressing Schedule A Tour, you agree
                                        that Trulia and real estate professionals may contact you via phone/text about
                                        your inquiry, which may involve the use of automated means. You are not required
                                        to consent as a condition of purchasing any property, goods or services.
                                        Message/data rates may apply. You also agree to our <a href="" style="color: #bd7f0a"> Terms of Use</a>
                                        Trulia does not endorse any <a href="" style="color: #bd7f0a"> real estate professionals</a> </p>
                            </div>
                            <div class="tab-pane" id="menu1">
                                <form class="widgetCalcForm" id="contact_form_info">
                                    @csrf
                                    <input type="hidden" name="owner_id" value="{{$mapShops->user->id}}">
                                    <input type="hidden" name="property_id" value="{{$mapShops->id}}">
                                    <input type="hidden" name="type" value="Info">
                                    <div class="row" style="margin-top: 30px">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <input type="text" name="phone" placeholder="Phone" class="form-control"
                                                    
                                                >
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="" class="fwNormal ">Message</label>
                                                <textarea name="message" id="" cols="10" rows="1" class="form-control"
                                                    
                                                >I am interested in 828 Niagara Ave, San Francisco, CA 94112</textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Email"
                                                    class="form-control" 
                                                    >
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
                                    <button type="submit" class="btn fontNeuron buttonXL"
                                        style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Request Info</button>
                                    

                                </form>
                                <h6 class="fontNeuron"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                        Public Health Advisory</h6>
                                    <p class="fontNeuron" style="font-size: 11px">By pressing Schedule A Tour, you agree
                                        that Trulia and real estate professionals may contact you via phone/text about
                                        your inquiry, which may involve the use of automated means. You are not required
                                        to consent as a condition of purchasing any property, goods or services.
                                        Message/data rates may apply. You also agree to our <a href="" style="color: #bd7f0a"> Terms of Use</a>
                                        Trulia does not endorse any <a href="" style="color: #bd7f0a"> real estate professionals</a> </p>
                            </div>

                        </div>
                        <input type="hidden" name="" value="{{$mapShops->latitude}}" id="lt">
                        <input type="hidden" name="" value="{{$mapShops->longitude}}" id="lng">

                    </section>

                </aside>
            </div>

            {{-- <div class="col-xs-12 col-sm-12 col-md-12 bgWhite" style="margin-left: 5%; width:1096px;">

                <div class="head">
                    <h4 class="fontNeuron">Floor Plans</h4>

                </div>

            </div> --}}
        </div>
    </div>
</main>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script type='text/javascript' src='https://maps.google.com/maps/api/js?language=en&key=AIzaSyDxL17Fyl5fOmZ13z3xDVdxBAOEF6ZwKKc'></script>
<script defer>
    $(document).ready(function(){
    var lt = $('#lt').val();
    var lng = $('#lng').val();
    var mainurl = "{{url('/')}}";
    function initialize() {
        var mapOptions = {
            zoom: 6,
            // minZoom: 6,
            maxZoom: 15,
            zoomControl:true,
            zoomControlOptions: {
                style:google.maps.ZoomControlStyle.DEFAULT
            },
            center: new google.maps.LatLng(lt,lng),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: true,
            panControl:false,
            mapTypeControl:false,
            scaleControl:false,
            overviewMapControl:false,
            rotateControl:false
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var image = new google.maps.MarkerImage("assets/images/pin.png", null, null, null, new google.maps.Size(40,52));
        var place = @json($mapShops);
            if(place.latitude && place.longitude)
            {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon:image,
                    map: map,
                    title: place.name
                });
                // var infowindow = new google.maps.InfoWindow();
                // google.maps.event.addListener(marker, 'click', (function (marker, place) {
                //     return function () {
                //         // infowindow.setContent(generateContent(place))
                //         infowindow.open(map, marker);
                //     }
                // })(marker, place));
            }
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    // function generateContent(place)
    // {
    //     var content = `
    //         <div class="gd-bubble" style="">
    //             <div class="gd-bubble-inside">
    //                 <div class="geodir-bubble_desc">
    //                 <div class="geodir-bubble_image">
    //                     <div class="geodir-post-slider">
    //                         <div class="geodir-image-container geodir-image-sizes-medium_large ">
    //                             <div id="geodir_images_5de53f2a45254_189" class="geodir-image-wrapper" data-controlnav="1">
    //                                 <ul class="geodir-post-image geodir-images clearfix">
    //                                     <li>
    //                                         <div class="geodir-post-title">
    //                                             <h4 class="geodir-entry-title">
    //                                                 <a href="">`+place.propert_title+`</a>
    //                                             </h4>
    //                                         </div>
    //                                         <a href=""><img src="`+mainurl+`/`+place.featured_photo+`" alt="`+place.featured_photo+`" class="align size-medium_large" width="1400" height="900"></a>
    //                                     </li>
    //                                 </ul>
    //                             </div>
    //                         </div>
    //                     </div>
    //                 </div>
    //                 </div>
    //             </div>
    //             <div class="geodir-bubble-meta-side">
    //                 <div class="geodir-output-location">
    //                 <div class="geodir-output-location geodir-output-location-mapbubble">
    //                     <div class="geodir_post_meta  geodir-field-post_title"><span class="geodir_post_meta_icon geodir-i-text">
    //                         <i class="fas fa-minus" aria-hidden="true"></i>
    //                         <span class="geodir_post_meta_title">Property Type: </span></span>`+place.property_type+`</div>
    //                     <div class="geodir_post_meta  geodir-field-address" itemscope="" itemtype="http://schema.org/PostalAddress">
    //                         <span class="geodir_post_meta_icon geodir-i-address"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
    //                         <span class="geodir_post_meta_title">Address: </span></span><span itemprop="streetAddress">`+place.address+`</span>
    //                     </div>
    //                 </div>
    //                 </div>
    //             </div>
    //         </div>
    //         </div>
    //         </div>`;

    //     return content;

    // }
    });
</script>
 <script>

      $(document).ready(function(){
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
           // Contact Add
         $('#contact_form').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            console.log(formData);
            $.ajax({

                url: '{{route("contact.store")}}',
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

     <script>

      $(document).ready(function(){
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
      $('#contact_form_info').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            console.log(formData);
            $.ajax({

                url: '{{route("contact.info.store")}}',
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
{{-- <script>
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

</script> --}}
