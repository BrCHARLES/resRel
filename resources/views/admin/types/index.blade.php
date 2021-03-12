@section('title', config('app.name'))
@extends('layouts.appFront')

@section('content')

@include('incs.HeaderBack') 
<section style="padding:30px 0 10px 0; background-color:#999999; border: solid 1px #eee" class="mb-2"> 
    <div class="container">
        <h4>Voir les types de ressources</h4>
    </div> 
 </section> 
 <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb"> 
            <div>
                <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>Nom</td>
                            {{-- <td>Actif </td>
                            <td>Editer</td>    --}}
                        </tr>
                    </thead>
                    @foreach($types as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->name }}</td>  
                        {{-- <td> 
                         <a href="{{ url('admin/types/activate/' . $type->id) }}" id="activate">
                            @if($type->actif == 1) 
                                <i class="icon-ok" style="color:green" title="Désactiver le type"></i>
                            @else
                                <i class="icon-remove" style="color:red" title="Activer le type"></i>
                            @endif
                        </a> 
                        </td>  
                        <td><a href="{{ url('admin/types/' . $type->id) . '/edit' }}">editer </a></td>  --}}
                    </tr> 
                    @endforeach
                </table>
        </div> 
    </div> 
</div> 
@endsection