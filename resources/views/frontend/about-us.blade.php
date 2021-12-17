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
	<!-- servicesFetaureBlock -->
					<section class="aboutBlock bgWhite">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-4 col-md-5">
									<div class="slickSlider testimonial-carousel testimonialSlider">
										<div>
											<!-- testimonialColumn -->
											<div class="testimonialColumn text-center">
												<img src="{{asset('frontend/images/m8.jpg')}}" alt="image description" class="img-responsive">
											</div>
										</div>
										<div>
											<!-- testimonialColumn -->
											<div class="testimonialColumn text-center">
												<img src="{{asset('frontend/images/m2.jpg')}}" alt="image description" class="img-responsive">
											</div>
										</div>
										<div>
											<!-- testimonialColumn -->
											<div class="testimonialColumn text-center">
												<img src="{{asset('frontend/images/m4.jpg')}}" alt="image description" class="img-responsive">
											</div>
										</div>
										<div>
											<!-- testimonialColumn -->
											<div class="testimonialColumn text-center">
												<img src="{{asset('frontend/images/m3.jpg')}}" alt="image description" class="img-responsive">
											</div>
										</div>
										<div>
											<!-- testimonialColumn -->
											<div class="testimonialColumn text-center">
												<img src="{{asset('frontend/images/m6.jpg')}}" alt="image description" class="img-responsive">
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-8 col-md-7">
									<h3 class="fontNeuron fwBold text-capitalize">We are LemanHouse Real Estate.</h3>
									<p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum, lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus turpis.</p>
									<p>Donec luctus lacinia sem potenti aptent est platea, orci tortor dui fringilla curae varius tempor, rhoncus commodo sapien auctor himenaeos laoreet maecenas tempor venenatis accumsan lacinia congue dolor laoreet, ut nostra nulla nunc aptent dolor quisque, lorem sociosqu nunc convallis curabitur faucibus.</p>
									<p>Ornare sagittis ante erat nec ultricies amet aenean netus sodales at, amet vehicula quis vel platea mattis vel felis hendrerit ad, at rhoncus tortor habitasse venenatis etiam senectus erat sit varius proin ligula lectus mi accumsan curabitur orci varius justo nec elit.</p>
								</div>
							</div>
						</div>
					</section>
					<!-- servicesFetaureBlock -->
					<section class="servicesFetaureBlock container">
						<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span class="textSecondary">SERVICE</span></h1>
						<!-- servicesFetauresList -->
						<ul class="servicesFetauresList list-unstyled text-center">
							<li>
								<a href="#">
									<span class="icnHolder roundedCircle"><i class="fi flaticon-house"></i></span>
									<h2 class="fontNeuron text-capitalize">Saling Service</h2>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="icnHolder roundedCircle"><i class="fi flaticon-rent"></i></span>
									<h2 class="fontNeuron text-capitalize">Renting Service</h2>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="icnHolder roundedCircle"><i class="fi flaticon-list"></i></span>
									<h2 class="fontNeuron text-capitalize">Property Listing</h2>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="icnHolder roundedCircle"><i class="fi flaticon-house-1"></i></span>
									<h2 class="fontNeuron text-capitalize">Property Management</h2>
								</a>
							</li>
						</ul>
					</section>
					<!-- ourAgentBlock -->
					<section class="bgWhite ourAgentBlock">
						<div class="container">
							<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span class="textSecondary">AGENT</span></h1>
							<div class="row">
                                                <?php

                                                $agents = App\User::all()
                                                 ?>
								<!-- profilesSlider -->
                                                {{-- {{dd($agents)}} --}}
								<div class="four-slider slickSlider profilesSlider">
                                                      @foreach ($agents as $row)
                                                          <div>
										<div class="col-xs-12">
											<!-- profileColumn -->
											<article class="profileColumn hasOver">
												<div class="aligncenter">
													<a href="#">
                                                                                    @if (!$row->image == 0)      
                                                                                    <img src="{{asset($row->image)}}" style="width: 265px; height:260px" alt="img">
                                                                                    @else
                                                                                    <img src="https://via.placeholder.com/265x260" alt="Veronica Green Sales Executive">
                                                                                    @endif
													</a>
												</div>
												<div class="textWrap">
													<h2 class="fontNeuron text-capitalize"><a href="#">{{$row->name}}</a></h2>
													<div class="collapseWrap">
														<!-- profileColumnSocial -->
														<ul class="list-unstyled socialNetworks profileColumnSocial">
															<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
															<li><a href="#"><i class="fab fa-twitter"></i></a></li>
															<li><a href="#"><i class="fab fa-instagram"></i></a></li>
															<li><a href="#"><i class="fab fa-google"></i></a></li>
														</ul>
													</div>
												</div>
											</article>
										</div>
									</div>
                                                      @endforeach
									
								</div>
							</div>
						</div>
					</section>
					<!-- sponsorsBlock -->
					<section class="container sponsorsBlock">
						<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span class="textSecondary">PARTNERS</span></h1>
						<!-- LogosCarousel -->
						<div class="logos-slider slickSlider LogosCarousel">
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a href="#">
										<img src="{{asset('frontend/images/sponsor01.png')}}" alt="helsinki">
									</a>
								</div>
							</div>
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a href="#">
										<img src="{{asset('frontend/images/sponsor02.png')}}" alt="norway">
									</a>
								</div>
							</div>
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a href="#">
										<img src="{{asset('frontend/images/sponsor03.png')}}" alt="lars grondahl">
									</a>
								</div>
							</div>
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a href="#">
										<img src="{{asset('frontend/images/sponsor04.png')}}" alt="kirsten">
									</a>
								</div>
							</div>
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a href="#">
										<img src="{{asset('frontend/images/sponsor05.png')}}" alt="only oslo">
									</a>
								</div>
							</div>
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a href="#">
										<img src="{{asset('frontend/images/sponsor02.png')}}" alt="norway">
									</a>
								</div>
							</div>
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a href="#">
										<img src="{{asset('frontend/images/sponsor03.png')}}" alt="lars grondahl">
									</a>
								</div>
							</div>
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a href="#">
										<img src="{{asset('frontend/images/sponsor04.png')}}" alt="kirsten">
									</a>
								</div>
							</div>
						</div>
					</section>
</main>
@endsection
