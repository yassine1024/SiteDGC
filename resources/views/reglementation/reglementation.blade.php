@extends('header.template')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
     .center{
        text-align: center;margin: auto;
    }
</style>
@section('content')

    <section id="tabs">
        <br>
        <br>
        <h1 class="text-center">Réglementation</h1>
        <br>
        <br>
        <div class="container" style="background-color: white">
<br>
    <div class="row">
        <br>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title center">Circulaires</h3>
                    <br>
                    <br>
                    <p class="card-text">Toutes les circulaires des années 2008 et 2009</p>
                    <br>
                    <div class="text-center"><a href="{{route('circulaires')}}" class="btn btn-primary text-center">Détails</a></div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title center">Instructions</h3>
                    <br>
                    <br>
                    <p class="card-text">Toutes les instructions des années 2008, 2009, 2010 et 2015</p>
                    <div class="text-center"><a href="{{route('instructions')}}" class="btn btn-primary text-center">Détails</a></div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title center">Receuil de textes</h3>
                    <br>
                    <p class="card-text">Touts les recuiels des circulaires et des instructions depuis 2005 jusqu'à 2015 (Dernière mise à jour du 14/01/2018)</p>
                   <div class="text-center"><a href="{{route('receuil')}}" class="btn btn-primary text-center">Détails</a></div>
                </div>
            </div>
        </div>
    </div>


            <br>
        </div>
    </section>
<br>


@endsection
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
