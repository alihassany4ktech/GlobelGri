@extends('layouts.frontend.app')
@section('content')
<style>
    .latestPostsBlock .btnHolder .btn {
        min-width: 239px;
    }

     .latestPostsBlock .holder .btn {
        min-width: 60px;
        /* height: 1vh; */
    }

    .mo .col {
        width: 600px;
    }

</style>
<!-- main -->
<main>
    <!-- introSlider -->
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

    

    <section class="aboutBlock bgWhite">
        <div class="container">
            <div class="row">
                
                <div class="col-xs-12 col-sm-8 col-md-7">
                    <h3 class="fontNeuron fwBold text-capitalize">Software that helps everyone work smarter</h3>
                    <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris
                        ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet
                        rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum,
                        lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus
                        turpis.</p>
                    <p>Donec luctus lacinia sem potenti aptent est platea, orci tortor dui fringilla curae varius
                        tempor, rhoncus commodo sapien auctor himenaeos laoreet maecenas tempor venenatis accumsan
                        lacinia congue dolor laoreet, ut nostra nulla nunc aptent dolor quisque, lorem sociosqu nunc
                        convallis curabitur faucibus.</p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-5">
                    <div class="slickSlider testimonial-carousel testimonialSlider">
                        <div>
                            <!-- testimonialColumn -->
                            <div class="testimonialColumn text-center">
                                <img src="{{asset('frontend/images/m4.jpg')}}" alt="image description"
                                    class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="aboutBlock bgWhite">
        <div class="container">
            <div class="row">
                  <div class="col-xs-12 col-sm-8 col-md-12">
                    <h3 class="fontNeuron fwBold text-capitalize">We are LemanHouse Real Estate.</h3>
                    <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris
                        ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet
                        rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum,
                        lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus
                        turpis.</p>
                    <p>Donec luctus lacinia sem potenti aptent est platea, orci tortor dui fringilla curae varius
                        tempor, rhoncus commodo sapien auctor himenaeos laoreet maecenas tempor venenatis accumsan
                        lacinia congue dolor laoreet, ut nostra nulla nunc aptent dolor quisque, lorem sociosqu nunc
                        convallis curabitur faucibus.</p>
                </div>
            
                
            </div>
        </div>
    </section>

    

    


</main>
@endsection
