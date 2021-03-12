@section('title', 'Liste des catégories')
@extends('layouts.appFront')

@section('content')

@include('incs.HeaderBack')  
<section style="padding:30px 0 10px 0; background-color:#999999; border: solid 1px #eee"> 
   <div class="container clearfix">
       <h4>Voir les catégories de ressources :</h4>
   </div> 
</section>    
<div class="container">
    <div class="row my-3"> 
        <button type="button" class="btn btn-info mr-2">
            <a href="{{ route('admin.categories.create') }}" class="text-white">Créer une catégorie</a>  
        </button>  
    </div>
</div>
<div class="container"> 
    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">X</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
</div>    
<div class="container">
    <div class="row">  
        <div class="col-lg-12 margin-tb">  
                <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>Nom</td>
                            <td>Image</td>
                            <td>Icône</td>
                            <td>Couleur overlay</td> 
                            <td>Actif</td>
                            <td>Editer</td>   
                            <td>delete</td>
                        </tr>
                    </thead>
                    @foreach($cats as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->name }}</td>
                        <td><img class="catImg" src="/{{ $cat->image }}" alt="{{ $cat->name }}"></td>  
                        <td><i class="icon{{ $cat->icon }}"></i> </td>  
                        <td style="background-color: {{ $cat->color['rgba'] }};">{{ $cat->color['color'] }}</td>    
                        <td> 
                            <a href="{{ url('admin/categories/activate/' . $cat->id) }}" id="activate">
                                @if($cat->active == 1) 
                                    <i class="icon-ok" style="color:green" title="Désactiver la catégorie"></i>
                                @else
                                    <i class="icon-remove" style="color:red" title="Activer la catégorie"></i>
                                @endif
                            </a> 
                        </td>
                        <td>                             
                            <a href="{{ url('admin/categories/' . $cat->id) . '/edit' }}">editer </a>
                        </td>  
                        <td>

                            <form method="POST" action="{{ route('admin.category.delete', [ 'id'=> $cat->id ]) }}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-icon">
                                  <i data-feather="delete"></i>
                                </button>
                              </form>
                        </td>
                    </tr> 
                    @endforeach
                </table>
        </div> 
    </div> 
</div> 
@endsection