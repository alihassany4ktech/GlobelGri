@extends('layouts.frontend.app')
@section('content')
<style>
    .latestPostsBlock .btnHolder .btn {
        min-width: 239px;
    }

    #mybtn {
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
                style="background-image: url({{asset('frontend/images/hm.jpg')}});background-position: -0px -190px ;background-repeat: no-repeat;  background-attachment: fixed;">
                <div class="container introSlideHolder">
                    {{-- <div class="align"> --}}
                    <!-- introSlideCaption -->
                    <div class="col-xs-8 col-sm-2 col-md-8 introSlideCaption captionwithtabs"
                        style="margin-top: 170px;">
                        <p style="color: white" id="bp">SOLUTIONS FOR REAL ESTATE AGENTS</p>
                        <h1 class="fontNeuron" style="font-size:50px; margin-top:12px" id="bheading">Real Estate Agent
                            <br> Advertising</h1>
                        <p style="color: white; margin-top:-45px" id="bp">Get access to the largest network of real
                            estate sites,<br style="display: none" id="hide"> and start <br id="noshow">
                            connecting live with active home shoppers. </p>
                    </div>
                    {{-- </div> --}}
                </div>
            </article>
        </div>
    </section>

    <section class="aboutBlock bgWhite">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-7">

                    <button id="mybtn"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px"
                        class="btn     text-uppercase fontNeuron"></button>

                    <h3 class="fontNeuron fwBold text-capitalize" style="margin-top:10px;">Agent</h3>
                    <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris
                        ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet
                        rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum,
                        lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus
                        turpis.</p>
                    <p>Donec luctus lacinia sem potenti aptent est platea, orci tortor dui fringilla curae varius
                        tempor, rhoncus commodo sapien auctor himenaeos laoreet maecenas tempor venenatis accumsan
                        lacinia congue dolor laoreet, ut nostra nulla nunc aptent dolor quisque, lorem sociosqu nunc
                        convallis curabitur faucibus.</p>
                    <a href="{{route('agent_guide')}}" type="button"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px;margin-bottom:10px;"
                        class="btn   btn-sm  text-uppercase fontNeuron">More Info</a>
                    <a href="#popup3" type="button"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px;margin-bottom:10px;"
                        class="btn  btn-sm   text-uppercase fontNeuron lightbox">Get Started</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-5">
                    <div class="slickSlider testimonial-carousel testimonialSlider">
                        <div>
                            <!-- testimonialColumn -->
                            <div class="testimonialColumn text-center">
                                <img src="{{asset('frontend/images/m.jpg')}}" alt="image description"
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
            <div class="row text-center btnHolder holder">
                <button id="mybtn"
                    style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px"
                    class="btn  text-uppercase fontNeuron"></button>
            </div>
            <h1 style="text-align: center" class="fontNeuron">Leverage tools that help you do your best work</h1>
            <p style="text-align: center" class="fontNeuron">Each home-buying journey is unique, and Zillow Premier
                Agent gives you the resources to exceed <br> clients’ expectations at every step.</p>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-5" style="margin-top:100px;">
                    <div class="slickSlider testimonial-carousel testimonialSlider">
                        <div>
                            <!-- testimonialColumn -->
                            <div class="testimonialColumn text-center">
                                <img src="{{asset('frontend/images/m1.jpg')}}" alt="image description"
                                    class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-7" style="margin-top:100px;">

                    <button id="mybtn"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px"
                        class="btn     text-uppercase fontNeuron"></button>

                    <h3 class="fontNeuron fwBold text-capitalize" style="margin-top:10px;">Property Manager</h3>
                    <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris
                        ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet
                        rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum,
                        lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus
                        turpis.</p>
                    <p>Donec luctus lacinia sem potenti aptent est platea, orci tortor dui fringilla curae varius
                        tempor, rhoncus commodo sapien auctor himenaeos laoreet maecenas tempor venenatis accumsan
                        lacinia congue dolor laoreet, ut nostra nulla nunc aptent dolor quisque, lorem sociosqu nunc
                        convallis curabitur faucibus.</p>
                    <a href="{{route('property_manager_guide')}}" type="button"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px;margin-bottom:10px;"
                        class="btn   btn-sm  text-uppercase fontNeuron">More Info</a>
                    <a href="#popup4" type="button"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px;margin-bottom:10px;"
                        class="btn  btn-sm   text-uppercase fontNeuron lightbox">Get Started</a>
                </div>


            </div>
        </div>
    </section>
    <section class="aboutBlock bgWhite">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-7">

                    <button id="mybtn"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px"
                        class="btn     text-uppercase fontNeuron"></button>

                    <h3 class="fontNeuron fwBold text-capitalize" style="margin-top:10px;">Lender</h3>
                    <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris
                        ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet
                        rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum,
                        lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus
                        turpis.</p>
                    <p>Donec luctus lacinia sem potenti aptent est platea, orci tortor dui fringilla curae varius
                        tempor, rhoncus commodo sapien auctor himenaeos laoreet maecenas tempor venenatis accumsan
                        lacinia congue dolor laoreet, ut nostra nulla nunc aptent dolor quisque, lorem sociosqu nunc
                        convallis curabitur faucibus.</p>
                    <a href="{{route('lender_guide')}}" type="button"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px;margin-bottom:10px;"
                        class="btn   btn-sm  text-uppercase fontNeuron">More Info</a>
                    <a href="#popup5"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px;margin-bottom:10px;"
                        class="btn  btn-sm   text-uppercase fontNeuron lightbox">Get Started</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-5">
                    <div class="slickSlider testimonial-carousel testimonialSlider">
                        <div>
                            <!-- testimonialColumn -->
                            <div class="testimonialColumn text-center">
                                <img src="{{asset('frontend/images/m2.jpg')}}" alt="image description"
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
                <div class="col-xs-12 col-sm-4 col-md-5" style="margin-top:100px;">
                    <div class="slickSlider testimonial-carousel testimonialSlider">
                        <div>
                            <!-- testimonialColumn -->
                            <div class="testimonialColumn text-center">
                                <img src="{{asset('frontend/images/m5.jpg')}}" alt="image description"
                                    class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-7" style="margin-top:100px;">

                    <button id="mybtn"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px"
                        class="btn     text-uppercase fontNeuron"></button>

                    <h3 class="fontNeuron fwBold text-capitalize" style="margin-top:10px;">Builder</h3>
                    <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris
                        ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet
                        rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum,
                        lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus
                        turpis.</p>
                    <p>Donec luctus lacinia sem potenti aptent est platea, orci tortor dui fringilla curae varius
                        tempor, rhoncus commodo sapien auctor himenaeos laoreet maecenas tempor venenatis accumsan
                        lacinia congue dolor laoreet, ut nostra nulla nunc aptent dolor quisque, lorem sociosqu nunc
                        convallis curabitur faucibus.</p>
                    <a href="{{route('bulider_guide')}}" type="button"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px;margin-bottom:10px;"
                        class="btn   btn-sm  text-uppercase fontNeuron">More Info</a>
                    <a href="#popup6"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px;margin-bottom:10px;"
                        class="btn  btn-sm   text-uppercase fontNeuron lightbox">Get Started</a>
                </div>


            </div>
        </div>
    </section>
    <section class="aboutBlock bgWhite">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-7">

                    <button id="mybtn"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px"
                        class="btn     text-uppercase fontNeuron"></button>

                    <h3 class="fontNeuron fwBold text-capitalize" style="margin-top:10px;">Platform Administrator</h3>
                    <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris
                        ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet
                        rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum,
                        lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus
                        turpis.</p>
                    <p>Donec luctus lacinia sem potenti aptent est platea, orci tortor dui fringilla curae varius
                        tempor, rhoncus commodo sapien auctor himenaeos laoreet maecenas tempor venenatis accumsan
                        lacinia congue dolor laoreet, ut nostra nulla nunc aptent dolor quisque, lorem sociosqu nunc
                        convallis curabitur faucibus.</p>
                    <a href="{{route('plateform_administrator_guide')}}" type="button"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px;margin-bottom:10px;"
                        class="btn   btn-sm  text-uppercase fontNeuron">More Info</a>
                    <a href="#popup7"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px;margin-bottom:10px;"
                        class="btn  btn-sm   text-uppercase fontNeuron lightbox">Get Started</a>
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
    {{-- <section class="aboutBlock bgWhite">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-5" style="margin-top:100px;">
                    <div class="slickSlider testimonial-carousel testimonialSlider">
                        <div>
                            <!-- testimonialColumn -->
                            <div class="testimonialColumn text-center">
                                <img src="{{asset('frontend/images/m3.jpg')}}" alt="image description"
                                    class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-7" style="margin-top:100px;">

                    <button id="mybtn"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px"
                        class="btn     text-uppercase fontNeuron"></button>

                    <h3 class="fontNeuron fwBold text-capitalize" style="margin-top:10px;">Investor</h3>
                    <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris
                        ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet
                        rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum,
                        lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus
                        turpis.</p>
                    <p>Donec luctus lacinia sem potenti aptent est platea, orci tortor dui fringilla curae varius
                        tempor, rhoncus commodo sapien auctor himenaeos laoreet maecenas tempor venenatis accumsan
                        lacinia congue dolor laoreet, ut nostra nulla nunc aptent dolor quisque, lorem sociosqu nunc
                        convallis curabitur faucibus.</p>
                    <a href="{{route('invest_a_home')}}" type="button"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px;margin-bottom:10px;"
                        class="btn   btn-sm  text-uppercase fontNeuron">More Info</a>
                    <a href="#popup8"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px;margin-bottom:10px;"
                        class="btn  btn-sm   text-uppercase fontNeuron lightbox">Get Started</a>
                </div>


            </div>
        </div>
    </section> --}}
    <section class="latestPostsBlock container">
        <!-- isoContentHolder -->
        <div class="row text-center btnHolder holder">
            <button id="mybtn"
                style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:10px"
                class="btn  btn-xs   text-uppercase fontNeuron"></button>
        </div>
        <div class="isoContentHolder">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-12 col isoCol sale">
                    <h1 style="text-align: center" class="fontNeuron">In the months since you’ve started calling with
                        <br> connections, my conversion rate has been much higher, and muc <br> quicker.</h1>
                    <p style="text-align: center" class="fontNeuron">Lacey Blackman | Richmond, Washington</p>

                </div>

            </div>
        </div>


    </section>

    <section class="aboutBlock bgWhite">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-5" style="margin-top:100px;">
                    <div class="slickSlider testimonial-carousel testimonialSlider">
                        <div>
                            <!-- testimonialColumn -->
                            <div class="testimonialColumn text-center">
                                <img src="{{asset('frontend/images/m8.jpg')}}" alt="image description"
                                    class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-7" style="margin-top:100px;">

                    <button id="mybtn"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px"
                        class="btn     text-uppercase fontNeuron"></button>

                    <h3 class="fontNeuron fwBold text-capitalize" style="margin-top:10px;">Renter</h3>
                    <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris
                        ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet
                        rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum,
                        lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus
                        turpis.</p>
                    <p>Donec luctus lacinia sem potenti aptent est platea, orci tortor dui fringilla curae varius
                        tempor, rhoncus commodo sapien auctor himenaeos laoreet maecenas tempor venenatis accumsan
                        lacinia congue dolor laoreet, ut nostra nulla nunc aptent dolor quisque, lorem sociosqu nunc
                        convallis curabitur faucibus.</p>
                    <a href="{{route('rent_a_home')}}" type="button"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px;margin-bottom:10px;"
                        class="btn   btn-sm  text-uppercase fontNeuron">More Info</a>
                    <a href="#popup9"
                        style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:0px;margin-bottom:10px;"
                        class="btn  btn-sm   text-uppercase fontNeuron lightbox">Get Started</a>
                </div>


            </div>
        </div>
    </section>

    <section class="latestPostsBlock container">
        <!-- isoContentHolder -->
        <div class="isoContentHolder">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12 col isoCol sale">
                    <h1 style="text-align: center" class="fontNeuron">Become a buyer</h1>
                    <p style="text-align: center" class="fontNeuron">Reach more clients. Become a Zillow Premier Agent
                        today.</p>

                </div>

            </div>
        </div>
        <div class="row text-center btnHolder">
            <a href="{{route('buy_a_home')}}" type="button"
                style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:10px;"
                class="btn  btn-sm text-uppercase fontNeuron">More Info</a>
            <a href="#popup2"
                style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:10px"
                type="button" class="btn btn-sm  text-uppercase fontNeuron lightbox">Get Started</a>
        </div>
    </section>

    <!-- pagePopupWrap 2 -->
    <div class="popup-holder">
        <div id="popup2" class="lightbox-demo">
            <!-- popupLoginFrom -->
            <form action="{{ route('user.register') }}" method="post"
                class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
                @csrf
                <div class="tab-content bgWhite">

                    <div class="tab-active">
                        <h3 id="headingform" style="margin-left: 35px;">Sign Up</h3>
                        <div class="popupColsHolder mo">
                            <div class="col bgWhite">
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Name</label>
                                    <input type="text" class="form-control elemenBlock" id="name" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Enter a username..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password" required
                                        autocomplete="new-password" placeholder="Choose a safe one..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Confirm Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password_confirmation"
                                        required autocomplete="new-password" placeholder="..and confirm it!">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Email</label>
                                    <input type="email" class="form-control elemenBlock" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Your valid email..">
                                </div>
                                <input type="hidden" name="agent_role" id="" value="8">
                                <div class="form-group">
                                    <label class="fwNormal customLabelCheck">
                                        <input type="checkbox" class="customFormInputReset" checked>
                                        <span class="fakeCheckbox"></span>
                                        <span class="fakeLabel">I have read and agree to the Term of Service.</span>
                                    </label>
                                </div>
                                <button type="submit"
                                    class="btn btn-sm  elemenBlock fontNeuron fwNormal text-uppercase btnSubmit"
                                    style="width:20%;border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);color:white; font-size:18px;">Submit</button>
                                <p class="fontNeuron">We respect your privacy. See our <a href="#"
                                        style="color:#bd7f0a "> privacy policy. </a>
                                    <br><br>
                                    By pressing Submit, you agree that Zillow Group may contact you via phone/text about
                                    your inquiry, which may involve the use of automated means. You are not required to
                                    consent as a condition of purchasing any goods or services. Message/data rates may
                                    apply.</p>
                            </div>


                        </div>
                    </div>
            </form>
        </div>

    </div>

    <!-- pagePopupWrap 3 -->
    <div class="popup-holder">
        <div id="popup3" class="lightbox-demo">
            <!-- popupLoginFrom -->
            <form action="{{ route('user.register') }}" method="post"
                class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
                @csrf
                <div class="tab-content bgWhite">

                    <div class="tab-active">
                        <h3 id="headingform" style="margin-left: 35px;">Sign Up</h3>
                        <div class="popupColsHolder mo">
                            <div class="col bgWhite">
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Name</label>
                                    <input type="text" class="form-control elemenBlock" id="name" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Enter name..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password" required
                                        autocomplete="new-password" placeholder="Enter password..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Confirm Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password_confirmation"
                                        required autocomplete="new-password" placeholder="confirm password..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Email</label>
                                    <input type="email" class="form-control elemenBlock" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter Your valid email..">
                                </div>
                                <input type="hidden" name="agent_role" id="" value="1">
                                <div class="form-group">
                                    <label class="fwNormal customLabelCheck">
                                        <input type="checkbox" class="customFormInputReset" checked>
                                        <span class="fakeCheckbox"></span>
                                        <span class="fakeLabel">I have read and agree to the Term of Service.</span>
                                    </label>
                                </div>
                                <button type="submit"
                                    class="btn btn-sm  elemenBlock fontNeuron fwNormal text-uppercase btnSubmit"
                                    style="width:20%;border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);color:white; font-size:18px;">Submit</button>
                                <p class="fontNeuron">We respect your privacy. See our <a href="#"
                                        style="color:#bd7f0a "> privacy policy. </a>
                                    <br><br>
                                    By pressing Submit, you agree that Zillow Group may contact you via phone/text about
                                    your inquiry, which may involve the use of automated means. You are not required to
                                    consent as a condition of purchasing any goods or services. Message/data rates may
                                    apply.</p>
                            </div>


                        </div>
                    </div>
            </form>
        </div>

    </div>

    <!-- pagePopupWrap 4 -->
    <div class="popup-holder">
        <div id="popup4" class="lightbox-demo">
            <!-- popupLoginFrom -->
            <form action="{{ route('user.register') }}" method="post"
                class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
                @csrf
                <div class="tab-content bgWhite">

                    <div class="tab-active">
                        <h3 id="headingform" style="margin-left: 35px;">Sign Up</h3>
                        <div class="popupColsHolder mo">
                            <div class="col bgWhite">
                             <div class="form-group">
                                    <label class="fontNeuron" for="">Name</label>
                                    <input type="text" class="form-control elemenBlock" id="name" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Enter name..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password" required
                                        autocomplete="new-password" placeholder="Enter password..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Confirm Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password_confirmation"
                                        required autocomplete="new-password" placeholder="confirm password..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Email</label>
                                    <input type="email" class="form-control elemenBlock" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter Your valid email..">
                                </div>
                                <input type="hidden" name="agent_role" id="" value="2">
                                <div class="form-group">
                                    <label class="fwNormal customLabelCheck">
                                        <input type="checkbox" class="customFormInputReset" checked>
                                        <span class="fakeCheckbox"></span>
                                        <span class="fakeLabel">I have read and agree to the Term of Service.</span>
                                    </label>
                                </div>
                                <button type="submit"
                                    class="btn btn-sm  elemenBlock fontNeuron fwNormal text-uppercase btnSubmit"
                                    style="width:20%;border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);color:white; font-size:18px;">Submit</button>
                                <p class="fontNeuron">We respect your privacy. See our <a href="#"
                                        style="color:#bd7f0a "> privacy policy. </a>
                                    <br><br>
                                    By pressing Submit, you agree that Zillow Group may contact you via phone/text about
                                    your inquiry, which may involve the use of automated means. You are not required to
                                    consent as a condition of purchasing any goods or services. Message/data rates may
                                    apply.</p>
                            </div>


                        </div>
                    </div>
            </form>
        </div>

    </div>

    <!-- pagePopupWrap 5 -->
    <div class="popup-holder">
        <div id="popup5" class="lightbox-demo">
            <!-- popupLoginFrom -->
            <form action="{{ route('user.register') }}" method="post"
                class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
                @csrf
                <div class="tab-content bgWhite">

                    <div class="tab-active">
                        <h3 id="headingform" style="margin-left: 35px;">Sign Up</h3>
                        <div class="popupColsHolder mo">
                            <div class="col bgWhite">
                             <div class="form-group">
                                    <label class="fontNeuron" for="">Name</label>
                                    <input type="text" class="form-control elemenBlock" id="name" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Enter name..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password" required
                                        autocomplete="new-password" placeholder="Enter password..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Confirm Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password_confirmation"
                                        required autocomplete="new-password" placeholder="confirm password..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Email</label>
                                    <input type="email" class="form-control elemenBlock" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter Your valid email..">
                                </div>
                                <input type="hidden" name="agent_role" id="" value="3">
                                <div class="form-group">
                                    <label class="fwNormal customLabelCheck">
                                        <input type="checkbox" class="customFormInputReset" checked>
                                        <span class="fakeCheckbox"></span>
                                        <span class="fakeLabel">I have read and agree to the Term of Service.</span>
                                    </label>
                                </div>
                                <button type="submit"
                                    class="btn btn-sm  elemenBlock fontNeuron fwNormal text-uppercase btnSubmit"
                                    style="width:20%;border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);color:white; font-size:18px;">Submit</button>
                                <p class="fontNeuron">We respect your privacy. See our <a href="#"
                                        style="color:#bd7f0a "> privacy policy. </a>
                                    <br><br>
                                    By pressing Submit, you agree that Zillow Group may contact you via phone/text about
                                    your inquiry, which may involve the use of automated means. You are not required to
                                    consent as a condition of purchasing any goods or services. Message/data rates may
                                    apply.</p>
                            </div>


                        </div>
                    </div>
            </form>
        </div>

    </div>

    <!-- pagePopupWrap 6 -->
    <div class="popup-holder">
        <div id="popup6" class="lightbox-demo">
            <!-- popupLoginFrom -->
            <form action="{{ route('user.register') }}" method="post"
                class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
                @csrf
                <div class="tab-content bgWhite">

                    <div class="tab-active">
                        <h3 id="headingform" style="margin-left: 35px;">Sign Up</h3>
                        <div class="popupColsHolder mo">
                            <div class="col bgWhite">
                             <div class="form-group">
                                    <label class="fontNeuron" for="">Name</label>
                                    <input type="text" class="form-control elemenBlock" id="name" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Enter name..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password" required
                                        autocomplete="new-password" placeholder="Enter password..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Confirm Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password_confirmation"
                                        required autocomplete="new-password" placeholder="confirm password..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Email</label>
                                    <input type="email" class="form-control elemenBlock" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter Your valid email..">
                                </div>
                                <input type="hidden" name="agent_role" id="" value="4">
                                <div class="form-group">
                                    <label class="fwNormal customLabelCheck">
                                        <input type="checkbox" class="customFormInputReset" checked>
                                        <span class="fakeCheckbox"></span>
                                        <span class="fakeLabel">I have read and agree to the Term of Service.</span>
                                    </label>
                                </div>
                                <button type="submit"
                                    class="btn btn-sm  elemenBlock fontNeuron fwNormal text-uppercase btnSubmit"
                                    style="width:20%;border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);color:white; font-size:18px;">Submit</button>
                                <p class="fontNeuron">We respect your privacy. See our <a href="#"
                                        style="color:#bd7f0a "> privacy policy. </a>
                                    <br><br>
                                    By pressing Submit, you agree that Zillow Group may contact you via phone/text about
                                    your inquiry, which may involve the use of automated means. You are not required to
                                    consent as a condition of purchasing any goods or services. Message/data rates may
                                    apply.</p>
                            </div>


                        </div>
                    </div>
            </form>
        </div>

    </div>

    <!-- pagePopupWrap 7 -->
    <div class="popup-holder">
        <div id="popup7" class="lightbox-demo">
            <!-- popupLoginFrom -->
            <form action="{{ route('user.register') }}" method="post"
                class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
                @csrf
                <div class="tab-content bgWhite">

                    <div class="tab-active">
                        <h3 id="headingform" style="margin-left: 35px;">Sign Up</h3>
                        <div class="popupColsHolder mo">
                            <div class="col bgWhite">
                             <div class="form-group">
                                    <label class="fontNeuron" for="">Name</label>
                                    <input type="text" class="form-control elemenBlock" id="name" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Enter name..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password" required
                                        autocomplete="new-password" placeholder="Enter password..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Confirm Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password_confirmation"
                                        required autocomplete="new-password" placeholder="confirm password..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Email</label>
                                    <input type="email" class="form-control elemenBlock" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter Your valid email..">
                                </div>
                                <input type="hidden" name="agent_role" id="" value="5">
                                <div class="form-group">
                                    <label class="fwNormal customLabelCheck">
                                        <input type="checkbox" class="customFormInputReset" checked>
                                        <span class="fakeCheckbox"></span>
                                        <span class="fakeLabel">I have read and agree to the Term of Service.</span>
                                    </label>
                                </div>
                                <button type="submit"
                                    class="btn btn-sm  elemenBlock fontNeuron fwNormal text-uppercase btnSubmit"
                                    style="width:20%;border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);color:white; font-size:18px;">Submit</button>
                                <p class="fontNeuron">We respect your privacy. See our <a href="#"
                                        style="color:#bd7f0a "> privacy policy. </a>
                                    <br><br>
                                    By pressing Submit, you agree that Zillow Group may contact you via phone/text about
                                    your inquiry, which may involve the use of automated means. You are not required to
                                    consent as a condition of purchasing any goods or services. Message/data rates may
                                    apply.</p>
                            </div>


                        </div>
                    </div>
            </form>
        </div>

    </div>

    <!-- pagePopupWrap 8 -->
    <div class="popup-holder">
        <div id="popup8" class="lightbox-demo">
            <!-- popupLoginFrom -->
            <form action="{{ route('user.register') }}" method="post"
                class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
                @csrf
                <div class="tab-content bgWhite">

                    <div class="tab-active">
                        <h3 id="headingform" style="margin-left: 35px;">Sign Up</h3>
                        <div class="popupColsHolder mo">
                            <div class="col bgWhite">
                             <div class="form-group">
                                    <label class="fontNeuron" for="">Name</label>
                                    <input type="text" class="form-control elemenBlock" id="name" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Enter name..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password" required
                                        autocomplete="new-password" placeholder="Enter password..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Confirm Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password_confirmation"
                                        required autocomplete="new-password" placeholder="confirm password..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Email</label>
                                    <input type="email" class="form-control elemenBlock" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter Your valid email..">
                                </div>
                                <input type="hidden" name="agent_role" id="" value="6">
                                <div class="form-group">
                                    <label class="fwNormal customLabelCheck">
                                        <input type="checkbox" class="customFormInputReset" checked>
                                        <span class="fakeCheckbox"></span>
                                        <span class="fakeLabel">I have read and agree to the Term of Service.</span>
                                    </label>
                                </div>
                                <button type="submit"
                                    class="btn btn-sm  elemenBlock fontNeuron fwNormal text-uppercase btnSubmit"
                                    style="width:20%;border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);color:white; font-size:18px;">Submit</button>
                                <p class="fontNeuron">We respect your privacy. See our <a href="#"
                                        style="color:#bd7f0a "> privacy policy. </a>
                                    <br><br>
                                    By pressing Submit, you agree that Zillow Group may contact you via phone/text about
                                    your inquiry, which may involve the use of automated means. You are not required to
                                    consent as a condition of purchasing any goods or services. Message/data rates may
                                    apply.</p>
                            </div>


                        </div>
                    </div>
            </form>
        </div>

    </div>

    <!-- pagePopupWrap 9-->
    <div class="popup-holder">
        <div id="popup9" class="lightbox-demo">
            <!-- popupLoginFrom -->
            <form action="{{ route('user.register') }}" method="post"
                class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
                @csrf
                <div class="tab-content bgWhite">

                    <div class="tab-active">
                        <h3 id="headingform" style="margin-left: 35px;">Sign Up</h3>
                        <div class="popupColsHolder mo">
                            <div class="col bgWhite">
                             <div class="form-group">
                                    <label class="fontNeuron" for="">Name</label>
                                    <input type="text" class="form-control elemenBlock" id="name" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Enter name..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password" required
                                        autocomplete="new-password" placeholder="Enter password..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Confirm Password</label>
                                    <input type="password" class="form-control elemenBlock" name="password_confirmation"
                                        required autocomplete="new-password" placeholder="confirm password..">
                                </div>
                                <div class="form-group">
                                    <label class="fontNeuron" for="">Email</label>
                                    <input type="email" class="form-control elemenBlock" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter Your valid email..">
                                </div>
                                <input type="hidden" name="agent_role" id="" value="7">
                                <div class="form-group">
                                    <label class="fwNormal customLabelCheck">
                                        <input type="checkbox" class="customFormInputReset" checked>
                                        <span class="fakeCheckbox"></span>
                                        <span class="fakeLabel">I have read and agree to the Term of Service.</span>
                                    </label>
                                </div>
                                <button type="submit"
                                    class="btn btn-sm  elemenBlock fontNeuron fwNormal text-uppercase btnSubmit"
                                    style="width:20%;border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);color:white; font-size:18px;">Submit</button>
                                <p class="fontNeuron">We respect your privacy. See our <a href="#"
                                        style="color:#bd7f0a "> privacy policy. </a>
                                    <br><br>
                                    By pressing Submit, you agree that Zillow Group may contact you via phone/text about
                                    your inquiry, which may involve the use of automated means. You are not required to
                                    consent as a condition of purchasing any goods or services. Message/data rates may
                                    apply.</p>
                            </div>


                        </div>
                    </div>
            </form>
        </div>

    </div>
</main>
@endsection
