@section('title', 'A propos | ' . config('app.name'))
@extends('layouts.appFront')

@section('content')

@include('incs.topBarFront')
@include('incs.headerFront') 
		<!-- Content ============================================= -->
        <section id="page-title">

			<div class="container clearfix">
				<h1>A propos de l'application Ressources Relationnelles</h1> 
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Accueil</a></li>
					<li class="breadcrumb-item active" aria-current="page">A propos</li>
				</ol>
			</div>

        </section>
        
        <section id="content">
			<div class="content-wrap">

				<div class="container-fluid px-5 clearfix">

					<div class="row col-mb-50">
						<div class="col-12">
							Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper.
						</div>

						<div class="col-md-6">
							<h5>Half Width</h5>
							Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.
						</div>

						<div class="col-md-6">
							<h5>Half Width</h5>
							Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.
						</div>
						<div class="w-100"></div>   
					</div>
				</div>
			</div>
		</section>
		@include('incs.footerFront')
		
@endsection