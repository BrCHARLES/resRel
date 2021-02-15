@section('title', config('app.name'))
@extends('layouts.appFront')

@section('content')

@include('incs.HeaderBack') 
<div class="container">
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left my-2"><h1>Ajouter un nouveau type</h1>
            </div>
        </div>
    </div>
    <hr>
    <div class="mb-2">
        <button type="button" class="btn btn-info"><a href="{{ route('admin.types.index') }}" ><span style="color: white">Retour à la page types de ressources</span> </a> </button>
    </div>
    <hr>
        <form action="{{ route('admin.type.store') }}" method="POST" >
            {{ csrf_field() }}
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                    <button type="submit" class="button button-3d button-rounded button-red"><i class="icon-off"></i> Envoyer</button>
                </div>
            </div>
        </form>
    </div> 
    @endsection