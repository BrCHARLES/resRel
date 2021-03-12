@section('title', 'Créer une ressource')
@extends('layouts.appFront')

@section('content')

@include('incs.HeaderBack') 
<section style="padding:30px 0 10px 0; background-color:#999999; border: solid 1px #eee"> 
    <div class="container clearfix">
        <h4>Créer une ressource </h4>
    </div> 
 </section>    
 <div class="container">
     <div class="row my-3"> 
         <button type="button" class="btn btn-info mr-2">
             <a href="{{ route('admin.res.list') }}" class="text-white">Retour à la liste des ressources</a>  
         </button>   
    </div>
</div>   
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">  
                <form action="{{ route('admin.res.store') }}" method="POST" style="max-width: 45rem;" enctype="multipart/form-data">
                    {{ csrf_field() }}    
                        <div class="form-group">
                            <label for="ressource_title">Titre</label>
                            <input type="text" class="form-control @error('ressource_title') is-invalid @enderror" name="ressource_title" id="ressource_title" value="{{ old('ressource_title') }}" placeholder="Titre">
                                @error('ressource_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="ressource_stitre">Sous titre</label>
                            <input type="text" class="form-control @error('ressource_stitre') is-invalid @enderror" name="ressource_stitre" id="ressource_stitre" value="{{ old('ressource_stitre') }}" placeholder="Sous titre">
                                @error('ressource_stitre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="ressource_description">Contenu</label>
                            <textarea name="content" class="form-control w-100 @error('ressource_description') is-invalid @enderror" name="ressource_description" id="description-editor" cols="30" rows="9"
                            placeholder="Contenu"></textarea>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <script>
                            tinymce.init({
                                selector: '#description-editor'
                            });
                        </script>

                        <div class="form-group">
                            <label for="ressource_image">Image</label>
                            <input type="file" class="form-control-file" id="ressource_image" name="ressource_image"  value="{{ old('ressource_image') }}" >
                            <br>
                                @error('ressource_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="video_url">URL vidéo</label>
                            <input type="text" class="form-control @error('video_url') is-invalid @enderror" name="video_url" id="video_url" value="{{ old('video_url') }}" placeholder="Sous titre">
                                @error('video_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="content_type">Type de ressource</label> 
                                <div class="input-group-prepend"> 
                                    <select name="content_type" id="content_type" class="form-control">  
                                    <option value="ressource">Ressource</option>  
                                    <option value="cours">Cours</option>  
                                    <option value="ficheLecture">Fiche de lecture</option>     
                                    <option value="activite">Activité</option>   
                                    <option value="jeu">Jeu</option>  
                                    <option value="carteDefi">Carte défi</option> 
                                    <option value="jeuEnLigne">Jeu en ligne</option>  
                                    <option value="quizz">Quizz</option>  
                                    <option value="concours">Concours</option>
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
                            <label for="color">Catégorie</label>
                            <select name="cat_id" id="cat_id" class="form-control">  
                                    @foreach($cats as $cat)
                                        <option value="{{ $cat->id }}">
                                            {{ $cat->name }}
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