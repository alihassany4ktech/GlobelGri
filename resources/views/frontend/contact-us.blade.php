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
					 <div class="container-fluid" >
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
                        </div>
					<!-- content -->
					<section id="content" class="container pabIndent">
						<!-- contentFiltersHeadingWrap -->
						<header class="contentFiltersHeadingWrap row">
							<div class="col-xs-12 col-sm-10">
					
								<h1 class="fontNeuron">Contact Us</h1>
							</div>
							<div class="col-xs-12 col-sm-2">
								<!-- viewFilterLinks -->
								<ul class="list-unstyled viewFilterLinks">
									<li><a href="#"><i class="fi flaticon-share"></i></a></li>
									<li><a href="#"><i class="fi flaticon-printer"></i></a></li>
								</ul>
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
											<button type="submit" class="btn  fontNeuron buttonXL" id="form-submit" style="background-color: #8b5925;color:white">Submit</button>
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