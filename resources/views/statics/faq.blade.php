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

					<nav class="navbar navbar-expand-lg p-0 my-4 w-100">
						<div id="logo">
							<a href="route welcom" class="standard-logo"><img src="{{ asset('images/logoApplication-ressources-relationnelles.png') }}" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo"><img src="{{ asset('images/logo-ressources-relationnelles.png') }}" alt="Logo Ressources Relationnelles"></a>
                            
                        </div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-line-menu"></span>
						</button>
						<div class="collapse navbar-collapse align-items-end" id="navbarNav">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active">
									<a class="nav-link" href="#">Accueil</a>
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
								<li class="menu-item"><a class="menu-link" href="#" class="pl-0"><div><i class="icon-line-grid"></i>Catégories de relations</div></a>
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

		<!-- Content
        ============================================= -->
        <section id="page-title">

			<div class="container clearfix">
				<h1>A propos de l'application Ressources Relationnelles</h1>
			 
			</div>

        </section>
        
        <section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row gutter-40 col-mb-80">
						<!-- Post Content
						============================================= -->
						<div class="postcontent col-lg-9">

							<div id="faqs" class="faqs">

								<div id="faqs-list" class="fancy-title title-bottom-border">
									<h3>Foire aux questions </h3>
								</div>

								<ul class="iconlist faqlist">
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-1">How do I become an author?</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-2">Helpful Resources for Authors</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-3">How much money can I make?</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-4">Can I offer my items for free on a promotional basis?</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-5">An Introduction to the Marketplaces for Authors</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-6">How does the Tuts+ Premium affiliate program work?</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-7">What Images, Videos, Code or Music Can I Use in my Items?</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-8">Can I use trademarked names in my items?</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-9">Tips for Increasing Your Referral Income</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-10">How can I get support for an item which isn't working correctly?</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-11">How do I pay for items on the Marketplaces?</a></strong></li>
								</ul>

								<div class="divider"><i class="icon-circle"></i></div>

								<h3 id="faq-1"><strong>Q.</strong> How do I become an author?</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-2"><strong>Q.</strong> Helpful Resources for Authors</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit veniam odio voluptatum. Enim at asperiores quod velit minima officia accusamus cumque eligendi consequuntur fuga? Maiores, quasi, voluptates, exercitationem fuga voluptatibus a repudiandae expedita omnis molestiae alias repellat perferendis dolores dolor.</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-3"><strong>Q.</strong> How much money can I make?</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugiat iste nisi tempore nesciunt nemo fuga? Nesciunt, delectus laboriosam nisi repudiandae nam fuga saepe animi recusandae. Asperiores, provident, esse, doloremque, adipisci eaque alias dolore molestias assumenda quasi saepe nisi ab illo ex nesciunt nobis laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis eligendi a exercitationem nisi et placeat excepturi velit!</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-4"><strong>Q.</strong> Can I offer my items for free on a promotional basis?</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugiat iste nisi tempore nesciunt nemo fuga? Nesciunt, delectus laboriosam nisi repudiandae nam fuga saepe animi recusandae. Asperiores, provident, esse, doloremque, adipisci eaque alias dolore molestias assumenda quasi saepe nisi ab illo ex nesciunt nobis laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis eligendi a exercitationem nisi et placeat excepturi velit!</p>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed facere eos harum ipsum quia recusandae sunt fugit ad quaerat sapiente. Iure, ut maiores commodi voluptas ullam sunt harum autem veniam.</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-5"><strong>Q.</strong> An Introduction to the Marketplaces for Authors</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, quisquam atque vero delectus corrupti! Quo, maiores, dolorem, hic commodi nulla ratione accusamus doloribus fuga magnam id temporibus dignissimos deleniti quidem ipsam corporis sapiente nam expedita saepe quas ab? Vero, assumenda.</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-6"><strong>Q.</strong> How does the Tuts+ Premium affiliate program work?</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad odio ab quis architecto recusandae doloremque incidunt! Eius, quidem, pariatur necessitatibus commodi aliquid deleniti repudiandae accusantium tempora soluta vel nesciunt est quibusdam iure adipisci aspernatur maiores saepe ea eaque quo harum reprehenderit similique nemo voluptate ullam natus illum magnam alias nobis doloremque delectus ipsa dicta repellat maxime dignissimos eveniet quae debitis ratione assumenda tempore officiis fugiat dolor. Saepe iusto praesentium ullam aliquam impedit distinctio blanditiis soluta cum! Fugiat, aliquam, ad, nam mollitia accusantium facere fugit ex libero quidem cupiditate placeat eveniet provident id aspernatur harum sed in enim cum reiciendis delectus.</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-7"><strong>Q.</strong> What Images, Videos, Code or Music Can I Use in my Items?</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad odio ab quis architecto recusandae doloremque incidunt! Eius, quidem, pariatur necessitatibus commodi aliquid deleniti repudiandae accusantium tempora soluta vel nesciunt est quibusdam iure adipisci aspernatur maiores saepe ea eaque quo harum reprehenderit similique nemo voluptate ullam natus illum magnam alias nobis doloremque delectus ipsa dicta repellat maxime dignissimos eveniet quae debitis ratione assumenda tempore officiis fugiat dolor. Saepe iusto praesentium ullam aliquam impedit.</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-8"><strong>Q.</strong> Can I use trademarked names in my items?</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, nisi, laborum autem reprehenderit excepturi harum ipsum quod sit. Inventore et sunt nemo natus labore voluptate omnis reprehenderit culpa. Minus vitae molestiae totam ut a accusamus at fugiat nemo debitis delectus? Consectetur, deleniti, cupiditate ad doloribus numquam minus illum fugit laborum a voluptatum nulla at autem ab beatae odio dolorem assumenda magni laudantium saepe recusandae doloremque illo nesciunt aut quos debitis neque reiciendis veritatis iusto eos aliquid voluptatem pariatur eveniet velit?</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, esse, dolore, animi sed aliquam est consequatur atque magnam sunt voluptas nostrum sint minus neque iste ut velit iure eius! Hic, laudantium, consequatur veniam magnam ullam eveniet sed minus rem deleniti!</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-9"><strong>Q.</strong> Tips for Increasing Your Referral Income</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, nisi, laborum autem reprehenderit excepturi harum ipsum quod sit. Inventore et sunt nemo natus labore voluptate omnis reprehenderit culpa. Minus vitae molestiae totam ut a accusamus at fugiat nemo debitis delectus? Consectetur, deleniti, cupiditate ad doloribus numquam minus illum fugit laborum a voluptatum nulla at autem ab beatae odio dolorem assumenda magni laudantium saepe recusandae doloremque illo nesciunt aut quos debitis neque reiciendis veritatis iusto eos aliquid voluptatem pariatur eveniet velit?</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-10"><strong>Q.</strong> How can I get support for an item which isn't working correctly?</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, culpa eaque! Accusamus, molestiae, aspernatur, consequatur eaque laborum ipsum iure tempora minus laudantium inventore dolor assumenda magni cum id odio quam.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo iusto aliquam voluptatem? Reiciendis, beatae, ipsam delectus voluptas ea error voluptates labore corporis ad tenetur sunt temporibus aperiam sit quis quasi tempora enim quo numquam provident ullam velit cumque similique veritatis quidem aliquam voluptatibus atque fugiat recusandae accusamus praesentium aut ipsa.</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-11"><strong>Q.</strong> How do I pay for items on the Marketplaces?</h3>
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo iusto aliquam voluptatem? Reiciendis, beatae, ipsam delectus voluptas ea error voluptates labore corporis ad tenetur sunt temporibus aperiam sit quis quasi tempora enim quo numquam provident ullam velit cumque similique veritatis quidem aliquam voluptatibus atque fugiat recusandae accusamus praesentium aut ipsa.</p>

							</div>

						</div><!-- .postcontent end -->

						<!-- Sidebar
						============================================= -->
						<div class="sidebar col-lg-3">
							<div class="sidebar-widgets-wrap">

								 

								<div class="widget clearfix">

									<h4>Dernières ressources</h4>
									<div class="posts-sm row col-mb-30" id="post-list-sidebar">
										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto"> 
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li>10th July 2021</li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto"> 
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li>10th July 2021</li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto"> 
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li>10th July 2021</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
 
								<div class="widget clearfix">

									<h4>Notre nouvelle publicité</h4>
									<div class="fluid-width-video-wrapper" style="padding-top: 50%;"><iframe src="//player.vimeo.com/video/103927232" allow="autoplay; fullscreen" allowfullscreen="" id="fitvid0"></iframe></div>

								</div>

							</div>
						</div><!-- .sidebar end -->
					</div>

				</div>
			</div>
		</section>
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