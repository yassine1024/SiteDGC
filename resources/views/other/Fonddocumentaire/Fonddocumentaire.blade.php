@extends('header.template')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@section('content')

    <section id="tabs">
        <br>
        <br>
        <h1 class="text-center">Fond documentaire</h1>
        <br>
        <br>

        <div class="container" style="background-color: white">
            <br>
            <div class="row">
                <ul class="list-group m-2 w-100">
                    <li class="list-group-item  justify-content-between align-items-center">
                       <div class="title" style="font-weight: bold"><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i> Réglement budgétaire de l'exercice 2008</div>
                        <div class="body mt-2">Loi n° 11-01 du 14 Rabie El Aouel 1432 correspondant au 17 février 2011 portant règlement budgétaire de l’exercice 2008</div>
                        <a href="{{asset('assets/download/fond_documentaire/f2011013.pdf')}}" class="badge badge-primary badge-pill " style="margin-left:92%">Télécharger</a>
                    </li>
                    <li class="list-group-item justify-content-between align-items-center">
                        <div class="title" style="font-weight: bold"><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i> Comptabilité publique</div>
                        <div class="body mt-2">Loi N° 90-21 DU 15 Aout 1990 relative à la comptabilité Publique</div>
                        <a href="{{asset('assets/download/fond_documentaire/publique.pdf')}}" class="badge badge-primary badge-pill" style="margin-left:92%">Télécharger</a>
                    </li>
                    <li class="list-group-item justify-content-between align-items-center">
                        <div class="title" style="font-weight: bold"><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i> Nomenclature du trésor</div>
                        <div class="body mt-2"></div>
                        <a href="{{asset('assets/download/fond_documentaire/nomenclature_jan_2012.pdf')}}" class="badge badge-primary badge-pill" style="margin-left:92%">Télécharger</a>
                    </li>
                    <li class="list-group-item justify-content-between align-items-center">
                        <div class="title" style="font-weight: bold"><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i> Gestion financière des collectivités locales</div>
                        <div class="body mt-2">Séminaire : Alger les 27 et 28 Juin 2009</div>
                        <a href="{{asset('assets/download/fond_documentaire/Seminaire.docx')}}" class="badge badge-primary badge-pill" style="margin-left:92%">Télécharger</a>
                    </li>
                    <li class="list-group-item justify-content-between align-items-center">
                        <div class="title" style="font-weight: bold"><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i> Réglement budgétaire de l'exercice 2009</div>
                        <div class="body mt-2">Loi n° 12-08 du 28 Rabie El ouel 1433 correspondant au 21 février 2012 portant règlement budgétaire de l’exercice 2009</div>
                        <a href="{{asset('assets/download/fond_documentaire/f2012012.pdf')}}" class="badge badge-primary badge-pill" style="margin-left:92%">Télécharger</a>
                    </li>
                    <li class="list-group-item justify-content-between align-items-center">
                        <div class="title" style="font-weight: bold"><i class="fa fa-file-pdf-o" style="font-size:24px;color:red"></i> Réglement budgétaire de l'exercice 2010</div>
                        <div class="body mt-2">Loi n° 13-04 du 9 Rabie Ethani 1434 correspondant au 20 février 2013 portant règlement budgétaire pour l’exercice 2010...........</div>
                        <a href="{{asset('assets/download/fond_documentaire/LRB2010.pdf')}}" class="badge badge-primary badge-pill" style="margin-left:92%">Télécharger</a>
                    </li>
                </ul>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title">Réglement budgétaire de l'exercice 2008</h4>--}}
{{--                            <p class="card-text">Loi n° 11-01 du 14 Rabie El Aouel 1432 correspondant au 17 février 2011--}}
{{--                                portant règlement budgétaire de l’exercice 2008</p>--}}
{{--                            <div class="text-center"><a href="{{route('reformee')}}"--}}
{{--                                                        class="btn btn-primary text-center">détails</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title ">Comptabilité publique</h4>--}}
{{--                            <br>--}}
{{--                            <br>--}}
{{--                            <p class="card-text">Loi N° 90-21 DU 15 Aout 1990 relative à la comptabilité Publique</p>--}}
{{--                            <div class="text-center"><a href="{{route('modernn')}}" class="btn btn-primary text-center">détails</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title">Nomenclature du trésor</h4>--}}
{{--                            <br> <br>--}}
{{--                            <p class="card-text"></p>--}}
{{--                            <div class="text-center"><a href="{{route('system')}}" class="btn btn-primary text-center">détails</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title">Gestion financière des collectivités locales</h4>--}}
{{--                            <p class="card-text">Séminaire : Alger les 27 et 28 Juin 2009</p>--}}
{{--                            <div class="text-center"><a href="{{route('reformee')}}"--}}
{{--                                                        class="btn btn-primary text-center">détails</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title ">Réglement budgétaire de l'exercice 2009</h4>--}}
{{--                            <br>--}}
{{--                            <br>--}}
{{--                            <p class="card-text">Loi n° 12-08 du 28 Rabie El ouel 1433 correspondant au 21 février 2012--}}
{{--                                portant règlement budgétaire de l’exercice 2009</p>--}}
{{--                            <div class="text-center"><a href="{{route('modernn')}}" class="btn btn-primary text-center">détails</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title">Réglement budgétaire de l'exercice 2010</h4>--}}
{{--                            <br> <br>--}}
{{--                            <p class="card-text">Loi n° 13-04 du 9 Rabie Ethani 1434 correspondant au 20 février 2013--}}
{{--                                portant règlement budgétaire pour l’exercice 2010...........</p>--}}
{{--                            <div class="text-center"><a href="{{route('system')}}" class="btn btn-primary text-center">détails</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--        </div>--}}

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
