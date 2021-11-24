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
<main>
      
<section class="slick-fade slickSlider introSlider">
        <div>
            <!-- introSlide -->
            <article class="introSlide bgCover" id="cover"
                style="background-image: url({{asset('frontend/images/hm.jpg')}});background-position: -0px -80px ;background-repeat: no-repeat;  background-attachment: fixed;">
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
            <!-- subscriptionSlider -->
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
                            <a href="#popup2"
                                style="margin-bottom:20px; border:none;font-size: 16px; background: #f1c967; 
                                    background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); 
                                    background: linear-gradient(to right, #bd7f0a, #f1c967); color:white; margin-top:10px"
                                type="button" class="btn btn-sm  text-uppercase fontNeuron lightbox">Purchase</a>

                     
                              
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- pagePopupWrap -->
    <div class="popup-holder">
        <div id="popup2" class="lightbox-demo">
            <!-- popupLoginFrom -->
            <form action="{{ route('register') }}" method="post"
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
                                <div class="form-group">
                                    
                                  <?php $roles = App\Role::all(); ?> 
                                    <select data-placeholder="Type" class="form-control elemenBlock" name="agent_role">
                                        <option selected="selected">Select Role</option>

                                        @foreach ($roles as $row)
                                        <option value="{{$row->id}}">{{$row->agent_role}}</option>
                                        @endforeach
                                    </select>
                                </div>
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
