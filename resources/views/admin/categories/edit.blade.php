@section('title', 'Créer une catégorie')
@extends('layouts.appFront')

@section('content')

@include('incs.HeaderBack')
<section style="padding:30px 0 10px 0; background-color:#999999; border: solid 1px #eee"> 
    <div class="container clearfix">
        <h4>Editer une catégorie</h4>
    </div> 
 </section>    
 <div class="container">
     <div class="row my-3"> 
         <button type="button" class="btn btn-info mr-2"> 
             <a href="{{ route('admin.categories.index') }}" class="text-white">
                Retour à la page des catégories 
            </a> 
         </button>  
     </div>
 </div>  
 <div class="container">
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
                                {{-- <input type="text" id="icon" class="form-control  @error('icon') is-invalid @enderror" name="icon"  value="{{ old('icon') }}" placeholder="Icône"> --}}
                                <select name="icon" id="icon" class="form-control">  
                                    <option value="-microphone-alt">micro</option>     
                                    <option value="-palette">palette peinture</option>
                                    <option value="-paint-brush">pinceau</option>
                                    <option value="-hand-holding">main</option>
                                    <option value="-line2-camera">appareil photo</option>
                                    <option value="-line2-game-controller">console jeu</option>
                                    <option value="-briefcase">malette</option>
                                    <option value="-file-medical">santé</option>
                                    <option value="-line-book">livre</option>
                                    <option value="-gratipay">coeur</option>
                                    <option value="-people-arrows">couple</option>
                                    <option value="-line2-user">homme</option>
                                </select>
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
                                        <option value="{{ $color->id }}">
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
 </div>
@endsection