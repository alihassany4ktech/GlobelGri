@extends('layouts.frontend.app')
@section('content')
 <!-- main -->
				<main>
					<!-- findFormBlock -->
					<form action="#" class="findFormBlock findFormBlock2 bgLightDark hasShadowTop offsetHeaderTop">
						<div class="container">
							<div class="row align-center d-flex">
								<div class="col-xs-12 col-sm-5 col-md-4 col-lg-5">
									<div class="form-group">
										<input type="text" class="form-control elemenBlock noBdr sizeMedium" placeholder="Enter address e.g. street, city and state or zip">
									</div>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-2">
									<div class="form-group">
										<i class="fi flaticon-target icnInput"></i>
										<input type="text" class="form-control elemenBlock noBdr sizeMedium" placeholder="All Cities">
									</div>
								</div>
								<div class="col-xs-12 col-sm-3 col-md-2">
									<div class="form-group">
										<select data-placeholder="All Areas" class="chosen-select noBdr sizeMedium">
											<option value="1">All Areas</option>
											<option value="2">All Areas</option>
											<option value="2">All Areas</option>
											<option value="2">All Areas</option>
										</select>
									</div>
								</div>
								<div class="col-xs-12 col-md-4 col-lg-3">
									<div class="btnsWrap">
										<!-- otherFeaturesOpener -->
										<a class="btnPlus otherFeaturesOpener text-capitalize noTopBottom" role="button" data-toggle="collapse" href="#otherFeaturescollapse" aria-expanded="false" aria-controls="otherFeaturescollapse">
											<i class="fas btnIcn fa-plus-circle text-info opener"></i>
											<i class="fas fa-minus-circle closer btnIcn text-info"></i>
											Advanced
										</a>
										<button type="button" class="btn btnDark buttonSmall text-uppercase fontNeuron hidden-xs">SEARCH</button>
									</div>
								</div>
							</div>
							<!-- orderRow -->
							<div class="row">
								<div class="col-xs-12">
									<!-- otherFeaturesCollapse -->
									<div class="collapse otherFeaturesCollapse" id="otherFeaturescollapse">
										<!-- checkList -->
										<ul class="list-unstyled checkList text-primary">
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Air conditioning</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Cofee pot</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Fan</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Hi-fi</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Balcony</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Computer</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Fridge</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Internet</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Bedding</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Cot</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Grill</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Iron</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Cable TV</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Dishwasher</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Hairdryer</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Juicer</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Cleaning after exit</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">DVD</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Heating</span>
												</label>
											</li>
											<li>
												<label class="fwNormal customLabelCheck">
													<input type="checkbox" class="customFormInputReset">
													<span class="fakeCheckbox"></span>
													<span class="fakeLabel">Lift</span>
												</label>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-xs-12 hidden-sm hidden-md hidden-lg">
									<button type="button" class="btn btnDark text-uppercase fontNeuron">SEARCH</button>
								</div>
							</div>
						</div>
					</form>
					<!-- content -->
					<div id="content" class="container pCombine">
						<section class="block404 text-center">
							<h2 class="fontNeuron">404<span>Page not found.</span></h2>
							<p>The page you are looking for was removed or does not exist. <br>Try using the search form below.</p>
							<div class="searchForm">
								<form>
									<div class="form-group">
										<input type="search" class="form-control" placeholder="Search">
										<button type="submit" class="btn btnSearch "><i class="fi flaticon-search"></i></button>
									</div>
								</form>
							</div>
							<a href="{{route('index')}}" class="buttonL btn btnDark fontNeuron">Back to Home</a>
						</section>
					</div>
					<!-- signupFormAside -->
					<form action="#" class="bgWhite signupFormAside">
						<div class="container signupFormAsideHolder">
							<span class="icnAbsolute elemenBlock fi flaticon-message"></span>
							<div class="col-xs-12 col-md-offset-2 col-md-6">
								<h3 class="fontNeuron textSecondary">Sign up for our newsletter.</h3>
								<p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
							</div>
							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<input type="email" id="email" class="form-control elemenBlock" placeholder="Your email">
									<button type="button" class="buttonReset fi flaticon-navigation"></button>
								</div>
							</div>
						</div>
					</form>
				</main>   
@endsection