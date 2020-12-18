@extends('header.template')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@section('content')

    <section id="tabs">
        <br>
        <br>
        <h1 class="text-center">Ecole Nationale du Trésor</h1>
        <br>
        <br>

        <div class="container" style="background-color: white">
            <br>
            <div class="row ">

                <div id="accordion ">
                    <p data-aos="fade-up" class="px-3"> Le Ministere des Finances lance un projet de création d'une École Nationale du
                        Trésor (ENT) de 500
                        places dont 300 internes.</p>

                    <div data-aos="fade-up" class="">
                        <div class="" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link click_advance" data-toggle="collapse"
                                        data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-plus "></i> Objectifs
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Introduction de métiers du Trésor dans le système national de formation afin de répondre
                                aux plans quantitatifs et qualitatifs aux besoins du trésor public
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" class="">
                        <div class="" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed click_advance" data-toggle="collapse"
                                        data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa fa-plus "></i>
                                    Principales missions
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                L'école Nationale du Trésor vise
                                <ul>
                                    <li> La formation initiale des inspecteurs centraux du trésor;</li>
                                    <li> Le perfectionnement et le recyclage des personnels en poste</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" class="">
                        <div class="" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed click_advance" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <i class="fa fa-plus"></i> Programme pédagogique
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordion">
                            <div class="card-body">
                                La formation intègre l'ensemble des actions induites par les missions du trésor Public
                                lle repose sur un programme pédagogique de 18 modules élaboré conjointement avec la DGC
                                , l'ISGP et la DGFIP française
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" class="">
                        <div class="" id="headingfour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed click_advance" data-toggle="collapse"
                                        data-target="#collapsefour" aria-expanded="false"
                                        aria-controls="collapsefour">
                                    <i class="fa fa-plus"></i> Conditions d'accés
                                </button>
                            </h5>
                        </div>
                        <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                             data-parent="#accordion">
                            <div class="card-body">
                                La participation au concours d'accès à la formation initiale des inspecteurs centraux du
                                trésor est ouverte aux candidats titulaire d'une licence de l'enseignement supérieur
                                dans l'une des spécialités ci-après :
                                <ul>
                                    <li> Sciences financières et comptables.</li>
                                    <li> Sciences économiques;</li>
                                    <li> Sciences juridiques et administratives;</li>
                                    <li> Sciences commerciales;</li>
                                    <li> Sciences de gestion ;</li>
                                    <li> Planification et statistiques.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" class="">
                        <div class="" id="headingfive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed click_advance" data-toggle="collapse"
                                        data-target="#collapsefive" aria-expanded="false"
                                        aria-controls="collapsefive">
                                    <i class="fa fa-plus"></i> Démarage de la formation
                                </button>
                            </h5>
                        </div>
                        <div id="collapsefive" class="collapse" aria-labelledby="headingfive"
                             data-parent="#accordion">
                            <div class="card-body">
                                La formation des inspecteurs centraux du trésor démarrera , selon les nouveaux
                                programmes, en 2012 au niveau de l'école Nationale des impôts
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" class="">
                        <div class="" id="headingsix">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed click_advance" data-toggle="collapse"
                                        data-target="#collapsesix" aria-expanded="false"
                                        aria-controls="collapsesix">
                                    <i class="fa fa-plus"></i> Implantation et consistance physique
                                </button>
                            </h5>
                        </div>
                        <div id="collapsesix" class="collapse" aria-labelledby="headingsix"
                             data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>Lieu d'implantation : Tipaza</li>
                                    <li>Capacités d'accueil : 500 places pédagogique dont 300 en hébergement
                                        Surface globale : 10.380 M2
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    {{--                    <div class="">--}}
                    {{--                        <div class="" id="headingseven">--}}
                    {{--                            <h5 class="mb-0">--}}
                    {{--                                <button class="btn btn-link collapsed" data-toggle="collapse"--}}
                    {{--                                        data-target="#collapseseven" aria-expanded="false"--}}
                    {{--                                        aria-controls="collapseseven">--}}

                    {{--                                </button>--}}
                    {{--                            </h5>--}}
                    {{--                        </div>--}}
                    {{--                        <div id="collapseseven" class="collapse" aria-labelledby="headingseven"--}}
                    {{--                             data-parent="#accordion">--}}
                    {{--                            <div class="card-body">--}}

                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                </div>
            </div>

            <br>
        </div>
    </section>

    <br>
    <script>
        $('.click_advance').click(function () {
            // $('#display_advance').toggle('1000');
            $("i", this).toggleClass("fa fa-plus fa fa-minus");
        });
    </script>
    <script>
        AOS.init();
    </script>
@endsection
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
