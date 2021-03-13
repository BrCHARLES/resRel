@section('title', 'Aide | ' . config('app.name'))
@extends('layouts.appFront')

@section('content')

@include('incs.topBarFront')
@include('incs.headerFront') 
 
		<!-- Content
        ============================================= -->
        <section id="page-title"> 
			<div class="container clearfix">
				<h1>{{ __("COMMENT UTILISER RESSOURCES RELATIONNELLES DANS SON QUOTIDIEN ?")}}</h1>
			</div>

        </section>
        
        <section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row gutter-40 col-mb-80"> 
						<div class="postcontent col-lg-12">

							<div id="faqs" class="faqs">

								<div id="faqs-list" class="fancy-title title-bottom-border">
									<h3>Questions / réponses</h3>
								</div>

								<ul class="iconlist faqlist">
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-1">Ressources Relationnelles qu'est-ce que c'est ? </a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-2">A quoi sert et comment fonctionne Ressources Relationnelles ?</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-3">Pourquoi améliorer ma communication ?</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-4">Ressources Relationnelles n'est pas un site de rencontre, pourquoi ?</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-5">Télécharger l'application</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-6">Comment utiliser l'application ?</a></strong></li>
									<li><i class="icon-caret-right"></i><strong><a href="#" data-scrollto="#faq-7">Je veux proposer une ou des ressource(s)</a></strong></li>
								</ul>

								<div class="divider"><i class="icon-circle"></i></div>

								<h3 id="faq-1">Ressources Relationnelles qu'est-ce que c'est ? </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-2">A quoi sert et comment fonctionne Ressources Relationnelles ?</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit veniam odio voluptatum. Enim at asperiores quod velit minima officia accusamus cumque eligendi consequuntur fuga? Maiores, quasi, voluptates, exercitationem fuga voluptatibus a repudiandae expedita omnis molestiae alias repellat perferendis dolores dolor.</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-3">Pourquoi améliorer ma communication ?</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugiat iste nisi tempore nesciunt nemo fuga? Nesciunt, delectus laboriosam nisi repudiandae nam fuga saepe animi recusandae. Asperiores, provident, esse, doloremque, adipisci eaque alias dolore molestias assumenda quasi saepe nisi ab illo ex nesciunt nobis laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis eligendi a exercitationem nisi et placeat excepturi velit!</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-4">Ressources Relationnelles n'est pas un site de rencontre, pourquoi ?</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugiat iste nisi tempore nesciunt nemo fuga? Nesciunt, delectus laboriosam nisi repudiandae nam fuga saepe animi recusandae. Asperiores, provident, esse, doloremque, adipisci eaque alias dolore molestias assumenda quasi saepe nisi ab illo ex nesciunt nobis laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis eligendi a exercitationem nisi et placeat excepturi velit!</p>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed facere eos harum ipsum quia recusandae sunt fugit ad quaerat sapiente. Iure, ut maiores commodi voluptas ullam sunt harum autem veniam.</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-5"> Télécharger l'application</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, quisquam atque vero delectus corrupti! Quo, maiores, dolorem, hic commodi nulla ratione accusamus doloribus fuga magnam id temporibus dignissimos deleniti quidem ipsam corporis sapiente nam expedita saepe quas ab? Vero, assumenda.</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-6"> Comment utiliser l'application ?</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad odio ab quis architecto recusandae doloremque incidunt! Eius, quidem, pariatur necessitatibus commodi aliquid deleniti repudiandae accusantium tempora soluta vel nesciunt est quibusdam iure adipisci aspernatur maiores saepe ea eaque quo harum reprehenderit similique nemo voluptate ullam natus illum magnam alias nobis doloremque delectus ipsa dicta repellat maxime dignissimos eveniet quae debitis ratione assumenda tempore officiis fugiat dolor. Saepe iusto praesentium ullam aliquam impedit distinctio blanditiis soluta cum! Fugiat, aliquam, ad, nam mollitia accusantium facere fugit ex libero quidem cupiditate placeat eveniet provident id aspernatur harum sed in enim cum reiciendis delectus.</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

								<h3 id="faq-7"> Je veux proposer une ou des ressource(s)</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad odio ab quis architecto recusandae doloremque incidunt! Eius, quidem, pariatur necessitatibus commodi aliquid deleniti repudiandae accusantium tempora soluta vel nesciunt est quibusdam iure adipisci aspernatur maiores saepe ea eaque quo harum reprehenderit similique nemo voluptate ullam natus illum magnam alias nobis doloremque delectus ipsa dicta repellat maxime dignissimos eveniet quae debitis ratione assumenda tempore officiis fugiat dolor. Saepe iusto praesentium ullam aliquam impedit.</p>

								<div class="divider divider-right"><a href="#" data-scrollto="#faqs-list"><i class="icon-chevron-up"></i></a></div>

							 
							</div>

						</div><!-- .postcontent end --> 
								 
					</div>

				</div>
			</div>
		</section>
	 

		@include('incs.footerFront')
		@endsection