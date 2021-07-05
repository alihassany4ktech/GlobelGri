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
                style="background-image: url({{asset('frontend/images/mew1.jpg')}});background-position: -0px -80px ;background-repeat: no-repeat;  background-attachment: fixed;">
                <div class="container introSlideHolder">
                    {{-- <div class="align"> --}}
                    <!-- introSlideCaption -->
                    <div class="col-xs-8 col-sm-2 col-md-8 introSlideCaption captionwithtabs"
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
                    </div>
                    {{-- </div> --}}
                </div>
            </article>
        </div>
    </section>

    <section class="aboutBlock bgWhite">
        <div class="container">
            <div class="row">
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
                <div class="col-xs-12 col-sm-8 col-md-7">
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

    <section class="aboutBlock bgWhite">
        <div class="container">
            <h1 style="text-align: center" class="fontNeuron">Tackle your biggest goals with personalized consulting</h1>
            <p style="text-align: center" class="fontNeuron">As a broker, you’ll be assigned a dedicated business consultant to help
                strengthen your strategy — so <br> you can recruit and retain top agents and drive more revenue.</p>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-7" style="margin-top: 50px">
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
                <div class="col-xs-12 col-sm-4 col-md-5" style="margin-top: 50px">
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
            </div>
        </div>
    </section>

    <section class="latestPostsBlock container">
        <!-- isoContentHolder -->
            <div class="row text-center btnHolder holder">
            <button 
                style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:10px"
                 class="btn  btn-xs   text-uppercase fontNeuron"></button>
        </div>
        <div class="isoContentHolder">
            <div class="row">
                
                <div class="col-xs-12 col-sm-6 col-md-12 col isoCol sale">
                    <h1 style="text-align: center" class="fontNeuron">With Zillow Premier Agent, we have greater control <br> over our
                        leads, and we’re able to
                        consistently help <br> today’s client find success in their search.</h1>
                    <p style="text-align: center" class="fontNeuron">Bill Redmond | Watson Realty, Bakersfield, California</p>

                </div>

            </div>
        </div>
        

    </section>

    <section class="aboutBlock bgWhite">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-5">
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
            </div>
        </div>
    </section>

    <section class="latestPostsBlock container">
        <!-- isoContentHolder -->
        <div class="isoContentHolder">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12 col isoCol sale">
                    <h1 style="text-align: center" class="fontNeuron">Zillow Premier Agents close 2.5x as often as other <br> agents</h1>
                    <p style="text-align: center" class="fontNeuron">Take your brokerage’s success to the next level.</p>

                </div>

            </div>
        </div>
        <div class="row text-center btnHolder">
            <a href="#popup2"
                style="border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:10px"
                type="button" class="btn  text-uppercase fontNeuron lightbox">Get Started</a>
        </div>
    </section>

    <section class="aboutBlock bgWhite">
        <div class="container">
            <h1 style="text-align: center" class="fontNeuron">Other Zillow Premier Agent Solutions</h1>
            <p style="text-align: center" class="fontNeuron">Discover the right option for your real estate business.</p>
            <div class="row">
                <div class="col-xs-12 col-sm-2 col-md-4" id="d"
                    style="margin-top: 50px;margin-left:175px;background-color: #dcf2f7">
                    <h3 class="fontNeuron fwBold text-capitalize" style="text-align: center;margin-top:50px">Agent
                        solutions</h3>
                    <p style="text-align: center">Connect and close with more leads as an individual agent.</p>
                    <div class="row text-center btnHolder">
                        <a href="#"
                            style="margin-bottom:50px; border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:10px"
                            type="button" class="btn  text-uppercase fontNeuron">Learn More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-4" id="d1"
                    style="margin-left:10px;margin-top: 50px;background-color: #dcf2f7">
                    <h3 class="fontNeuron fwBold text-capitalize" style="text-align: center;margin-top:50px">Team
                        solutions</h3>
                    <p style="text-align: center">Elevate your team’s performance and grow your business.</p>
                    <div class="row text-center btnHolder">
                        <a href="#"
                            style="margin-bottom:50px; border:none;font-size: 20px; background: #f1c967; 
                                                background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                                background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:10px"
                            type="button" class="btn  text-uppercase fontNeuron">Learn More</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- pagePopupWrap -->
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
                                <p class="fontNeuron">We respect your privacy. See our <a href="#" style="color:#bd7f0a "> privacy policy. </a>
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
