		<header id="header" class="header-size-sm" data-sticky-shrink="false">
			<div class="container">
				<div class="header-row">
					<nav class="navbar navbar-expand-lg p-0 my-4 w-100">
						<div id="logo">
							<a href="{{ route('welcome', app()->getLocale()) }}" class="standard-logo"><img src="{{ asset('images/logos/logo_white_full_transparency.png') }}" alt="{{ __("Logo Ressources Relationnelles") }}"></a>
							<a href="" class="retina-logo"><img src="{{ asset('images/logos/logo_white_full_transparency.png') }}" alt="{{ __("Logo Ressources Relationnelles") }}"></a>
                        </div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-line-menu"></span>
						</button>
						<div class="collapse navbar-collapse align-items-end" id="navbarNav">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a href="{{ route('welcome', app()->getLocale()) }}" class="st {{ active('welcome') }}" title="Accueil site Ressources Relationnelles">{{ __("Accueil")}}</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('aide', app()->getLocale()) }}" class="st {{ active('aide') }}" title="On vous dit tout sur Ressources Relationnelles">{{ __("Aide")}}</a>
								</li> 
								<li class="nav-item">
									<a href="{{ route('ressources', app()->getLocale()) }}"  class="st {{ active('ressources') }}" title="Toutes les ressources relationnelles">{{ __("Les ressources")}}</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('contact', app()->getLocale()) }}"  class=" st {{ active('contact') }}" title="Contactez un administrateur">{{ __("Contact")}}</a>
								</li>
                                @if (Auth::user())
                                    <li class="nav-item">
                                        <a href="{{ route('dashboard') }}" class=" st {{ active('mon_compte') }}">Mon compte</a>
                                    </li>
                                @endif
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
                                <!-- Authentication -->
                                <form style="margin-top:30px;" method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Logout') }}
                                    </x-jet-dropdown-link>
                                </form>
                            @else
                                <div class="header-buttons mr-3">
                                    <a href="{{ route('register') }}" class="button button-rounded button-border button-small m-0">S'enregistrer</a>
                                    <a href="{{ route('login') }}" class="button button-rounded button-small m-0 ml-2">S'identifier</a>
                                </div>
                            @endif
                            <!-- Top Recherche  ============================================= -->
                            <div id="top-search" class="header-misc-icon">
                                <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                            </div>
            
                         
            
                        </div>
            
                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                        </div>

                        
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
                                                <li class="menu-item"><a class="" href="#"><div>Types de relations</div></a></li>
                                                <li class="menu-item"><a class="menu-link" href="#"><div>Teaching Tools</div></a></li>
                                                <li class="menu-item"><a class="menu-link" href="#"><div>Others</div></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <form class="top-search-form" action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Rechercher" autocomplete="off">
                        </form>
                    </div>
                </div>
            </div>
			<div class="header-wrap-clone"></div>
        </header> 
        