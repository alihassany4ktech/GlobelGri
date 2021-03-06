@extends('layouts.frontend.app')
@section('content')
<!-- main -->
                         <?php
                           $phone = '';
                            $email = '';
                            $address = '';
                            $description = '';
                            $setting = App\GeneralSetting::get();
                            foreach ($setting as $row) {
                                $phone = $row->phone;
                                $email = $row->email;
                                $address = $row->address;
                                $description = $row->description;
                                
                            }
                        ?>
				<main>
					<!-- mapFull -->
					 {{-- <div class="container-fluid" >
                              <div class="row">
                              <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="map-area" style="height:530px; margin-left:-1%;margin-right:-1%">
                                          <div id="map-container">
                                          <div id="map_div">
                                                &nbsp;
                                          </div>
                                          </div>
                                    </div>
                              </div>
                              </div>
                        </div> --}}
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
					<!-- content -->
					<section id="content" class="container pabIndent">
						<!-- contentFiltersHeadingWrap -->
						<header class="contentFiltersHeadingWrap row">
							<div class="col-xs-12 col-sm-10">
					
								<h1 class="fontNeuron">Contact Us</h1>
							</div>
						</header>
						<!-- contactMain -->
						<div class="contactMain">
							<div class="row flexSameHeight">
								<div class="col-xs-12 col-sm-7 col-md-8">
									<!-- contactFormPage -->
									<div class="contactFormPage">
										<h4 class="fontNeuron">Send Us Message</h4>
										<form>
											<div class="row">
												<div class="col-xs-12 col-md-6">
													<div class="form-group">
														<input type="text" id="txtname" placeholder="Your Name" class="form-control" required data-error="NEW ERROR MESSAGE">
													</div>
												</div>
												<div class="col-xs-12 col-md-6">
													<div class="form-group">
														<input type="email" id="txtemail" placeholder="Email" class="form-control" required data-error="NEW ERROR MESSAGE">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-md-6">
													<div class="form-group">
														<input type="tel" id="txttel" placeholder="Phone Number" class="form-control" required data-error="NEW ERROR MESSAGE">
													</div>
												</div>
												<div class="col-xs-12 col-md-6">
													<div class="form-group">
														<input type="url" id="txtwebsite" placeholder="Website" class="form-control" required data-error="NEW ERROR MESSAGE">
													</div>
												</div>
											</div>
											<div class="form-group">
												<textarea class="form-control" id="txtmessage" placeholder="Message" required data-error="NEW ERROR MESSAGE"></textarea>
											</div>
											<button type="submit" class="btn  fontNeuron buttonXL" id="form-submit" style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);color:white">Submit</button>
										</form>
									</div>
								</div>
								<div class="col-xs-12 col-sm-5 col-md-4">
									<!-- contactInfoPage -->
									<div class="contactInfoPage">
										<h4 class="fontNeuron">Get In Touch</h4>
										<p>Please note we do not sell houses, we are an advertising platform. For any questions regarding a listing please contact the real estate agent who has placed the property ad.</p>
										<address class="adr">
											<div class="item">
												<i class="fi flaticon-navigation"></i>
                                                                        @if($address)
                                                                        <span class="text">{{$address}}</span>
                                                                            
                                                                        @else
                                                                            <span class="text">Collins Street West, Victoria 8007, Australia.</span>
                                                                        @endif
												
											</div>
											<div class="item">
												<i class="fi flaticon-24-hours"></i>
                                                                        @if ($phone)
                                                                            <span class="text"><a href="tel:+12463450695">{{$phone}}</a></span>
                                                                        @else
                                                                            <span class="text"><a href="tel:+12463450695">+1 246-345-0695</a></span>
                                                                        @endif
												
											</div>
											<div class="item">
												<i class="fi flaticon-mail"></i>
                                                                        @if ($email)
                                                                            <span class="text"><a href="mailto:info@LemanHouse.com">{{$email}}</a></span>
                                                                        @else
                                                                            <span class="text"><a href="mailto:info@LemanHouse.com">info@LemanHouse.com</a></span>
                                                                        @endif
												
											</div>
										</address>
										<ul class="socialNetworks list-unstyled">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
											<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
											<li><a href="#"><i class="fab fa-google"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</section>
				</main>
@endsection