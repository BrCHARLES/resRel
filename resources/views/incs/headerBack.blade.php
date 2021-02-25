
			<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="bg-color dark">
			<div class="container clearfix">
				<div class="row justify-content-between">
					<div class="col-12 col-md-auto mr-md-auto">

						<!-- Top Links ============================================= -->
						<div class="top-links">
						 
						</div><!-- .top-links end -->

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
 
		<div class="header-size-sm" data-sticky-shrink="false" class="bg-color dark">
			<div class="container">
				<div class="header-row">
					<nav class="navbar navbar-expand-lg p-0 my-4 w-100">
						<div>
					    	<span style="titleDasboard">DASHBOARD RESSOURCES RELATIONNELLES ADMIN</span><br/>
							<a href="{{ route('dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 3a9 9 0 0 0-9 9H0l4 4l4-4H5a7 7 0 0 1 7-7a7 7 0 0 1 7 7a7 7 0 0 1-7 7c-1.5 0-2.91-.5-4.06-1.3L6.5 19.14A9.115 9.115 0 0 0 12 21a9 9 0 0 0 9-9a9 9 0 0 0-9-9m2 9a2 2 0 0 0-2-2a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2z" fill="#626262"/></svg> Revenir au dashboard public</a>
                        </div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-line-menu"></span>
						</button>
						
						<div class="collapse navbar-collapse align-items-end" id="navbarNav">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item {{ (request()->is('admin/types')) ? 'active' : '' }}">
									<a href="{{ route('admin.types.index') }}" class="nav-link" title="Les types de ressources">Types de ressources</a>
								</li>
								<li class="nav-item {{ (request()->is('admin/types/create')) ? 'active' : '' }}">
									<a href="{{ url('admin/types/create') }}" class="nav-link" title="Créer une ressource">Créer une ressource</a>
								</li>
								<li class="nav-item {{ (request()->is('admin/datatable')) ? 'active' : '' }}">
									<a href="{{ url('admin/datatable') }}"  class="nav-link" title="Gérer les utilisateurs">Utilisateurs</a>
								</li>
								<li class="nav-item {{ (request()->is('#')) ? 'active' : '' }}">
									<a href="{{ url('#') }}"  class="nav-link" title="Contactez un administrateur">Statistiques</a>
								</li>
							</ul>
						</div>
					</nav>

				</div>
			</div> 
        </div><!-- #header end -->
        <hr>
        