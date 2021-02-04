@section('title', config('app.name'))
@extends('layouts.appFront')

@section('content')

@include('incs.topBarFront')
@include('incs.headerFront') 
		<!-- Slider ============================================= -->
		<section id="slider" class="slider-element min-vh-50 indx">
			<div class="video-overlay" style="background: rgba(0,0,0,0.4); z-index: 1"></div>
			<div class="slider-inner">
				<div class="vertical-middle">
					<div class="container text-center">
						<div class="row justify-content-center">
							<div class="col-md-7">
								<div class="slider-title mb-5 dark clearfix">
									<h2 class="text-white text-rotater mb-2" data-separator="," data-rotate="fadeIn" data-speed="3500">Améliorer ses relations au quotidien <span class="t-rotate text-white">avec sa famille, avec son/sa conjoint(e), avec ses amis, avec des inconnus, au travail</span></h2>
							 	</div>
								<div class="clear"></div>
								<div class="input-group input-group-lg mt-1">
									<input class="form-control rounded border-0" type="search" placeholder="Rechercher ..." aria-label="Search">
									<div class="input-group-append">
										<button class="btn" type="submit"><i class="icon-line-search font-weight-bold"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		

		<!-- Content
		============================================= -->
		<section id="content">
			
			<div class="content-wrap" style="overflow: visible;">

				<!-- Wave Shape Divider
				============================================= -->
				<div class="wave-bottom" style="position: absolute; top: -11px; left: 0; width: 100%; background-image: url('{{ asset('images/wave.svg') }}'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>

				<div class="container">

					<div class="heading-block border-bottom-0 my-4 center">
						<h3>Catégories de ressources</h3>
						<span>Communication culture développement personnel qualité de vie recherche de sens
							loisirs monde professionnel
							santé spiritualité vie affective parentalité intelligence émotionnelle
						</span>
					</div>

					<!-- Categories
					============================================= -->
					<div class="row course-categories clearfix mb-4">
						<div class="col-lg-2 col-sm-3 col-6 mt-4">
							<div class="card hover-effect">
								<img class="card-img" src="{{ asset('images/categories/famille.jpg') }}" alt="Card image">
								<a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(251,51,100,0.8);">
									<span><i class="icon-photo"></i>Famille</span>
								</a>
							</div>
						</div>

						<div class="col-lg-2 col-sm-3 col-6 mt-4">
							<div class="card hover-effect">
								<img class="card-img" src="{{ asset('images/categories/famille.jpg') }}" alt="Card image">
								<a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(29,74,103,0.8);">
									<span><i class="icon-code1"></i>Development</span>
								</a>
							</div>
						</div>


						<div class="col-lg-2 col-sm-3 col-6 mt-4">
							<div class="card hover-effect">
								<img class="card-img" src="{{ asset('images/categories/famille.jpg') }}" alt="Card image">
								<a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(50,71,66,0.8);">
									<span><i class="icon-line2-user"></i>Teacher</span>
								</a>
							</div>
						</div>

						<div class="col-lg-2 col-sm-3 col-6 mt-4">
							<div class="card hover-effect">
								<img class="card-img" src="{{ asset('images/categories/famille.jpg') }}" alt="Card image">
								<a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(70,58,69,0.8);">
									<span><i class="icon-food"></i>Food</span>
								</a>
							</div>
						</div>

						<div class="col-lg-2 col-sm-3 col-6 mt-4">
							<div class="card hover-effect">
								<img class="card-img" src="{{ asset('images/categories/famille.jpg') }}" alt="Card image">
								<a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(252,108,52,0.8);">
									<span><i class="icon-chart-bar1"></i>Business</span>
								</a>
							</div>
						</div>

						<div class="col-lg-2 col-sm-3 col-6 mt-4">
							<div class="card hover-effect">
								<img class="card-img" src="{{ asset('images/categories/famille.jpg') }}" alt="Card image">
								<a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(158,108,87,0.8);">
									<span><i class="icon-heartbeat"></i>Health Fitness</span>
								</a>
							</div>
						</div>

						<div class="col-lg-2 col-sm-3 col-6 mt-4">
							<div class="card hover-effect">
								<img class="card-img" src="{{ asset('images/categories/famille.jpg') }}" alt="Card image">
								<a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(164,108,119,0.85);">
									<span><i class="icon-line2-game-controller"></i>Lifestyle</span>
								</a>
							</div>
						</div>

						<div class="col-lg-2 col-sm-3 col-6 mt-4">
							<div class="card hover-effect">
								<img class="card-img" src="{{ asset('images/categories/famille.jpg') }}" alt="Card image">
								<a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(80,167,159,0.8);">
									<span><i class="icon-line2-globe"></i>Language</span>
								</a>
							</div>
						</div>

						<div class="col-lg-2 col-sm-3 col-6 mt-4">
							<div class="card hover-effect">
								<img class="card-img" src="{{ asset('images/categories/famille.jpg') }}" alt="Card image">
								<a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(23,116,234,0.8);">
									<span><i class="icon-paint-brush"></i>Paint</span>
								</a>
							</div>
						</div>

						<div class="col-lg-2 col-sm-3 col-6 mt-4">
							<div class="card hover-effect">
								<img class="card-img" src="{{ asset('images/categories/famille.jpg') }}" alt="Card image">
								<a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(108,156,148,0.85);">
									<span><i class="icon-line2-camera"></i>Photography</span>
								</a>
							</div>
						</div>

						<div class="col-lg-2 col-sm-3 col-6 mt-4">
							<div class="card hover-effect">
								<img class="card-img" src="{{ asset('images/categories/famille.jpg') }}" alt="Card image">
								<a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(227,141,66,0.8);">
									<span><i class="icon-line-share"></i>Digital Marketing</span>
								</a>
							</div>
						</div>

						<div class="col-lg-2 col-sm-3 col-6 mt-4">
							<div class="card hover-effect">
								<img class="card-img" src="{{ asset('images/categories/famille.jpg') }}" alt="Card image">
								<a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(39,103,240,0.8);">
									<span><i class="icon-line-book"></i>Academics</span>
								</a>
							</div>
						</div>

					</div>

					<div class="clear"></div>

				</div>

				<!-- Section Courses
				============================================= -->
				<div class="section topmargin-lg parallax" style="padding: 80px 0 60px; background-image: url('{{ asset('images/icon-pattern.jpg') }}'); background-size: auto; background-repeat: repeat"  data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -500px;">

					<!-- Wave Shape Divider
					============================================= -->
					<div class="wave-top" style="position: absolute; top: 0; left: 0; width: 100%; background-image: url('{{ asset('images/wave.svg') }}'); height: 12px; z-index: 2; background-repeat: repeat-x;"></div>

					<div class="container">

						<div class="heading-block border-bottom-0 mb-5 center">
							<h3>Les dernières ressources ajoutées</h3>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus mollitia ipsum. Voluptatibus, perspiciatis placeat.</span>
						</div>

						<div class="clear"></div>

						<div class="row mt-2">

							<!-- Course 1
							============================================= -->
							<div class="col-md-4 mb-5">
								<div class="card course-card hover-effect border-0">
									<a href="#"><img class="card-img-top" src="{{ asset('images/articles/1.jpg') }}" alt="Card image cap"></a>
									<div class="card-body">
										<h4 class="card-title font-weight-bold mb-2"><a href="#">Partager une passion</a></h4>
										<p class="mb-2 card-title-sub text-uppercase font-weight-normal ls1"><a href="#" class="text-black-50">loisir</a></p>
										<div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half-full"></i> <span>4.7</span></div>
								 	</div>
									<div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted"> 
										<a href="#" class="text-dark position-relative"><i class="icon-line2-user"></i> </a>
									</div>
								</div>
							</div>

							<!-- Course 2
							============================================= -->
							<div class="col-md-4 mb-5">
								<div class="card course-card hover-effect border-0">
									<a href="#"><img class="card-img-top" src="{{ asset('images/articles/2.jpg') }}" alt="Card image cap"></a>
									<div class="card-body">
										<h4 class="card-title font-weight-bold mb-2"><a href="#">Sataniste et alors ?</a></h4>
										<p class="mb-2 card-title-sub text-uppercase font-weight-normal ls1"><a href="#" class="text-black-50">Spiritualité</a></p>
										<div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half-full"></i> <span>4.7</span></div>
							 		</div>
									<div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted"> 
										<a href="#" class="text-dark position-relative"><i class="icon-line2-user"></i ></a>
									</div>
								</div>
							</div>

							<!-- Course 3
							============================================= -->
							<div class="col-md-4 mb-5">
								<div class="card course-card hover-effect border-0">
									<a href="#"><img class="card-img-top" src="{{ asset('images/articles/3.jpg') }}" alt="Card image cap"></a>
									<div class="card-body">
										<h4 class="card-title font-weight-bold mb-2"><a href="#">Garder du lien pendant le Covid</a></h4>
										<p class="mb-2 card-title-sub text-uppercase font-weight-normal ls1"><a href="#" class="text-black-50">Spiritualité</a></p>
										<div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half-full"></i> <span>4.7</span></div>
									 	</div>
									<div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted"> 
										<a href="#" class="text-dark position-relative"><i class="icon-line2-user"></i> </a>
									</div>
								</div>
							</div>
						</div>
							  
				</div> 
					<!-- Wave Shape Divider - Bottom
					============================================= -->
					<div class="wave-bottom" style="position: absolute; top: auto; bottom: 0; left: 0; width: 100%; background-image: url('{{ asset('images/wave.svg') }}'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>
				</div>

				<!-- Instructors Section
				============================================= -->
				<div class="section bg-transparent" style="padding: 60px 0 40px;">
					<div class="container">

						<div class="heading-block border-bottom-0 mb-5 center">
							<h3>Nos contributeurs les plus actifs</h3>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus mollitia ipsum. Voluptatibus, perspiciatis placeat.</span>
						</div>

						<div class="clear"></div>

						<div class="row">

							<!-- Instructors 1
							============================================= -->
							<div class="col-lg-3 col-sm-6 mb-4">
								<div class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-lg fbox-effect">
									<div class="fbox-icon">
										<i><img src="{{ asset('images/auteurs/1.jpg')}}" class="border-0 bg-transparent shadow-sm" style="z-index: 2;" alt="Image"></i>
									</div>
									<div class="fbox-content">
										<h3 class="mb-4 nott ls0"><a href="#" class="text-dark">Dylan Meringue</a><br><small class="subtitle nott color">Digital Marketing</small></h3>
										 <p class="text-dark mt-0"><strong>23</strong> Courses</p>
									</div>
								</div>
							</div>

							<!-- Instructors 2
							============================================= -->
							<div class="col-lg-3 col-sm-6 mb-4">
								<div class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-lg fbox-effect">
									<div class="fbox-icon">
										<i><img src="{{ asset('images/auteurs/2.jpg')}}" class="border-0 bg-transparent shadow-sm" style="z-index: 2;" alt="Image"></i>
									</div>
									<div class="fbox-content">
										<h3 class="mb-4 nott ls0"><a href="#" class="text-dark">Alan Fresco</a><br><small class="subtitle nott color">Health &amp; Fitness</small></h3>
										<p class="text-dark mt-0"><strong>29</strong> Courses</p>
									</div>
								</div>
							</div>

							<!-- Instructors 3
							============================================= -->
							<div class="col-lg-3 col-sm-6 mb-4">
								<div class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-lg fbox-effect">
									<div class="fbox-icon">
										<i><img src="{{ asset('images/auteurs/3.jpg')}}" class="border-0 bg-transparent shadow-sm" style="z-index: 2;" alt="Image"></i>
									</div>
									<div class="fbox-content">
										<h3 class="mb-4 nott ls0"><a href="#" class="text-dark">Gunther Beard</a><br><small class="subtitle nott color">Photography</small></h3>
									 	<p class="text-dark mt-0"><strong>11</strong> Courses</p>
									</div>
								</div>
							</div>

							<!-- Instructors 4
							============================================= -->
							<div class="col-lg-3 col-sm-6 mb-4">
								<div class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-lg fbox-effect">
									<div class="fbox-icon">
										<i><img src="{{ asset('images/auteurs/4.jpg')}}" class="border-0 bg-transparent shadow-sm" style="z-index: 2;" alt="Image"></i>
									</div>
									<div class="fbox-content">
										<h3 class="mb-4 nott ls0"><a href="#" class="text-dark">Desmond Eagle</a><br><small class="subtitle nott color">Lifestyle</small></h3>
									 	<p class="text-dark mt-0"><strong>12</strong> Courses</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Featues Section
				============================================= -->
				<div class="section mt-5 mb-0" style="padding: 120px 0; background-image: url('{{ asset('images/icon-pattern-bg.jpg') }}'); background-size: auto; background-repeat: repeat">

					<!-- Wave Shape
					============================================= -->
					<div class="wave-top" style="position: absolute; top: 0; left: 0; width: 100%; background-image: url('{{ asset('images/wave.svg') }}'); height: 12px; z-index: 2; background-repeat: repeat-x;"></div>

					<div class="container">
						<div class="row">

							<div class="col-lg-8">
								<div class="row dark clearfix">

									<!-- Feature - 1
									============================================= -->
									<div class="col-md-6">
										<div class="feature-box media-box bottommargin">
											<div class="fbox-icon">
												<a href="#">
													<i class="icon-line2-book-open rounded-0 bg-transparent text-left"></i>
												</a>
											</div>
											<div class="fbox-content">
												<h3 class="text-white">538 ressources </h3>
												<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
											</div>
										</div>
									</div>

									<!-- Feature - 2
									============================================= -->
									<div class="col-md-6">
										<div class="feature-box media-box bottommargin">
											<div class="fbox-icon">
												<a href="#">
													<i class="icon-line2-note rounded-0 bg-transparent text-left"></i>
												</a>
											</div>
											<div class="fbox-content">
												<h3 class="text-white">Titre </h3>
												<p class="text-white">Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse.</p>
											</div>
										</div>
									</div>

									<!-- Feature - 3
									============================================= -->
									<div class="col-md-6">
										<div class="feature-box media-box bottommargin">
											<div class="fbox-icon">
												<a href="#">
													<i class="icon-line2-user rounded-0 bg-transparent text-left"></i>
												</a>
											</div>
											<div class="fbox-content">
												<h3 class="text-white">Exp</h3>
												<p class="text-white">Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum quo.</p>
											</div>
										</div>
									</div>

									<!-- Feature - 4
									============================================= -->
									<div class="col-md-6">
										<div class="feature-box media-box bottommargin">
											<div class="fbox-icon">
												<a href="#">
													<i class="icon-line2-globe rounded-0 bg-transparent text-left"></i>
												</a>
											</div>
											<div class="fbox-content">
												<h3 class="text-white">Different Languages</h3>
												<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
											</div>
										</div>
									</div>

								</div>
							</div>

							<!-- Registration Foem
							============================================= -->
							<div class="col-lg-4">

								<div class="card shadow" data-animate="shake" style="opacity: 1 !important">
									<div class="card-body"> 
										<h4 class="card-title ls-1 mt-4 font-weight-bold h5">Titre </h4>
										<h6 class="card-subtitle mb-4 font-weight-normal text-uppercase ls2 text-black-50">Free Registration here.</h6>

										<div class="form-widget">
											<div class="form-result"></div>

											<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

												<div class="form-process">
													<div class="css3-spinner">
														<div class="css3-spinner-scaler"></div>
													</div>
												</div>

												<div class="col-12 form-group">
													<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Your Full Name:" />
												</div>
												<div class="col-12 form-group">
													<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Your Email Address:" />
												</div>

												<div class="col-12 form-group">
													<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control required" placeholder="Your Phone Number:" />
												</div>

												<div class="col-12 form-group">
													<button class="button button-rounded btn-block button-large bg-color text-white nott ls0 mx-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Apply It Now</button>
													<br>
													<small style="display: block; font-size: 12px; margin-top: 15px; color: #AAA;"><em>We'll do our best to get back to you within 6-8 working hours.</em></small>
												</div>

												<div class="col-12 form-group d-none">
													<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
												</div>

												<input type="hidden" name="prefix" value="template-contactform-">

											</form>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- Wave Shape ============================================= -->
					<div class="wave-bottom" style="position: absolute; top: auto; bottom: 0; left: 0; width: 100%; background-image: url('{{ asset('images/wave.svg') }}'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>
				</div>
			</div>
		</section><!-- #content end -->
		
		@include('incs.footerFront')
		@endsection