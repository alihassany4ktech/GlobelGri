@extends('layouts.frontend.app')
@section('content')
{{-- <link rel="stylesheet" href="frontend/css/style.css"> --}}
<style>

          @media only screen and (max-width: 600px) {
          .modal-content {
        background-color: #fefefe;
        margin: 48px;
        padding: 29px;
        border: 1px solid #888;
        width: 85%;
    }
          }


    #map,
    #pano {
        float: left;
        height: 100%;
        width: 50%;
    }

    @media only screen and (max-width: 600px) {
        #mp {
            margin-left: -25px !important;
            width: 283px !important;
        }
    }

    .geodir_post_meta {
        text-indent: .25px;
        margin-top: 6px;
    }

    /* .popupColsHolder .form-control{
    max-width: 200px !important;
} */


    .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #bd7f0a;
  text-decoration: none;
  cursor: pointer;
}

</style>
<main>
    <!-- propertyIntroBlock -->
    <section class="propertyIntroBlock">
        <!-- propertyIntroImageSlider -->
        <div class="slick-fade slickSlider introSlider propertyIntroImageSlider">
            @if($mapShops->gallery_photos)
            @foreach(json_decode($mapShops->gallery_photos, true) as $row)
            <div>
                <span class="bgCover elemenBlock introSlide"
                    style="background-image: url({{asset('/gallery/'.$row)}});"></span>
            </div>
            @endforeach
            @else
            <div>
                <span class="bgCover elemenBlock introSlide"
                    style="background-image: url({{asset('frontend/images/d.jpg')}});"></span>
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
                        <div class="col-xs-12 col-sm-12 col-md-4" style="">
                            <h3>{{$mapShops->propert_title}}</h3>
                            <p style="font-size:12px">{{$mapShops->address}} <a href="" style="color: #bd7f0a">
                                    Oceanview </a></p>
                            <p style="margin-top: 20px; font-size:11px"><i class="fa fa-bed" aria-hidden="true"></i>
                                {{$mapShops->bedroom}}
                                Bed <i class="fa fa-bath" aria-hidden="true"></i> {{$mapShops->bathroom}} Baths <i
                                    class="fa fa-chart-area"></i> {{$mapShops->area}} sqft</p>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4" style="">
                            @if ($mapShops->property_type == 'For Investment')
                            <h3>Type</h3>
                            <a href="#" class="btn"
                                style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:10px">{{$mapShops->property_type}}</a>

                            @else
                            <h3>Price</h3>
                            <p style="font-size:12px;">${{$mapShops->price}}</p>
                            <a href="#" class="btn"
                                style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:10px">{{$mapShops->property_type}}</a>
                            @endif

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4" style=" margin-top:10px">
                            {{-- <figure class="hb-author-img"> --}}
                            {{-- <a href="#"><img src="https://via.placeholder.com/150x150" alt="image description"></a> --}}
                            <div class="map-area" id="mp" style="height:200px; margin-left: -95px;width: 324px;">
                                <div id="map-container">
                                    <div id="map-canvas"
                                        style="height: 525px; width: 100%; position: relative; overflow: hidden;">
                                    </div>
                                </div>
                            </div>
                            {{-- </figure> --}}
                        </div>

                        {{-- <h1>Description</h1> --}}

                    </section>
                    @if($mapShops->property_type == 'For Investment')
                    <?php
                        $units = App\Unit::where('property_id','=',$mapShops->id)->where('current','=','1')->get(); 
                        $total_unit = count($units);
                    ?>
                   
                        <section>
                        <table class="table table table-bordered table-striped ptable" id="ptable"
                            style="font-size: 13px;  text-align: center;">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align: center;">#</th>
                                    <th scope="col" style="text-align: center;">Unit Name</th>
                                    <th scope="col" style="text-align: center;">Unit Price</th>
                                    <th scope="col" style="text-align: center;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($units as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->unit_name}}</td>
                                    <td>$ {{$row->unit_price}}</td>
                                    @if ($row->status == '0' || $row->status == '2')
                                     @if (Auth::check())
                                    <td><button  onclick="getProperty(this)" id="{{$row->id}}" style="border:none ;background: #f1c967; padding-left: 17px; padding-right: 17px;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">Available</button></td>
                                    @else 
                                    <td><span class="status fontNeuron" style="border:none ;padding:7px;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);"><a href="#popup1" class="lightbox btn btn-sm" type="button" style="color: white; font-size:14px;">Available</a></span></td>
                                    @endif
                                    @else
                                    @if (Auth::check())
                                    <td><button  onclick="getProperty(this)" id="{{$row->id}}" style="border:none ;background: #f1c967; padding-left: 17px; padding-right: 17px;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">Purchased</button></td>
                                    @else 
                                    <td><span class="status fontNeuron" style="border:none ;padding:7px;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);"><a href="#popup1" class="lightbox btn btn-sm" type="button" style="color: white;font-size:14px;">Purchased</a></span></td>
                                    @endif
                                    @endif
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </section>
                    
                    
                    @endif
                    @if($mapShops->property_type == 'For Investment')
                    <section class="bgWhite">
                        <canvas id="myChart" width="400" height="201" style="margin-bottom: 20px"></canvas>
                    </section>
                    @endif

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

                                    <a href="#"><img src="{{asset($mapShops->user->image)}}"
                                            style="height:75px; width:100px" alt="image description"></a>

                                </figure>
                                <div class="pull-left">
                                    <div class="hb-headcontent">
                                        <h3>{{$mapShops->user->name}}</h3>
                                        <span>{{$mapShops->user->address}}</span>
                                        <a
                                            href="mailto:&#105;&#110;&#102;&#111;&#064;&#104;&#111;&#109;&#101;&#115;&#119;&#101;&#101;&#116;&#046;&#099;&#111;&#109;">{{$mapShops->user->email}}</a>
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
                                <form id="contact_form">
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
                                        style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Schedule
                                        a
                                        Tour</button>
                                </form>
                                <h6 class="fontNeuron"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                    Public Health Advisory</h6>
                                <p class="fontNeuron" style="font-size: 11px">By pressing Schedule A Tour, you agree
                                    that Trulia and real estate professionals may contact you via phone/text about
                                    your inquiry, which may involve the use of automated means. You are not required
                                    to consent as a condition of purchasing any property, goods or services.
                                    Message/data rates may apply. You also agree to our <a href=""
                                        style="color: #bd7f0a"> Terms of Use</a>
                                    Trulia does not endorse any <a href="" style="color: #bd7f0a"> real estate
                                        professionals</a> </p>
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
                                                <input type="text" name="phone" placeholder="Phone"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="" class="fwNormal ">Message</label>
                                                <textarea name="message" id="" cols="10" rows="1"
                                                    class="form-control">I am interested in 828 Niagara Ave, San Francisco, CA 94112</textarea>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Email"
                                                    class="form-control">
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
                                        style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Request
                                        Info</button>


                                </form>
                                <h6 class="fontNeuron"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                    Public Health Advisory</h6>
                                <p class="fontNeuron" style="font-size: 11px">By pressing Schedule A Tour, you agree
                                    that Trulia and real estate professionals may contact you via phone/text about
                                    your inquiry, which may involve the use of automated means. You are not required
                                    to consent as a condition of purchasing any property, goods or services.
                                    Message/data rates may apply. You also agree to our <a href=""
                                        style="color: #bd7f0a"> Terms of Use</a>
                                    Trulia does not endorse any <a href="" style="color: #bd7f0a"> real estate
                                        professionals</a> </p>
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

            <?php
                    // Jan 
                    $year = date("Y");
                    $janprice = [];
                    $jan = \App\Unit::where('property_id', $mapShops->id)->whereMonth('created_at', '1')->whereYear('created_at', $year)->get();
                    if ($jan == null) {
                        $newjprice = 0;
                    }
                    foreach ($jan as $key => $row) {
                        array_push($janprice, $row->unit_price);
                    }
                    $newjanprice = array_sum($janprice);

                    // feb
                      $febprice = [];
                    $feb = \App\Unit::where('property_id', $mapShops->id)->whereMonth('created_at', '2')->whereYear('created_at', $year)->get();
                    if ($feb == null) {
                        $newfebprice = 0;
                    }
                    foreach ($feb as $key => $row) {
                        array_push($febprice, $row->unit_price);
                    }
                    $newfebprice = array_sum($febprice);


                       // mar
                      $marprice = [];
                    $mar = \App\Unit::where('property_id', $mapShops->id)->whereMonth('created_at', '3')->whereYear('created_at', $year)->get();
                    if ($mar == null) {
                        $newmarprice = 0;
                    }
                    foreach ($mar as $key => $row) {
                        array_push($marprice, $row->unit_price);
                    }
                    $newmarprice = array_sum($marprice);


                        // apr
                      $aprprice = [];
                    $apr = \App\Unit::where('property_id', $mapShops->id)->whereMonth('created_at', '4')->whereYear('created_at', $year)->get();
                    if ($apr == null) {
                        $newaprprice = 0;
                    }
                    foreach ($apr as $key => $row) {
                        array_push($aprprice, $row->unit_price);
                    }
                    $newaprprice = array_sum($aprprice);



                      // may
                      $mayprice = [];
                    $may = \App\Unit::where('property_id', $mapShops->id)->whereMonth('created_at', '5')->whereYear('created_at', $year)->get();
                    if ($may == null) {
                        $newmayprice = 0;
                    }
                    foreach ($may as $key => $row) {
                        array_push($mayprice, $row->unit_price);
                    }
                    $newmayprice = array_sum($mayprice);


                      // jun
                      $junprice = [];
                    $jun = \App\Unit::where('property_id', $mapShops->id)->whereMonth('created_at', '6')->whereYear('created_at', $year)->get();
                    if ($jun == null) {
                        $newjunprice = 0;
                    }
                    foreach ($jun as $key => $row) {
                        array_push($junprice, $row->unit_price);
                    }
                    $newjunprice = array_sum($junprice);



                      // jul
                      $julprice = [];
                    $jul = \App\Unit::where('property_id', $mapShops->id)->whereMonth('created_at', '7')->whereYear('created_at', $year)->get();
                    if ($jul == null) {
                        $newjulprice = 0;
                    }
                    foreach ($jul as $key => $row) {
                        array_push($julprice, $row->unit_price);
                    }
                    $newjulprice = array_sum($julprice);


                      // aug
                      $augprice = [];
                    $aug = \App\Unit::where('property_id', $mapShops->id)->whereMonth('created_at', '8')->whereYear('created_at', $year)->get();
                    if ($aug == null) {
                        $newaugprice = 0;
                    }
                    foreach ($aug as $key => $row) {
                        array_push($augprice, $row->unit_price);
                    }
                    $newaugprice = array_sum($augprice);


                     // sept
                      $septprice = [];
                    $sept = \App\Unit::where('property_id', $mapShops->id)->whereMonth('created_at', '9')->whereYear('created_at', $year)->get();
                    if ($sept == null) {
                        $newseptprice = 0;
                    }
                    foreach ($sept as $key => $row) {
                        array_push($septprice, $row->unit_price);
                    }
                    $newseptprice = array_sum($septprice);


                     // oct
                      $octprice = [];
                    $oct = \App\Unit::where('property_id', $mapShops->id)->whereMonth('created_at', '10')->whereYear('created_at', $year)->get();
                    if ($oct == null) {
                        $newoctprice = 0;
                    }
                    foreach ($oct as $key => $row) {
                        array_push($octprice, $row->unit_price);
                    }
                    $newoctprice = array_sum($octprice);

                     // nov
                      $novprice = [];
                    $nov = \App\Unit::where('property_id', $mapShops->id)->whereMonth('created_at', '11')->whereYear('created_at', $year)->get();
                    if ($nov == null) {
                        $newnovprice = 0;
                    }
                    foreach ($nov as $key => $row) {
                        array_push($novprice, $row->unit_price);
                    }
                    $newnovprice = array_sum($novprice);

                     // dec
                      $decprice = [];
                    $dec = \App\Unit::where('property_id', $mapShops->id)->whereMonth('created_at', '12')->whereYear('created_at', $year)->get();
                    if ($dec == null) {
                        $newdecprice = 0;
                    }
                    foreach ($dec as $key => $row) {
                        array_push($decprice, $row->unit_price);
                    }
                    $newdecprice = array_sum($decprice);
                    
            ?>
            <div id="map"></div>
            <div id="pano"></div>

        </div>
    </div>
    @if (Auth::check())
            <!-- pagePopupWrap -->
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form id="myform">
                @csrf
                <div class="bgWhite">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="status"  value="1">
                    <input type="hidden" name="unit_id" id="unitid">
                    
                        <h3 id="headingform" style="margin-left: 35px;">Unit Details</h3>
                        <div class="popupColsHolder mo">
                            <div class="col bgWhite">
                                <div class="col-xs-12">
                                        <p class="fontNeuron">We respect your privacy. See our <a href="#"
                                            style="color:#bd7f0a "> privacy policy. </a>
                                        By pressing Submit, you agree that Zillow Group may contact you via phone/text
                                        about
                                        your inquiry, which may involve the use of automated means. You are not required
                                        to
                                        consent as a condition of purchasing any goods or services. Message/data rates
                                        may
                                        apply.</p>
                                    <button type="submit"
                                        class="btn btn-sm  elemenBlock fontNeuron fwNormal text-uppercase btnSubmit"
                                        style="width:20%;border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);color:white; font-size:18px;">Submit</button>
                               
                                </div>


                            </div>
                        </div>
            </form>
  </div>

