@section('title', 'Toutes les ressources | ' . config('app.name'))
@extends('layouts.appFront')

@section('content')

 @include('incs.headerBack') 
 <section style="padding:30px 0 10px 0; background-color:#999999; border: solid 1px #eee"> 
    <div class="container clearfix">
        <h4>Voir la ressource : {{ $res->ressource_title}}</h4>
    </div> 
</section>  
<div class="container">
    <div class="row my-3"> 
        <button type="button" class="btn btn-info mr-2">
            <a href="{{ route('admin.res.list') }}" class="text-white">Retour aux ressources</a>  
        </button> 
         
        <button type="button" class="btn btn-info mr-2"><a href="{{ url('admin/res/' . $res->id) . '/edit'}}" class="text-white">
            Editer </a> 
        </button> 
        <button type="button" class="btn btn-info"><a href="{{ route('admin.res.create') }}" class="text-white">
            Créer une nouvelle ressource </a> 
        </button>
    </div>
</div>
 
<div class="container"> 
    <div class="entry-title">
        <h2>{{ $res->ressource_title }} :</h2> 
    </div> 
    <div class="entry-meta">
        <ul class="mb-3">
            <li>{{ $res->content_type }} 
                @if( $res->content_type == 'Activité') 
                    <span class="badge badge-info">Activité ludique</span>
                @elseif( $res->content_type == 'Jeu')    
                    <span class="badge badge-info">Activité ludique</span>
                @elseif( $res->content_type == 'carte défi')    
                    <span class="badge badge-info">Activité ludique</span> 
                @elseif( $res->content_type == 'Quizz')    
                    <span class="badge badge-info">Activité ludique</span> 
                @elseif( $res->content_type == 'Concours')    
                    <span class="badge badge-info">Activité ludique</span> 
                @elseif( $res->content_type == 'Activité')    
                    <span class="badge badge-info">Activité ludique</span> 
                @elseif( $res->content_type == 'Jeu en ligne')    
                    <span class="badge badge-info">Activité ludique</span> 
                @else
                    <span class="badge badge-info">Activité informative</span>
                @endif 
            </li>
            <li><i class="icon-calendar3"></i>{{ $res->ressource_date->format('d.m.Y')  }}</li> 
            <li> 
                <i class="icon-user"></i> AUTEUR :
                @if( $res->user )
                     {{ $res->user->name }} 
                @else
                    Equipe Ressources Relationnelle
                @endif
            </li> 
            <li> 
                @foreach($res->relations as $relation) 
                    <span class="badge badge-warning">{{ $relation['relation']}} </span>
                @endforeach
            </li> 
            <li><span class="badge badge-success"> {{ $res->cat->name }} </span></li> 
        </ul> 
    </div> 
    <div class="entry-meta"> 
            @if($res->ressource_image) 
                    <td><img class="catImg" src="/{{ $res->ressource_image }}" alt="{{ $res->ressource_title }}"></td> 
            @endif
            @if($res->video_url) 
                <iframe width="450" height="200" src="{{$res->video_url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @endif
    </div>
    <div class="entry-content mt-0">  
        <p class="mt-3">
            {!! $res->ressource_description !!} 
        </p>  
    </div>
</div>
@endsection