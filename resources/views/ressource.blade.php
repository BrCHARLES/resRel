@section('title', 'Toutes les ressources | ' . config('app.name'))
@extends('layouts.appFront')

@section('content')

 @include('incs.headerFrontRes') 

<section id="page-title"> 
	<div class="container clearfix">
		<h1>Consulter</h1>
	</div> 
</section>  
		<div class="container clearfix">
			<div class="row my-3">   
				<a href="{{ route('ressources',[app()->getLocale()]) }}" class="">Retour aux ressources</a>  
			</div>
		</div> 
	<section id="content"> 	
	<div class="container col-lg-12">
		<div class="single-post mb-0"> 
			<div class="entry clearfix"> 
				<div class="entry-title">
					<h2>{{ $ressource->ressource_title }} :</h2>
				</div> 
				<div class="entry-meta">
					<ul class="mb-3">
						<li>{{ $ressource->content_type }} </li>
						<li><i class="icon-calendar3"></i>{{ $ressource->ressource_date }}</li> 
						<li><a href="#"><i class="icon-user"></i> AUTEUR</a></li> 
						<li> 
							@foreach($ressource->relations as $relation) 
								<span class="badge badge-warning">{{ $relation['relation']}} </span>
							@endforeach
						</li> 
						
						<li><span class="badge badge-info"> {{ $ressource->cat->name }} </span></li>
					</ul>
					<p> {{ substr($ressource->ressource_description, 0, 200)." ..." }}   </p>
				</div> 
				@if($ressource->ressource_image) 
						<td><img class="catImg" src="/{{ $ressource->ressource_image }}" alt="{{ $ressource->ressource_title }}"></td> 
				@endif
				@if($ressource->video_url) 
					<iframe width="560" height="315" src="{{$ressource->video_url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				@endif
				<div class="entry-content mt-0">  
							<p class="mt-3">{{ $ressource->ressource_description }}</p> 
					 
					 
					<div class="clear"></div> 
					<div class="si-share border-0 d-flex justify-content-between align-items-center">
						<span>Partager</span>
						<div>
							<a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }} " class="social-icon si-borderless si-facebook" targer="blank">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a> 
							 
						</div>
					</div>
				</div> 

			<!-- Commentaires ============================================= -->
			<div id="comments" class="clearfix">

				<h3 id="comments-title">Commentaires</h3>

				<!-- Comments List ============================================= -->
				<ol class="commentlist clearfix">

					<li class="comment even thread-even depth-1" id="li-comment-1">

						<div id="comment-1" class="comment-wrap clearfix">

							<div class="comment-meta">

								<div class="comment-author vcard">

									<span class="comment-avatar clearfix">
									<img alt="Image" src="https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60" class="avatar avatar-60 photo avatar-default" height="60" width="60"></span>

								</div>

							</div>

							<div class="comment-content clearfix">

								<div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span></div>

								<p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

								<a class="comment-reply-link" href="#"><i class="icon-reply"></i></a>

							</div>

							<div class="clear"></div>

						</div>


						<ul class="children">

							<li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">

								<div id="comment-3" class="comment-wrap clearfix">

									<div class="comment-meta">

										<div class="comment-author vcard">

											<span class="comment-avatar clearfix">
											<img alt="Image" src="https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G" class="avatar avatar-40 photo" height="40" width="40"></span>

										</div>

									</div>

									<div class="comment-content clearfix">

										<div class="comment-author"><a href="#" rel="external nofollow" class="url">SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

										<p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

										<a class="comment-reply-link" href="#"><i class="icon-reply"></i></a>

									</div>

									<div class="clear"></div>

								</div>

							</li>

						</ul>

					</li>

					 

				</ol><!-- .commentlist end -->

				<div class="clear"></div>

				<!-- Comment Form
				============================================= -->
				<div id="respond">

					<h3>Commenter</h3>

					<form class="row" action="#" method="post" id="commentform">
						<div class="col-md-4 form-group">
							<label for="author">Name</label>
							<input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control">
						</div>

						<div class="col-md-4 form-group">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control">
						</div>

						<div class="col-md-4 form-group">
							<label for="url">Website</label>
							<input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control">
						</div>

						<div class="w-100"></div>

						<div class="col-12 form-group">
							<label for="comment">Comment</label>
							<textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
						</div>

						<div class="col-12 form-group">
							<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">Submit Comment</button>
						</div>
					</form>

				</div><!-- #respond end -->

			</div><!-- #comments end -->

		</div>
		</div>
	</div>
	</section>
@include('incs.footerFront')
@endsection