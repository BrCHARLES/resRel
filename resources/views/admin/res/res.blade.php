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
 
	<section id="content"> 	
	<div class="container col-lg-12">
		<div class="single-post mb-0"> 
			<div class="entry clearfix"> 
				
	</section> 
@endsection