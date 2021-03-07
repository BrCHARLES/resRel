		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="bg-color dark">
			<div class="container clearfix">
				<div class="row justify-content-between">
					<div class="col-12 col-md-auto mr-md-auto">

						<!-- Top Links ============================================= -->
						<div class="top-links">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="#"><i class="icon-flag"></i>&nbsp; {{ __("Langues") }}</a>
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
							<li><a href="https://www.facebook.com/" class="si-facebook" target="_blank"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="https://twitter.com/" class="si-twitter"  target="_blank"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="https://www.instagram.com/" class="si-instagram"  target="_blank"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="mailto:admin@ressources-relationnelles.fr" class="si-email3"><span class="ts-icon" target="_blank"><i class="icon-envelope-alt"></i></span> </a></li>
						</ul><!-- #top-social end -->
					</div>
				</div>
			</div>
		</div>
 