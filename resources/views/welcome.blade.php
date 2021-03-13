@section('title', config('app.name'))
@section('description', '{{ __("Ressources Relationnelles est un site du ministère des solidarités et de la santé pour améliorer notre communication au qutodien")}}')
@section('keywords', '{{ __("Ressources relationnelles")}}') 
@extends('layouts.appFront')

@section('content')

@include('incs.topBarFront')
@include('incs.headerFront') 

		<!-- Slider ============================================= -->
		<section id="slider" class="slider-element min-vh-75 indx">
			<div class="video-overlay" style="background: rgba(22, 134, 199, 0.7); z-index: 1"></div> 
			<div class="slider-inner">
				<div class="vertical-middle">
					<div class="container text-center">
						<div class="row justify-content-center">
							<div class="col-md-7">
								<div class="slider-title mb-3 dark clearfix">
									<h1><span><strong>{{ __("Ressources Relationnelles est une application du Ministère des solidarités et de la santé pour :")}} </strong> 
											</h1>
									<h2 class="text-white text-rotater mb-2" data-separator="," data-rotate="fadeIn" data-speed="3500">
										{{ __("Améliorer ses relations au quotidien")}}<span class="t-rotate text-white">{{ __("avec sa famille")}}, {{ __("avec son/sa conjoint(e)")}}, {{ __("avec ses amis")}}, {{ __("avec des inconnus")}}, {{ __("au travail")}}</span></h2>
							 	</div>
								<div class="clear"></div>
								<div class="input-group input-group-lg mt-1">
									<input class="form-control rounded border-0" type="search" placeholder="{{ __("Rechercher")}}" aria-label="Search">
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
		<!-- Contenu ============================================= -->
		<section id="content">
			<div class="content-wrap" style="overflow: visible;">
				<!-- vagues ============================================= -->
				<div class="wave-bottom" style="position: absolute; top: -11px; left: 0; width: 100%; background-image: url('{{ asset('images/wave.svg') }}'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>

				<div class="container">

					<div class="border-bottom-0 my-2">
						<h3>{{ __("Qu'est-ce que Ressources Relationnelles ?")}}</h3> 
							<h4>{{ __("C'est une application pour mieux communiquer, échanger, s'écouter, se comprendre.") }}
							<br>{{ __("Elle nous aide à répondre à ces questions :")}}</h4> 
							<h5> {{ __("Comment adapter notre communication dans des situations sociales différentes ?")}}<br>
							{{ __("Comment améliorer nos échanges pour fonder des relations coopératives et efficaces ?")}}<br>
							{{ __("Ressources Relationnelles nous aide à faire le point renforcer et enrichir nos relations, dans les situations sociales suivantes : ")}}
						</h5>
					</div>  
					 
					<hr>

						<!-- Categories ============================================= -->
						<div class="heading-block border-bottom-0 mb-5 center">
							<h3>{{ __("Catégories de relations")}}</h3> 
						</div> 
					<div class="clear"></div>
					 
					<div class="row course-categories clearfix mb-4">
						@foreach ($cats as $object)
							@if($object->active == 1)
								<div class="col-lg-2 col-sm-3 col-6 mt-4">
									<div class="card hover-effect">
										<img class="card-img" src="/{{ $object->image }}" alt="{{ $object->name }}">
										<a href="{{ route('ressources',[app()->getLocale()]) }}" class="card-img-overlay rounded p-0" style="background-color: {{ $object->color['rgba'] }};">
											<span><i class="icon{{ $object->icon }}"></i>  {{ $object->name }}</span>
										</a>
									</div>
								</div>
							@endif
						@endforeach 
					</div> 
					<div class="clear"></div>
				</div>
			</div>

				<!-- Section  ============================================= -->
				<div class="section topmargin-lg parallax" style="padding: 80px 0 60px; background-image: url('{{ asset('images/icon-pattern.jpg') }}'); background-size: auto; background-repeat: repeat"  data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -500px;">
					<!-- Vague ============================================= -->
					<div class="wave-top" style="position: absolute; top: 0; left: 0; width: 100%; background-image: url('{{ asset('images/wave.svg') }}'); height: 12px; z-index: 2; background-repeat: repeat-x;"></div>
					<div class="container">
						<div class="heading-block border-bottom-0 mb-5 center">
							<h3>{{ __("Les dernières ressources ajoutées")}} </h3>
						</div>
						<div class="clear"></div>
						<div class="row mt-2">
							<!-- Ressources ============================================= -->
							@foreach ($ressources as $res)
								<div class="col-md-4 mb-5">
									<div class="card course-card hover-effect border-0">
											@if($res->ressource_image) 
												<td><img class="card-img-top" src="/{{ $res->ressource_image }}" alt="{{ $res->ressource_title }}"></td> 
											@else
												<td><img class="card-img-top" src="{{ $res->cat['image'] }}" alt="{{ $res->ressource_title }}"></td> 
											@endif
												<div class="card-body"> 
													<h4 class="card-title font-weight-bold mb-2">
														<a href="{{ route('ressource',[app()->getLocale(), $res->id]) }}">
															 {{ $res->ressource_title }} 
														</a>
													</h4>
													<p class="mb-2 card-title-sub text-uppercase font-weight-normal ls1">
														<a href="#" class="text-black-50"> {{ $res->cat['name'] }} </a>
														- {{ $res->ressource_date->format('d.m.Y') }}
													</p>
													<div class="rating-stars mb-2">	
														<i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half-full"></i> 
															<span>4.7</span>
													</div>
												</div>
												<div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted"> 
													<i class="icon-user"></i> 
														@if( $res->user )
															{{ $res->user->name }} 
														@else
														Equipe Ressources Relationnelle
														@endif  
												</div> 
									</div>
								</div> 
							@endforeach 
						</div>
							  
				</div> 
					<!-- Vague ============================================= -->
					<div class="wave-bottom" style="position: absolute; top: auto; bottom: 0; left: 0; width: 100%; background-image: url('{{ asset('images/wave.svg') }}'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>
				</div>

			 

				<!-- 
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
												<p class="text-white"></p>
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
												<h3 class="text-white">Apprendre</h3>
												<p class="text-white"></p>
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
												<h3 class="text-white">Je veux aider</h3>
												<p><a href="https://www.jeveuxaider.gouv.fr/" class="text-white" title="Je veux aider"><u>Je veux aider</u></a></p>
												<p><a href="https://solidarite-numerique.fr/" class="text-white" title="Solidarités numériques"><u>solidarite numerique</u></a></p>			
											</div>
										</div>
									</div>

									<!-- Feature - 4 ============================================= -->
									<div class="col-md-6">
										<div class="feature-box media-box bottommargin">
											<div class="fbox-icon">
												<a href="#">
													<i class="icon-line2-globe rounded-0 bg-transparent text-left"></i>
												</a>
											</div>
											<div class="fbox-content">
												<h3 class="text-white">J'ai besoin d'aide</h3>
												<p><a href="https://www.allo119.gouv.fr/" class="text-white" title="119"><u>119 enfance en danger</u></a></p>			
												<p><a href="https://www.alcooliques-anonymes.fr/" class="text-white" title="Alcooliques anonymes"><u>Alcooliques anonymes</u></a></p>			

												
											</div>
										</div>
									</div>

								</div>
							</div>

							<!-- Form ============================================= -->
							<div class="col-lg-4">
								<div class="card shadow" data-animate="shake" style="opacity: 1 !important">
									<div class="card-body"> 
										<h4 class="card-title ls-1 mt-4 font-weight-bold h5">Contact flash </h4>
										<div class="form-widget">
											<div class="form-result"></div>
											<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">
												<div class="form-process">
													<div class="css3-spinner">
														<div class="css3-spinner-scaler"></div>
													</div>
												</div>

												<div class="col-12 form-group">
													<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Nom:" />
												</div>
												<div class="col-12 form-group">
													<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Email:" />
												</div>
 

												<div class="col-12 form-group">
													<button class="button button-rounded btn-block button-large bg-color text-white nott ls0 mx-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Envoyez</button>
													<br>
													<small style="display: block; font-size: 12px; margin-top: 15px; color: #AAA;"><em>Merci, nous vous contacterons dans les plus brefs délais. </em></small>
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
				</div>
			</div>
		</section><!-- #content end -->
		 
		@include('incs.footerFront')
		@endsection