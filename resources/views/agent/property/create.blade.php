<!DOCTYPE html>
<html lang="en">

<head>
    <title>Globelgri</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>Globelgri</title>
    <!-- include google roboto font cdn link -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- include the site bootstrap stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/fancybox.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link href="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style type="text/css">
        #multistep_form fieldset:not(:first-of-type) {
            display: none;
        }

        .inputWrapper {
            height: 25px;
            line-height: 26px;
            text-align: center;
            margin-top: 10px;
            width: 100px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            border-radius: 3px;
            /*Using a background color, but you can use a background image to represent a button*/
            background-color: #f1c967;
            background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);
            background: linear-gradient(to right, #bd7f0a, #f1c967);
        }

        .fileInput {
            cursor: pointer;
            height: 100%;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 99;
            /*This makes the button huge. If you want a bigger button, increase the font size*/
            font-size: 50px;
            /*Opacity settings for all browsers*/
            opacity: 0;
            -moz-opacity: 0;
            filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0);
        }

        /* input[type="file"] {
  display: block;
} */
        .imageThumb {
            height: 100px;
            width: 150px;
            border: 2px solid;
            padding: 1px;
            cursor: pointer;

        }

        .pip {
            display: inline-block;
            margin: 10px 10px 0 0;

        }

        .remove {
            display: block;
            background: #444;
            border: 1px solid black;
            color: white;
            text-align: center;
            cursor: pointer;
        }

        .remove:hover {
            background-color: #f1c967;
            background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);
            background: linear-gradient(to right, #bd7f0a, #f1c967);

        }

        .labels {
            background-color: indigo;
            color: white;
            padding: 0.5rem;
            font-family: sans-serif;
            border-radius: 0.3rem;
            cursor: pointer;
            margin-top: 1rem;
        }

        #kuchbe {
            height: 25px;
            line-height: 26px;
            color: white;
            text-align: center;
            margin-top: 10px;
            width: 100px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            border-radius: 3px;
            /*Using a background color, but you can use a background image to represent a button*/
            background-color: #f1c967;
            background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);
            background: linear-gradient(to right, #bd7f0a, #f1c967);
        }

    </style>
</head>

