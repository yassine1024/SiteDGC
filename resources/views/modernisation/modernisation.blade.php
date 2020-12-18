@extends('header.template')
{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}

{{--link  --}}
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/aos.css')}}" rel="stylesheet">

@section('content')
    <section id="tabs" >
        <br>
        <br>
        <h1 class="text-center">Modernisation</h1>
        <br>
        <br>
        <div class="container" style="background-color: white">
            <br>
            <div class="row" >
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Reforme de la La Profession Comptable</h4>
							
                            <p class="card-text">La profession comptable algérienne a joué un rôle prépondérant et non
                                négligeable dans le développement économique et social de l’économie et des institutions
                                économiques,à chacun des stades de l’histoire économique</p>
                            <div class="text-center"><a href="{{route('reformee')}}"
                                                        class="btn btn-primary text-center">Détails</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title ">Modernisation de Systèmes de Traitement de Paiements</h4>
                            <br>
                            <br>
                            <p class="card-text">Modernisation de Système de Traitement de Paiement s’inscrit dans le
                                cadre de la réforme du secteur bancaire et financier .</p>
                            <div class="text-center"><a href="{{route('modernn')}}" class="btn btn-primary text-center">Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Système comptable Financier</h4>
                            <br> <br>
                            <p class="card-text">Le Système Comptable Financier s'inscrit dans le cadre de la mise à
                                jour des instruments devant accompagner les réformes économiques et financières.</p>
                            <div class="text-center"><a href="{{route('system')}}" class="btn btn-primary text-center">Détails</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </section>
    <br>
@endsection
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"--}}
{{--        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"--}}
{{--        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"--}}
{{--        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"--}}
{{--        crossorigin="anonymous"></script>--}}

<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

