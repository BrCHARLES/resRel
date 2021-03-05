		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="bg-color dark">
			<div class="container clearfix">
				<div class="row justify-content-between">
					<div class="col-12 col-md-auto mr-md-auto">

						<!-- Top Links ============================================= -->
						{{-- <div class="top-links">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="#">{{ __("Langues") }}</a>
									<ul class="top-links-sub-menu">
										@foreach (config('app.available_locales') as $locale)
											<li class="top-links-item">
												<a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
												@if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
											</li> 
										@endforeach
									</ul>
								</li>
							</ul>
						</div><!-- .top-links end --> --}}

					</div>

					<div class="col-12 col-md-auto px-0">

						<!-- Top Links
						============================================= -->
						<div class="top-links">
							<ul class="top-links-container"> 
								<li class="top-links-item d-none d-sm-inline-block"><a href="#"><i class="icon-download-alt"></i> {{ __("Télécharger l'application") }}</a></li>
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
							<a href="{{ route('welcome', app()->getLocale()) }}" class="standard-logo"><img src="{{ asset('images/logoApplication-ressources-relationnelles.png') }}" alt="{{ __("Logo Ressources Relationnelles") }}"></a>
							<a href="" class="retina-logo"><img src="{{ asset('images/logo-ressources-relationnelles.png') }}" alt="{{ __("Logo Ressources Relationnelles") }}"></a>
                        </div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-line-menu"></span>
						</button>
						<div class="collapse navbar-collapse align-items-end" id="navbarNav">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active">
									<a href="{{ route('welcome', app()->getLocale()) }}" class="nav-link" title="Accueil site Ressources Relationnelles">{{ __("Accueil")}}</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('aide', app()->getLocale()) }}" class="nav-link" title="On vous dit tout sur Ressources Relationnelles">{{ __("Aide")}}</a>
								</li> 
								<li class="nav-item">
									<a href="{{ route('ressources', app()->getLocale()) }}"  class="nav-link" title="Toutes les ressources relationnelles">{{ __("Les ressources")}}</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('contact', app()->getLocale()) }}"  class="nav-link" title="Contactez un administrateur">{{ __("Contact")}}</a>
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
                            @if (Auth::user())
                            <span >Bienvenue <?php $user = Auth::user(); echo ucfirst($user->name); ?></span>
                            @else
                                <div class="header-buttons mr-3">
                                    <a href="{{ route('register') }}" class="button button-rounded button-border button-small m-0">S'enregistrer</a>
                                    <a href="{{ route('login') }}" class="button button-rounded button-small m-0 ml-2">S'identifier</a>
                                </div>
                            @endif
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
                            <input type="text" name="q" class="form-control" value="" placeholder="Rechercher" autocomplete="off">
                        </form>
            
                    </div>
                </div>
            </div>
			
			<div class="header-wrap-clone"></div>
        </header><!-- #header end -->
        