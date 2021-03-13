<section id="content">   
<div class="row pt-3">
        <div class="container">
            <div class="row border p-3"> 
                @foreach ($cats as $category) 
                    <div class="col-2">
                        <input type="checkbox" wire:model="activeFilters.{{ $category->id }}" class="custom-control-input" id="{{ $category->id }}">
                        <label class="custom-control-label" for="{{ $category->id }}" style="font-size:10px"><i class="fas fa-{{ $category->icon }}"></i> {{ $category->name }}</label>
                    </div> 
                @endforeach
            </div>
        </div>
</div> 
{{-- <div class="row"> 
    <div class="container">
        <h4>Choisir une ou des catégorie(s)</h4>
        @foreach ($cats as $cat)
            <div style="display-inline" class="col-sm-6 py-5"> 
                <input type="checkbox" wire:model="activeFilters.{{ $cat->id }}" class="custom-control-input" id="{{ $cat->id }}">
                <label class="custom-control-label" for="{{ $cat->id }}">  {{ $cat->name }}</label> 
            </div> 
        @endforeach  
    </div>
</div> --}}
<div class="content-wrap">
    <div class="container clearfix">
        <div class="row gutter-40 col-mb-80"> 
            <div class="postcontent col-lg-12 order-sm-1">
                <div class="row">
                        @foreach ($ressources as $ressource)
                            @if(($ressource->active == 1)&& ($ressource->cat['active'] == 1))
                                <div class="col-md-4">  
                                    <div class="card mb-3 Regular shadow">
                                        <div class="card-body">
                                            <span class="date float-right">{{ $ressource->ressource_date }}</span> 
                                            <h5 class="card-title">{{ $ressource->ressource_title }}</h5>   
                                                <span class="badge" style="background-color: {{ $ressource->cat->color->rgba }}">{{ $ressource->cat->name }}</span> 
                                                    @foreach($ressource->relations as $relation) 
                                                        <span class="badge badge-warning">{{ $relation['relation']}} </span>
                                                    @endforeach                                   
                                                <p style="font-size:14px; margin:10px">
                                                    {{ substr($ressource->ressource_description, 0, 100)."..." }}                                      
                                                </p>   
                                                <a href="{{ route('ressource',[app()->getLocale(), $ressource->id]) }}" class="btn btn-primary">Lire la suite</a>  
                                        </div>
                                    </div>
                                </div> 
                            @endif
                        @endforeach
                </div>                 
            </div> 
        </div>
    </div>
</div>
</section>

