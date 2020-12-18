@extends('header.template')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@section('content')
    <br>
    <br>

    <div class="jumbotron">
        <h1 class="display-4">Bienvenue à la rubrique Appel à contribution</h1>
        <p class="lead">Cette rubrique est réservée aux professionnels de la comptabilité, c’est un espace qui leur est
            dédié afin de leur permettre de publier leurs travaux.</p>
        <p class="lead">Les travaux doivent concerner les domaines suivants :</p>

        <ul class="list-group">
            <li class="list-group-item">Comptabilité publique</li>
            <li class="list-group-item">Comptabilité en droit constaté</li>
            <li class="list-group-item">**********</li>
            <li class="list-group-item">*************</li>

        </ul>
        <hr class="my-4">

        <a class="btn btn-primary btn-lg" href="{{route('login')}}" role="button">Continuer</a>
        <a class="btn btn-danger btn-lg" href="#" role="button">Annuler</a>
    </div>
@endsection