</div>
    @endif


</main>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

<script type='text/javascript'
    src='https://maps.google.com/maps/api/js?language=en&key=AIzaSyDxL17Fyl5fOmZ13z3xDVdxBAOEF6ZwKKc&callback=initialize&libraries=&v=weekly'
    async></script>
<script defer>
    $(document).ready(function () {
        var lt = $('#lt').val();
        var lng = $('#lng').val();
        var mainurl = "{{url('/')}}";

        function initialize() {
            var mapOptions = {
                zoom: 6,
                // minZoom: 6,
                maxZoom: 15,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.DEFAULT
                },
                center: new google.maps.LatLng(lt, lng),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: true,
                panControl: false,
                mapTypeControl: false,
                scaleControl: false,
                overviewMapControl: false,
                rotateControl: false
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            var image = new google.maps.MarkerImage("assets/images/pin.png", null, null, null, new google.maps
                .Size(40, 52));
            var place = @json($mapShops);
            if (place.latitude && place.longitude) {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.latitude, place.longitude),
                    icon: image,
                    map: map,
                    title: place.name
                });
            }
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    });

</script>

<script>
    function initialize() {
        var lt = $('#lt').val();
        var lng = $('#lng').val();
        var newlt = parseFloat(lt);
        var newlng = parseFloat(lng);
        const fenway = {
            lat: newlt,
            lng: newlng
        };
        const map = new google.maps.Map(document.getElementById("map"), {
            center: fenway,
            zoom: 14,
            scrollwheel: true,
        });
        const panorama = new google.maps.StreetViewPanorama(
            document.getElementById("pano"), {
                position: fenway,
                pov: {
                    heading: 34,
                    pitch: 10,
                },
            }
        );
        map.setStreetView(panorama);
    }

