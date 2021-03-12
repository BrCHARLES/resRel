@section('title', 'Liste des ressources')
@extends('layouts.appFront')

@section('content')

@include('incs.HeaderBack') 
<section style="padding:30px 0 10px 0; background-color:#999999; border: solid 1px #eee"> 
    <div class="container clearfix">
        <h4>Voir toutes les ressources</h4>
    </div> 
</section>  
<div class="container"> 
    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
</div>    
<div class="container">
    <div class="row my-3">  
        <button type="button" class="btn btn-info"><a href="{{ route('admin.res.create') }}" class="text-white">
            Créer une nouvelle ressource </a> 
        </button>
    </div>
</div> 
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">  
                <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>Titre</td>
                            <td>Sous titre</td>
                            <td>Desription</td>
                            <td>Catégorie</td>
                            <td>Relations</td>
                            <td>Image</td> 
                            <td>Vidéo</td> 
                            <td>Type</td>  
                            <td>Auteur</td> 
                            <td>Active</td>   
                            <td>Voir</td>
                        </tr>
                        
                    </thead> 
                        @foreach($ressources as $ressource)
                        <tr>
                            <td>{{ $ressource->id }}</td>
                            <td>{{ $ressource->ressource_title }}</td>
                            <td>{{ $ressource->ressource_stitre }}</td>
                            <td>{{ $ressource->ressource_description }}</td> 
                            <td>{{ $ressource->cat['name'] }}</td>
                            <td>
                                @foreach($ressource->relations as $relation) 
                                    <span>{{ $relation['relation']}} </span>
                                @endforeach 
                            </td>
                            <td>
                                @if($ressource->ressource_image)
                                    <img class="catImg" src="/{{ $ressource->ressource_image}}" >
                                @endif
                            </td>  
                            <td>Vidéo</td> 
                            <td>{{ $ressource->content_type }}</td>
                            <td>{{ $ressource->user_id }}</td>

                            <td> 
                                <a href="{{ url('admin/res/activate/' . $ressource->id) }}" id="activate">
                                    @if($ressource->active == 1) 
                                        <i class="icon-ok" style="color:green" title="Désactiver la ressource"></i>
                                    @else
                                        <i class="icon-remove" style="color:red" title="Activer la ressourc"></i>
                                    @endif
                                </a> 
                            </td>
                            <td>
                                <a href="{{ route('admin.res.res',  $ressource->id) }}">Voir</a>  

                                {{-- <a href="{{ route('ressource',[app()->getLocale(), $ressource->id]) }}" target="_blank">Voir</a>   --}}
                            </td>
                        </tr> 
                        @endforeach
                </table> 
    </div> 
</div> 
@endsection