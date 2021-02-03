
@extends('layouts.appFront')

@section('content')

@include('incs.topBarFront')
@include('incs.headerFront') 
		<!-- Content ============================================= -->
        <section id="page-title">

			<div class="container clearfix">
				<h1>A propos de l'application Ressources Relationnelles</h1> 
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Accueil</a></li>
					<li class="breadcrumb-item active" aria-current="page">A propos</li>
				</ol>
			</div>

        </section>
        
        <section id="content">
			<div class="content-wrap">

				<div class="container-fluid px-5 clearfix">

					<div class="row col-mb-50">
						<div class="col-12">
							Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper.
						</div>

						<div class="col-md-6">
							<h5>Half Width</h5>
							Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.
						</div>

						<div class="col-md-6">
							<h5>Half Width</h5>
							Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.
						</div>

						<div class="w-100"></div>  

						 
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

		@include('incs.footerFront')
		@endsection