<?php
use App\Models\User;
?>
<link href="{{asset(mix('css/dashboard.css'))}}" rel="stylesheet">
@extends('layouts.appFront')
@include('incs.headerBack') 

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div>
    <h1 class="h2">LES STATISTIQUES</h1>
  </div>
</main>

<section class="content">
  <div class="banniere">
    <img class="banniere-statistiques" src="{{ asset('images/logo-statistiques/banniere-statistiques.jpg') }}" alt="">
  </div>
  <div class="adminexport">
    <h2>Importer et exporter les données</h2>
    <button class="btn-success"><a href="{{ route('admin.export.users') }}">Exporter les utilisateurs en excel</a></button>
    <button class="btn-success"><a href="{{ route('admin.export.total') }}">Export total des données en excel</a></button>
  </div>
  <!-- 1ère ligne de tableaux -->
  <div class="tableContainer1">
    <div class="d-flex tableGlobale">
      <table>
        <thead>
          <tr>
            <th class="master_title_table" colspan="30">Vue Globale des données
            </th>
          </tr>
          <tr>
            <th class="title_table" colspan="10">Utilisateurs</th>
            <th class="title_table" colspan="10">Ressources</th>
            <th class="title_table" colspan="10">Commentaires</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td class="nbrglobal" colspan="10">{{$allUsers->count()}}</td>
              <td class="nbrglobal" colspan="10">{{$allRessources->count()}}</td>
              <td class="nbrglobal" colspan="10">{{$allComments->count()}}</td>
          </tr>
        </tbody>
      </table>
      <a href="{{route('admin.statistiques')}}">
        <img class="logo-statistiques reload" src="{{ asset('images/logo-statistiques/reload.png') }}" alt="">
      </a>
    </div>
  </div>

  <!-- 2ème ligne de tableaux -->
  <div class="tableContainer2"class="d-flex">
    <div class="d-flex">
      <img class="logo-statistiques" src="{{ asset('images/logo-statistiques/users.png') }}" alt="">
      <table>
          <thead>
            <tr>
              <th class="master_title_table" colspan="40">Utilisateurs
              </th>
            </tr>
            <tr>
              <th class="title_table" colspan="10">ID</th>
              <th class="title_table" colspan="10">Nom</th>
              <th class="title_table" colspan="10">Email</th>
              <th class="title_table" colspan="10">Rôles</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($allUsers as $user)
              <tr>
                <td colspan="10">{{$user->id}}</td>
                <td colspan="10">{{$user->name}}</td>
                <td colspan="10">{{$user->email}}</td>
                <td colspan="10">{{$user->role}}</td> 
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="d-flex">
        <img class="logo-statistiques" src="{{ asset('images/logo-statistiques/ressources.png') }}" alt="">
        <table>
          <thead>
            <tr>
              <th class="master_title_table" colspan="30">Ressources
              </th>
            </tr>
            <tr>
              <th class="title_table" colspan="10">ID</th>
              <th class="title_table" colspan="10">Titre</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($allRessources as $ressource)
              <tr>
                <td colspan="10">{{$ressource->id}}</td>
                <td colspan="10">{{$ressource->ressource_title}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <div class="tableContainer3">
    <div class="d-flex">
      <img class="logo-statistiques" src="{{ asset('images/logo-statistiques/comments.png') }}" alt="">
      <table>
          <thead>
            <tr>
              <th class="master_title_table" colspan="30">Commentaires
              </th>
            </tr>
            <tr>
              <th class="title_table" colspan="10">ID</th>
              <th class="title_table" colspan="10">Contenu</th>
              <th class="title_table" colspan="10">Date</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($allComments as $comment)
              <tr>
                <td colspan="10">{{$comment->id}}</td>
                <td colspan="10">{{$comment->content}}</td>
                <td colspan="10">{{$comment->date_time}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</section>