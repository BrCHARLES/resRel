
    <!-- WYSIWIG -->
    <script src="https://cdn.tiny.cloud/1/7uabbpgwo2xxf7clxrykhtxen8eh2h4upl73dtoa72ar3s7k/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

		<div id="top-bar" class="bg-color dark">
			<div class="container clearfix">
				<div class="row justify-content-between"> 
					<div class="col-12 col-md-auto px-0">
						<div class="top-links">
							<ul class="top-links-container">  
								<a href="{{ route('welcome',[app()->getLocale() ]) }}" class="btn btn-primary m-3" target="_blank">Voir le site</a>  

 							</ul>
						</div> 
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
							<a href=" ">
                        </div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-line-menu"></span>
						</button>
						
						<div class="collapse navbar-collapse align-items-end" id="navbarNav">
							<ul class="navbar-nav ml-auto">
								
								<li class="nav-item {{ (request()->is('admin/res')) ? 'active' : '' }}">
									<a href="{{ route('admin.res.list') }}" class="nav-link" title="Ressources">Ressources</a>
								</li>
								<li class="nav-item {{ (request()->is('admin/categories')) ? 'active' : '' }}">
									<a href="{{ route('admin.categories.index') }}" class="nav-link" title="Les catégories de ressources">Catégories</a>
								</li>
								<li class="nav-item {{ (request()->is('admin/types')) ? 'active' : '' }}">
									<a href="{{ route('admin.types.index') }}" class="nav-link" title="Les types de ressources">Types de ressources</a>
								</li> 
								<li class="nav-item {{ (request()->is('admin/datatable')) ? 'active' : '' }}">
									<a href="{{ url('#') }}"  class="nav-link" title="Gérer les utilisateurs">Utilisateurs</a>
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
        