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

						
@include('incs.footerFront')
@endsection