<body>
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
    <!-- pageWrapper -->
    <div id="pageWrapper">
        <!-- pageMenuPushWrap -->
        <div class="pageMenuPushWrap pageMenuPushWrap1">
            <!-- bgBaseWrap -->
            <div class="bgBaseWrap">
                <!-- pageHeader -->
                <header id="pageHeader" class="bgWhite shadow">
                    <!-- pageHeaderWrap -->
                    <div class="pageHeaderWrap">
                        <!-- headerTopBar -->
                        <div class="container">
                            <!-- headerHolder -->
                            <div class="headerHolder" style="height: 120px">
                                <!-- logo -->
                                @if ($logo)
                                <div class="logo logoCentered"><a href="{{route('agent.dashboard')}}"><img
                                            src="{{$logo}}" alt="LemanHouse"
                                            style="height:120px; width:135px;margin-top:-16%"></a></div>
                                @else
                                <div class="logo logoCentered"><a href="{{route('agent.dashboard')}}"><img
                                            src="{{asset('frontend/images/logo5.png')}}"
                                            style="height:120px; width:135px;margin-top:-16%" alt="LemanHouse"></a>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </header>
                <!-- main -->
                <main>
                    <section id="content" class="container pEqual">

                        <form class="form-horizontal" id="multistep_form">
                            @csrf
                            <input type="hidden" name="agent_id" value="{{Auth::user()->id}}">
                            <fieldset id="account">

                                <div class="addProperty">
                                    <h1 class="fontNeuron">Add New Property</h1>
                                    <ol class="navSteps">
                                        <li class="current">
                                            <a href="#">
                                                <span class="text">Basic Info</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="text">Photos</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="text">Location</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="text">Private Notes</span>
                                            </a>
                                        </li>
                                    </ol>
                                    <div class="formContent">
                                        <header class="contentHead">
                                            <h2 class="fontNeuron">Basic Info</h2>
                                            <div class="btnArea">

                                                <a type="button" id="next1" class="btn  next"
                                                    style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">Next
                                                    <i class="fi flaticon-arrows"></i></a>

                                            </div>
                                        </header>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="itemN-15">Property Title</label>
                                                    <input type="text" name="propert_title" class="form-control"
                                                        placeholder="House" id="itemN-15">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8" id="pricediv">
                                                <div class="form-group">
                                                    <label for="itemN-16">Price</label>
                                                    <input type="text" name="price" id="price" class="form-control"
                                                        placeholder="$158" id="itemN-16">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-4">
                                                <div class="form-group">
                                                    <label for="itemN-18">Bedrooms</label>
                                                    <input type="number" name="bedroom" class="form-control"
                                                        placeholder="5" min="0" max="9999" id="itemN-18">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="itemN-19">Bathrooms</label>
                                                    <input type="number" name="bathroom" class="form-control"
                                                        placeholder="3" min="0" max="9999" id="itemN-19">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="itemN-20">Garages</label>
                                                    <input type="number" name="garages" class="form-control"
                                                        placeholder="8" min="0" max="9999" id="itemN-20">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="itemN-21">Area</label>
                                                    <input type="text" name="area" class="form-control"
                                                        placeholder="1500" id="itemN-21">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="itemN-23">Property Type</label>
                                                    <select data-placeholder="Select Option" id="property_type" class="chosen-select"
                                                        id="itemN-23" name="property_type" autocomplete="off">
                                                        <option value="For Sale">For Sale </option>
                                                        <option value="For Rent">For Rent </option>
                                                        {{-- <option value="For Investment">For Investment </option> --}}
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- <table class="table table table-bordered table-striped ptable" id="ptable" style="display: none;font-size: 13px;  text-align: center;">
                                            <thead>
                                                <tr>
                                                <th></th>
                                                <th scope="col">Unit Name</th>
                                                <th scope="col">Unit Price</th>
                                                <th scope="col" style="text-align: center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            </table> --}}
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="itemN-25">Description</label>
                                                    <textarea class="form-control" id="itemN-25" placeholder=""
                                                        name="description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btnArea">
                                            <a type="button" id="next1" class="btn  next"
                                                style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">Next
                                                <i class="fi flaticon-arrows"></i></a>

                                        </div>

                                    </div>
                                </div>

                            </fieldset>

                            <fieldset id="personal">
                                <div class="addProperty">
                                    <h1 class="fontNeuron">Add New Property</h1>
                                    <ol class="navSteps">
                                        <li class="completed">
                                            <a href="#">
                                                <span class="text">Basic Info</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="#">
                                                <span class="text">Photos</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="text">Location</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="text">Private Notes</span>
                                            </a>
                                        </li>
                                    </ol>
                                    <div class="formContent">

                                        <header class="contentHead">
                                            <h2 class="fontNeuron">Photos</h2>
                                            <div class="btnArea">

                                                <a type="button" id="previous1" class="btn btn-lighter previous"><i
                                                        class="fi flaticon-arrows-1"></i> Back</a>

                                                <a type="button" id="next2" class="btn  next"
                                                    style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">Next
                                                    <i class="fi flaticon-arrows"></i></a>
                                            </div>
                                        </header>
                                        <div class="galleryUploads">
                                            <div class="titleArea">
                                                <span class="title">Featured Image</span>
                                                <p>*At least one image is for valid submission, minimum width of 200px
                                                    and height 150px.
                                                </p>
                                                <hr />
                                                <b>Live Preview</b>
                                            </div>
                                            <div class="imageGallery">
                                                <div>
                                                    <div class="col-8" style="margin-left: 14px">
                                                        <div class="custom-file">
                                                            <div class="img-thumbnail  text-center" id="imagepreview">
                                                                <img src="" style="height: 150px; width: 200px;"
                                                                    class="img-fluid" id="one">
                                                            </div>
                                                            <div class="inputWrapper">
                                                                <label class="custom-file-label" for="thumbnail"
                                                                    style="color: white">Choose file</label>
                                                                <input type="file" class="fileInput"
                                                                    name="featured_photo" onchange="readURL(this);"
                                                                    accept="image/*" autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="galleryUploads">
                                            <div class="titleArea">
                                                <span class="title">Photo Gallery</span>
                                                <p>*At least one image is for valid submission, minimum width of 200px
                                                    and height 150px.
                                                </p>
                                            </div>
                                            <div class="imageGallery">
                                                <div>
                                                    <div class="col-8" style="margin-left: 14px">
                                                        <label id="kuchbe" for="files">Choose files</label>
                                                        <hr />
                                                        <input type="file" id="files" name="gallery_photos[]" multiple
                                                            autocomplete="off" style="display: none" />

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="btnArea">
                                            <a type="button" id="previous1" class="btn btn-lighter previous"><i
                                                    class="fi flaticon-arrows-1"></i> Back</a>
                                            <a type="button" id="next2" class="btn  next"
                                                style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">Next
                                                <i class="fi flaticon-arrows"></i></a>
                                        </div>

                                    </div>
                                </div>


                            </fieldset>

                            <fieldset id="contact">
                                <div class="addProperty">
                                    <h1 class="fontNeuron">Add New Property</h1>
                                    <ol class="navSteps">
                                        <li class="completed">
                                            <a href="#">
                                                <span class="text">Basic Info</span>
                                            </a>
                                        </li>
                                        <li class="completed">
                                            <a href="#">
                                                <span class="text">Photos</span>
                                            </a>
                                        </li>
                                        <li class="current">
                                            <a href="#">
                                                <span class="text">Location</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="text">Private Notes</span>
                                            </a>
                                        </li>
                                    </ol>
                                    <div class="formContent">

                                        <header class="contentHead">
                                            <h2 class="fontNeuron">Location</h2>
                                            <div class="btnArea">
                                                <a type="button" id="previous3" class="btn btn-lighter previous"><i
                                                        class="fi flaticon-arrows-1"></i> Back</a>
                                                <a type="button" id="next3" class="btn next"
                                                    style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">Next
                                                    <i class="fi flaticon-arrows"></i></a>
                                            </div>
                                        </header>
                                        {{-- <div class="row">
                                            <h1>Location Must Be Required</h1>
                                            <button
                                                style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-left:45%"
                                                onclick="getLocation()">Allow Location</button>

                                            <p id="demo"></p>

                                            <input type="hidden" name="latitude" id="latitude">
                                            <input type="hidden" name="longitude" id="longitude">
                                        </div> --}}
                                        <!-- Autocomplete location search input -->
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" class="form-control" id="search_input"
                                                placeholder="Type address..."/>
                                            <input type="hidden" id="loc_lat" name="latitude" />
                                            <input type="hidden" id="loc_long" name="longitude" />
                                            <input type="hidden" id="address" name="address" />

                                        </div>

                                          <div class="form-group">
                                            <label>ZipCode</label>
                                            <input type="text" name="zipcode" class="form-control" 
                                                placeholder="Type zipcode..."/>
                                           

                                        </div>

                                        <!-- Display latitude and longitude -->
                                        {{-- <div class="latlong-view">
                                            <p><b>Latitude:</b> <span id="latitude_view"></span></p>
                                            <p><b>Longitude:</b> <span id="longitude_view"></span></p>
                                        </div> --}}


                                        <div class="map-area mapPlacer">
                                            <div id="map-container">
                                                <div id="map_div">&nbsp;</div>
                                            </div>
                                        </div>
                                        <div class="btnArea">
                                            <a type="button" id="previous3" class="btn btn-lighter previous"><i
                                                    class="fi flaticon-arrows-1"></i> Back</a>
                                            <a type="button" id="next3" class="btn  next"
                                                style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">Next
                                                <i class="fi flaticon-arrows"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </fieldset>

                            <fieldset id="Private_Notes">
                                <div class="addProperty">
                                    <h1 class="fontNeuron">Add New Property</h1>
                                    <ol class="navSteps">
                                        <li class="completed">
                                            <a href="#">
                                                <span class="text">Basic Info</span>
                                            </a>
                                        </li>
                                        <li class="completed">
                                            <a href="#">
                                                <span class="text">Photos</span>
                                            </a>
                                        </li>
                                        <li class="completed">
                                            <a href="#">
                                                <span class="text">Location</span>
                                            </a>
                                        </li>

                                        <li class="current">
                                            <a href="#">
                                                <span class="text">Private Notes</span>
                                            </a>
                                        </li>
                                    </ol>
                                    <div class="formContent">

                                        <header class="contentHead">
                                            <h2 class="fontNeuron">Private Notes</h2>
                                        </header>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="private_note"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btnArea">
                                            <a type="button" id="previous5" class="btn btn-lighter previous"><i
                                                    class="fi flaticon-arrows-1"></i> Back</a>
                                            <button type="submit" class="btn"
                                                style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">Submit
                                                Property <i class="fi flaticon-arrows"></i></button>
                                        </div>

                                    </div>
                                </div>
                            </fieldset>

                        </form>
                    </section>
                </main>
            </div>

            <!-- pageFooterBlock -->
            <div class="pageFooterBlock">
                <!-- pageAside -->
                <aside class="pageAside textWhite">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col">
                                <h2 class="fontNeuron fwSemi text-uppercase">LemanHouse</h2>
                                @if($description)
                                <p>{{$description}}</p>
                                @else
                                <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Sed ut purus eget nunc ut
                                    dignissim cursus.</p>
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
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">About US</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Contact Support</a></li>
                                        <li><a href="#">Careers</a></li>

                                    </ul>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">How It Works</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="col-xs-12 col-sm-4 col">
                                <h2 class="fontNeuron fwSemi text-uppercase">LATEST PROPERTIES</h2>
                                <!-- postsWidgetList -->
                                <ul class="list-unstyled postsWidgetList">
                                    <li>
                                        <div class="alignleft">
                                            <a href="#">
                                                <img src="{{asset('frontend/images/3.jpg')}}" alt="image description">
                                            </a>
                                        </div>
                                        <div class="descrWrap">
                                            <h3 class="fwNormal"><a href="#">Do what you love and tomorrow will pay</a>
                                            </h3>
                                            <h4 class="fwSemi" style="color: white">$ 1,27,000</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="alignleft">
                                            <a href="#">
                                                <img src="{{asset('frontend/images/5.jpg')}}" alt="image description">
                                            </a>
                                        </div>
                                        <div class="descrWrap">
                                            <h3 class="fwNormal"><a href="#">We’re ready for the TRID rules!</a></h3>
                                            <h4 class="fwSemi" style="color: white">$ 527,000</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- pageFooter -->
                <footer id="pageFooter">
                    <div class="container pageFooterHolder">
                        <div class="row">
                            <div class="col-xs-12 col-sm-push-6 col-sm-6">
                                <!-- pageFooterSocial -->
                                <ul class="socialNetworks list-unstyled pageFooterSocial">
                                    <li><a href="#"><i class="fab fa-facebook-f" style="color: white"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" style="color: white"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" style="color: white"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest" style="color: white"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble" style="color: white"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google" style="color: white"></i></a></li>
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
                <span class="bgCover elemenBlock"
                    style="background-image: url(https://via.placeholder.com/1920x520);"></span>
            </div>
        </div>
    </div>

    <!-- include jQuery library -->
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <!-- include bootstrap JavaScript -->
    <script src="{{asset('frontend/js/bootstrap-slider.min.js')}}"></script>
    <!-- include custom JavaScript -->
    <script src="{{asset('frontend/js/jquery.main.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/init.js')}}"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDxL17Fyl5fOmZ13z3xDVdxBAOEF6ZwKKc">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


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

    {{-- <script>
         $(document).ready(function () {

               var count = 1;
    
     dynamic_field(count);
    
     function dynamic_field(number)
     {
      html = '<tr>';
            html += '<td><input type="hidden" name="status[]" class="form-control" value="Available"/></td>';
            html += '<td><input type="text" name="unit_name[]" class="form-control" placeholder="Required"/></td>';
            html += '<td><input type="text" name="unit_price[]"  class="unit_price form-control" placeholder="Required" /></td>';
            if(number > 1)
            {
                html += '<td><button type="button" name="remove" id="" class="btn btn-danger removes"><i class="fa fa-window-close" aria-hidden="true"></i></button></td></tr>';
                $('#ptable tbody').append(html);
            }
            else
            {   
                html += '<td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button></button></td></tr>';
                $('#ptable tbody').html(html);
            }
     }
    
     $(document).on('click', '#add', function(){
      count++;
      dynamic_field(count);
     });
    
     $(document).on('click', '.removes', function(){
      count--;
      $(this).closest("tr").remove();
     });
             $('#property_type').on('change',function(){
                 var v = $(this).val();
                 if(v == 'For Investment')
                 {
                     $('#ptable').show();
                     $('#pricediv').hide();

                 }
                 else{
                     $('#ptable').hide();
                     $('#pricediv').show();
                 }
            
             });
            
         });
    </script> --}}

    <script>
        $(document).ready(function () {
            var form_count = 1,
                form_count_form, next_form, total_forms;
            total_forms = $("fieldset").length;
            $(".next").click(function () {

                let previous = $(this).closest("fieldset").attr('id');
                let next = $('#' + this.id).closest('fieldset').next('fieldset').attr('id');
                $('#' + next).show();
                $('#' + previous).hide();

            });

            $(".previous").click(function () {

                let current = $(this).closest("fieldset").attr('id');
                let previous = $('#' + this.id).closest('fieldset').prev('fieldset').attr('id');
                $('#' + previous).show();
                $('#' + current).hide();

            });

        });

    </script>

    <script>
        // add property
        $('#multistep_form').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({

                url: '{{route("property.store")}}',
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
        });

    </script>

    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(150);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>

    {{-- <script>
        var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            $('#latitude').val(position.coords.latitude);
            $('#longitude').val(position.coords.longitude);
        }

    </script> --}}
    <script>
        $(document).ready(function () {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function (e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function (e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result +
                                "\" title=\"" + file.name + "\"/>" +
                                "<br/><span class=\"remove\">Remove image</span>" +
                                "</span>").insertAfter("#files");
                            $(".remove").click(function () {
                                $(this).parent(".pip").remove();
                            });
                        });
                        fileReader.readAsDataURL(f);
                    }
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });

    </script>
