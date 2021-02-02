<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>  @yield('title', env('APP_NAME'))</title>
    <link rel="icon" href="{{ asset('ressources-relationnelles.ico') }}" />
	<!-- Styles============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Istok+Web:400,700&display=swap" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/resrel.css') }}" type="text/css" /> 
   
   <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="bg-color dark">
			<div class="container clearfix">

				<div class="row justify-content-between">
					<div class="col-12 col-md-auto mr-md-auto">

						<!-- Top Links
						============================================= -->
						<div class="top-links">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="#">Langues</a>
									<ul class="top-links-sub-menu">
										<li class="top-links-item"><a href="#">Anglais</a></li>
										<li class="top-links-item"><a href="#">Allemand</a></li>
										<li class="top-links-item"><a href="#">Espagnol</a></li>
										<li class="top-links-item"><a href="#">Italien</a></li>
										<li class="top-links-item"><a href="#">Portugais</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- .top-links end -->

					</div>

					<div class="col-12 col-md-auto px-0">

						<!-- Top Links
						============================================= -->
						<div class="top-links">
							<ul class="top-links-container"> 
								<li class="top-links-item d-none d-sm-inline-block"><a href="#"><i class="icon-download-alt"></i> Téléchargez l'application</a></li>
							</ul>
						</div><!-- .top-links end -->

					</div>

					<div class="col-12 col-md-auto pl-0">

						<ul id="top-social">
							<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="#" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span> </a></li>
						</ul><!-- #top-social end -->

					</div>
				</div>

			</div>
		</div>
		<!-- Header
		============================================= -->
		<header id="header" class="header-size-sm" data-sticky-shrink="false">
			<div class="container">
				<div class="header-row">

					<nav class="navbar navbar-expand-lg p-0 my-2 w-100">
						<div id="logo">
							<a href="route welcom" class="standard-logo"><img src="{{ asset('images/logo-ressources-relationnelles.png') }}" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo"><img src="{{ asset('images/logo-ressources-relationnelles.png') }}" alt="Logo Ressources Relationnelles"></a>
                            <span>Projet Nation Communiquante</span>
                        </div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-line-menu"></span>
						</button>
						<div class="collapse navbar-collapse align-items-end" id="navbarNav">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active">
									<a class="nav-link" href="#">Accueil</a>
								</li>
								 <li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Menu déroulant
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="#">Dropdown Item 1</a>
										<a class="dropdown-item" href="#">Dropdown Item 2</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Another Dropdown Item</a>
									</div>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Aide</a>
								</li> 
								<li class="nav-item">
									<a href="#" class="nav-link">A propos</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Contact</a>
								</li>
							</ul>
						</div>
					</nav>

				</div>
			</div>

			<div id="header-wrap" class="bg-light">
				<div class="container">
					<div class="header-row flex-row-reverse flex-lg-row justify-content-between">

						<div class="header-misc">

							<div class="header-buttons mr-3">
								<a href="#" class="button button-rounded button-border button-small m-0">Se connecter</a>
								<a href="#" class="button button-rounded button-small m-0 ml-2">S'identifier</a>
							</div>

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

						 

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">

							<ul class="menu-container">
								<li class="menu-item"><a class="menu-link" href="#" class="pl-0"><div><i class="icon-line-grid"></i>All Categories</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="#"><div><i class="icon-line2-user"></i>Teacher Training</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item"><a class="menu-link" href="#"><div>All Teacher Training</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item"><a class="menu-link" href="#"><div>Level 3</div></a></li>
													</ul>
												</li>
												<li class="menu-item"><a class="menu-link" href="#"><div>Educational Training</div></a></li>
												<li class="menu-item"><a class="menu-link" href="#"><div>Teaching Tools</div></a></li>
												<li class="menu-item"><a class="menu-link" href="#"><div>Others</div></a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element min-vh-75 indx">
			<div class="slider-inner">

				<div class="vertical-middle">
					<div class="container text-center">
						<div class="row justify-content-center">
							<div class="col-md-7">
								<div class="slider-title mb-5 dark clearfix">
									<h2 class="text-white text-rotater mb-2" data-separator="," data-rotate="fadeIn" data-speed="3500">Améliorer ses relations au quotidien <span class="t-rotate text-white">Avec sa famille, son/sa conjoint(e), ses amis, des inconnus, au travail</span></h2>
									<p class="lead mb-0 text-uppercase ls2" style="color: #CCC; font-size: 110%">Comment souhaiteriez-vous communiquer ?</p>
								</div>
								<div class="clear"></div>
								<div class="input-group input-group-lg mt-1">
									<input class="form-control rounded border-0" type="search" placeholder="Search Your Courses.." aria-label="Search">
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
				<div class="wave-bottom" style="position: absolute; top: -12px; left: 0; width: 100%; background-image: url('{{ asset('images/wave.svg') }}'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>

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
										<p class="card-text text-black-50 mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted"> 
										<a href="#" class="text-dark position-relative"><i class="icon-line2-user"></i> <span class="author-number">Professeur Julien DRAY</span></a>
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
										<p class="card-text text-black-50 mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted"> 
										<a href="#" class="text-dark position-relative"><i class="icon-line2-user"></i> <span class="author-number">Professeur Julien DRAY</span></a>
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
										<p class="card-text text-black-50 mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
									<div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted"> 
										<a href="#" class="text-dark position-relative"><i class="icon-line2-user"></i> <span class="author-number">Professeur Julien DRAY</span></a>
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

					<!-- Wave Shape
					============================================= -->
					<div class="wave-bottom" style="position: absolute; top: auto; bottom: 0; left: 0; width: 100%; background-image: url('{{ asset('images/wave.svg') }}'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>

				</div>

			 
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row"> 
						<div class="col-6 col-md"> 
							<ul class="list-unstyled mb-0">
								<li><h5 class="mb-0"><a href="#" class="text-white">Link footer </a></h5> </li>
								<li><h5 class="mb-0"><a href="#" class="text-white">Link footer </a></h5> </li>
							</ul>
						</div>
						<div class="col-6 col-md"> 
							<ul class="list-unstyled mb-0">
								<li><h5 class="mb-0"><a href="#" class="text-white">Link footer </a></h5> </li>
								<li><h5 class="mb-0"><a href="#" class="text-white">Link footer </a></h5> </li>
							</ul>
						</div>
						<div class="col-6 col-md col-sm "> 
							<ul class="list-unstyled mb-0">
								<li><a href="#" class="text-white">Site web réalisé par BeSmart Public</a></li>
								<li><a href="#" class="text-white">Link footer </a></li>
							</ul>
						</div> 
					</div>

				</div> 

			</div>
			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="row align-items-center justify-content-between">
						<div class="col-md-6">
							Copyrights &copy; 2021 | Ressources Relationnelles projet Nation Communiquante | Le Ministère des solidarités et de la santé<br>
							<div class="copyright-links"><a href="https://solidarites-sante.gouv.fr/" target="blanc" title="Lien vers la page du Ministère des solidarités et de la santé">Lien vers la page du Ministère</a></div>
						</div>
 
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>
</html>