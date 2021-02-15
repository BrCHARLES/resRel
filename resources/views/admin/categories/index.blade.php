@section('title', 'Liste des catégories')
@extends('layouts.appFront')

@section('content')

@include('incs.HeaderBack') 
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left my-2"><h1>Voir les catégories de ressources :</h1>
            </div>
        </div>
    </div>
    <hr>
    <div class="mb-2">
            <button type="button" class="btn btn-info"><a href="{{ url('admin/category/create') }}" ><span style="color: white">Créer une nouvelle catégorie de ressource  </span> </a> </button>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 margin-tb"> 
            <div class="table-responsive">
                <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>Nom</td>
                            <td>Image</td>
                            <td>Icone</td>
                            <td>Couleur</td>
                            <td>Actif </td>
                            <td>Editer</td>   
                        </tr>
                    </thead>
                    @foreach($categories as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->name }}</td>
                        <td><img class="catImg" src="/{{ $cat->image }}" alt="{{ $cat->name }}"></td>  
                        <td>{{ $cat->icon }}</td>  
                        <td>{{ $cat->color }}</td>    
                        <td> 
                         <a href="{{ url('admin/categories/activate/' . $cat->id) }}" id="activate">
                            @if($cat->actif == 1) 
                                <i class="icon-ok" style="color:green" title="Désactiver la catégorie"></i>
                            @else
                                <i class="icon-remove" style="color:red" title="Activer la catégorie"></i>
                            @endif
                        </a> 
                        </td>  
                        <td><a href="{{ url('admin/categories/' . $cat->id) . '/edit' }}">editer </a></td>  
                    </tr> 
                    @endforeach
                </table>
            </div> 
    </div> 
</div> 
@endsection