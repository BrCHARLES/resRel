

<!-- Top Bar ============================================= -->
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
									<li class="top-links-item"><a href="#">Allemand</a></li>
									<li class="top-links-item"><a href="#">Arabe</a></li>
									<li class="top-links-item"><a href="#">Anglais</a></li>
									<li class="top-links-item"><a href="#">Italien</a></li>
									<li class="top-links-item"><a href="#">Espagnol</a></li>
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
							<li class="top-links-item d-none d-sm-inline-block"><a href="#"><i class="icon-download-alt"></i>Télécharger l'application</a></li>
						</ul>
					</div><!-- .top-links end -->

				</div>

				<div class="col-12 col-md-auto pl-0">

					<ul id="top-social">
						<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
						<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
						<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
						<li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@canvas.com</span></a></li>
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

				<nav class="navbar navbar-expand-lg p-0 m-0 w-100">
					<div id="logo">
						<a href="index.html" class="standard-logo"><img src="{{ asset('images/logo-footer.png') }} " alt="Logo"></a>
						<a href="index.html" class="retina-logo"><img src="{{ asset('images/logo@2x.png') }} " alt="Logo"></a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-line-menu"></span>
					</button>
					<div class="collapse navbar-collapse align-items-end" id="navbarNav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="{{ route('home') }}">Accueil</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('ressources') }}">Ressources</a>
							</li>
							 {{-- <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Members
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Dropdown Item 1</a>
									<a class="dropdown-item" href="#">Dropdown Item 2</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Another Dropdown Item</a>
								</div>
							</li> --}}
						
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
				<div class="container">
					<div class="header-row flex-row-reverse flex-lg-row justify-content-between">
						<div class="header-misc"> 
                <div class="header-buttons mr-3">
				  @if (Auth::user()) 
                    <div class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="btn">Déconnexion</button>
                    </form>
                  </div>
                  @else
                  <a class="button button-rounded button-border button-small m-0"  href="{{ route('login') }}">Connexion</a>
                  <a class="button button-rounded button-small m-0 ml-2" href="{{ route('register') }}">Inscription</a> 
                  @endif
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
										<li class="menu-item"><a class="menu-link" href="#"><div><i class="icon-chart-bar1"></i>Business</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item"><a class="menu-link" href="#"><div>All Business Classes</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item"><a class="menu-link" href="#"><div>Level 3</div></a></li>
													</ul>
												</li>
												<li class="menu-item"><a class="menu-link" href="#"><div>Finance</div></a></li>
												<li class="menu-item"><a class="menu-link" href="#"><div>Sales</div></a></li> 
											</ul>
										</li> 
										<li class="menu-item"><a class="menu-link" href="#"><div><i class="icon-music1"></i>Music</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item"><a class="menu-link" href="#"><div>All Music Classes</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item"><a class="menu-link" href="#"><div>Level 3</div></a></li>
													</ul>
												</li>
												<li class="menu-item"><a class="menu-link" href="#"><div>Instrumental</div></a></li> 
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
            <!-- end heeader-misc-->
          </div>
          <!-- end container-->
		</div>   
</header><!-- #header end --> 