</script>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // Contact Add
        $('#contact_form').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
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
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#contact_form_info').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
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

<script>
   

         function getProperty(elem){
            var unit_id = $(elem).attr("id");
            $('#unitid').val(unit_id);
            // Get the modal
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
            modal.style.display = "none";
            }
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            }
            };
   
</script>

<script>
        // add property
        $(document).ready(function(){
        $('#myform').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({

                url: '{{route("unit.status.update")}}',
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
                    } else {
                        toastr.error(data.error);

                    }


                }
            });
         var modal = document.getElementById("myModal");
            modal.style.display = "none";
            setTimeout(function(){
       location.reload();
   },2);

        });
        });

</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    
    function init(){
        
           var janprice = @json($newjanprice);

           var febprice = @json($newfebprice);

           var marprice = @json($newmarprice);

           var aprprice = @json($newaprprice);

           var mayprice = @json($newmayprice);

           var junprice = @json($newjanprice);

           var julprice = @json($newjulprice);

           var augprice = @json($newaugprice);

           var septprice = @json($newseptprice);

           var octprice = @json($newoctprice);

           var novprice = @json($newnovprice);

           var decprice = @json($newdecprice);
      

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'],
        datasets: [{
            label: 'Share Price',
            data: [janprice,febprice,marprice,aprprice,mayprice,junprice,julprice,augprice,septprice,octprice,novprice,decprice],
            backgroundColor:['#f1c967'],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// 2nd chart 



};
window.onload = init;
</script>
