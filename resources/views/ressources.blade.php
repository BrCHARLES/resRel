@section('title', 'Toutes les ressources | ' . config('app.name'))
@extends('layouts.appFront')

@section('content')

@include('incs.topBarFront')
@include('incs.headerFront')  

<section id="page-title"> 
	<div class="container clearfix">
		<h1>{{ __("Les ressources")}}</h1>
	</div>

</section>
@livewire('filters', ['ressources' => $ressources, 'cats' => $cats])

{{-- 
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row gutter-40 col-mb-80"> 
					@foreach ($ressources as $object)	
						<div class="postcontent col-lg-12">  
                                    <p>Catégorie : {{ $object->cat['name'] }}</p> 
                                    <p>{{ $object->relation}}</p>
									<p>{{ $object->ressource_title }}</p>
                                    <p>{{ $object->ressource_date }}</p>
									<p>{{ $object->ressource_title }}</p>
									<p>{{ $object->ressource_description }}</p>
									<p>{{ $object->ressource_image }}</p>
									<p> 
										<video width="320" height="240" controls>
											<source src="{{ $object->video_url }}" type=video/ogg>
											<source src="" type=video/mp4>
										  </video>
										</p> 
									@foreach($object->relations as $relation)
										<hr>
										Relation : {{ $relation['relation']}}
										<hr>
									@endforeach
                        </div>
							
				</div>
						@endforeach 
			</div>
		</div>
	</div> --}}

						
		@include('incs.footerFront')
		@endsection