@extends('header.template')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


@section('content')

<br><br><br>
    <ul class="list-group">
        <li class="list-group-item"><a href="{{route('contributions.create')}}">Enregistrer une nouvelle demande publication</a></li>
        <li class="list-group-item"><a href="{{route('contributions.index')}}">Consulter le statut de votre demande de publication</a></li>

    </ul>
<br><br><br>
@endsection

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>