@section('title', 'Créer une catégorie')
@extends('layouts.appFront')

@section('content')

@include('incs.HeaderBack') 
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left my-2"><h1>Créer une catégorie : </h1></div>
        </div>
    </div>  
    <hr>
    <div class="mb-2">
        <button type="button" class="btn btn-info"><a href="{{ route('admin.categories.index') }}" ><span style="color: white">Retour à la page des catégories </span> </a> </button>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 margin-tb">  
                <form action="{{ route('admin.category.store') }}" method="POST" style="max-width: 45rem;" enctype="multipart/form-data">
                    {{ csrf_field() }}   
                        <div class="form-group">
                            <label for="name" >Nom de la catégorie</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" placeholder="Nom de la catégorie">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="image" name="image"  value="{{ old('image') }}" >
                            <br>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="icon">Icône</label> 
                                <div class="input-group-prepend"> 
                                <input type="text" id="icon" class="form-control  @error('icon') is-invalid @enderror" name="icon"  value="{{ old('icon') }}" placeholder="Icône">
                                <br>
                                @error('icon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="color">Choisir la couleur de surimpression de l'image</label>
                            <select name="color_id" id="color" class="form-control">  
                                    @foreach($colors as $color)
                                        <option value="{{ $color->id }}"}}>
                                            {{ $color->color }}
                                        </option>
                                    @endforeach
                            </select>	 
                        </div> 
                     
                        <div class="form-group">
                            <button class="btn btn-success">envoyer</button>
                        </div>
                </form>
        </div>
    </div>  
@endsection