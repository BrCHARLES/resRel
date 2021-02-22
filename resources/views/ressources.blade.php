RESSOURCES

@foreach ($ressources as $object)
							<div class="col-lg-2 col-sm-3 col-6 mt-4">
								<div class="card hover-effect"> 
                                    <p>Catégorie : {{ $object->cat['name'] }}</p> 
                                    <p>{{ $object->relation}}</p>
									<p>{{ $object->ressource_title }}</p>
                                    <p>{{ $object->ressource_date }}</p>
									<p>{{ $object->ressource_title }}</p>

									<p>{{ $object->ressource_description }}</p>

									<p>{{ $object->ressource_image }}</p>

									<p>{{ $object->video_url }}</p>
                                    <p>{{ $object->content_type }}</p>
									@foreach($object->relations as $relation)

									<hr>
								
									Relation : {{ $relation['relation']}}
								
								<hr>
								
								@endforeach
                                </div>
                                <hr>
							</div>
						@endforeach 