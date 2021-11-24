@extends('layouts.frontend.app')
@section('content')

<main>
<section class="slick-fade slickSlider introSlider">
        <div>
            <!-- introSlide -->
            <article class="introSlide bgCover" id="cover"
                style="background-image: url({{asset('frontend/images/hm.jpg')}});background-position: -0px -80px ;background-repeat: no-repeat;  background-attachment: fixed;">
                <div class="container introSlideHolder">
                    {{-- <div class="align"> --}}
                    <!-- introSlideCaption -->
                    {{-- <div class="col-xs-8 col-sm-2 col-md-8 introSlideCaption captionwithtabs"
                        style="margin-top: 170px;">
                        <p style="color: white" id="bp">SOLUTIONS FOR REAL ESTATE BROKERS</p>
                        <h1 class="fontNeuron" style="font-size:50px; margin-top:12px" id="bheading">One integrated solution.</h1>
                        <h1 class="fontNeuron" style="font-size:50px; margin-top:-50px" id="bheading1">Endless ways to
                            succeed.</h1>
                        <p style="color: white; margin-top:-45px" id="bp">Convert more leads, build stronger teams and 
                            drive <br style="display: none" id="hide">
                            more  growth with Zillow Premier Agent.</p>
                        <a href="#popup2"
                            style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:20px"
                            type="button" class="btn  text-uppercase  fontNeuron lightbox">Get Started</a>
                    </div> --}}
                    {{-- </div> --}}
                </div>
            </article>
        </div>
    </section>
<section class="bgWhite ourAgentBlock">
    <div class="container">
        <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">SUB</span> <span
                class="textSecondary">SCRIPTIONS</span></h1>
        <div class="row">
            <?php

                                                $subscription = App\Subscription::all()
                                                 ?>
            <!-- profilesSlider -->
            {{-- {{dd($subscription)}} --}}
            <div class="four-slider slickSlider profilesSlider">
                @foreach ($subscription as $row)
                <div>
                    <div class="col-xs-12 col-sm-2 col-md-4" id="d1"
                        style="margin-left:10px;margin-top: 50px;background-color: #dcf2f7;width:95%;">
                        <h3 class="fontNeuron fwBold text-capitalize" style="text-align: center;margin-top:50px">{{$row->title}}</h3>
                        <p style="text-align: center">{!!$row->description!!}</p>
                        
                        <div class="row text-center" style="margin-bottom: 10px">
                            <span class="textSecondary">Price:</span>  ${{$row->price}} | <span class="textSecondary">Valid Property:</span> {{$row->valid_property}} 
                        </div>
                        <div class="row text-center btnHolder">
                            <a href="#"
                                style="margin-bottom:20px; border:none;font-size: 16px; background: #f1c967; 
                                    background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                    background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:10px"
                                type="button" class="btn btn-sm  text-uppercase fontNeuron">Purchase</a>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
</main>
@endsection
