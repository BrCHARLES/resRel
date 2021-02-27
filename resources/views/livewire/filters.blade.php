
<section id="content">
<div class="content-wrap">
    <div class="container clearfix">
        <div class="row gutter-40 col-mb-80"> 
            <div class="postcontent col-lg-9 order-sm-1">
                <div class="row">
                    @foreach ($ressources as $ressource)
                        <div class="col-md-6">  
                            <div class="card mb-3 Regular shadow">
                                <div class="card-body">
                                    <span class="date float-right">{{ $ressource->ressource_date }}</span> 
                                    <h5 class="card-title">{{ $ressource->ressource_title }}</h5>  
                                    
                                    <span class="badge badge-info">{{ $ressource->cat->name }}</span> 
                                    @foreach($ressource->relations as $relation) 
                                    <span class="badge badge-warning">{{ $relation['relation']}} </span>
                                    @endforeach
                                    <p>
                                        {{ substr($ressource->ressource_description, 0, 150)."..." }}                                      
                                    </p>  
                                    
                                    <a href="{{route('ressources',  $ressource->slug ) }}" class="btn btn-primary"><i class="fas fa-arrow-right"></i>
                                        Lire la suite
                                    </a>  
                                
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> 
            </div>
<!-- Sidebar catégories ============================================= -->

            <div class="sidebar col-lg-3 order-sm-2">
                <div class="sidebar-widgets-wrap">
                    <div class="widget widget_links clearfix">
                    <h4>Catégories</h4>
                        @foreach ($cats as $cat)
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" wire:model="activeFilters.{{ $cat->id }}" class="custom-control-input" id="{{ $cat->id }}">
                                    <label class="custom-control-label" for="{{ $cat->id }}">  {{ $cat->name }}</label>
                                </div>
                            </div>
                        @endforeach   
                    </div>					 
                </div> 
            </div><!-- fin sidebar -->
        </div>
    </div>
</div>
</section>

