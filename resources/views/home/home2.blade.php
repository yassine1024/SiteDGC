@extends('header.template')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@section('content')


    <div class="container" style=" z-index: 2;">
        <br>
        <div class="row border">


        {{--         row--}}
        {{--            <div class="col-lg-6">--}}

        {{--                <div id="carouselExampleSlidesOnly" class="carousel slide" data-pause="carousel">--}}
        {{--                    <div class=" carousel-inner" style="border: 1px solid black">--}}

        {{--                        <div class="carousel-item active">--}}
        {{--                            <div class="row">--}}
        {{--                                <div class="row">--}}
        {{--                                    <div class="col-md-6 col-md-0 p-3 hvr">--}}

        {{--                                        <a href="#"><img class="card-img-top"--}}
        {{--                                                         src="{{asset('assets/images/qui_la_dgc.png')}}"--}}
        {{--                                                         alt="Card image cap"></a>--}}

        {{--                                        --}}{{--                            <div class="card-body">--}}
        {{--                                        --}}{{--                                <h5 class="card-title text-center">--}}
        {{--                                        --}}{{--                                    <a href="#">C'est qui la DGC.</a>--}}
        {{--                                        --}}{{--                                </h5>--}}
        {{--                                        --}}{{--                                <p class="card-text"></p>--}}
        {{--                                        --}}{{--                            </div>--}}

        {{--                                    </div>--}}

        {{--                                    <div class="col-md-6 col-md-0 mb-auto p-3 hvr">--}}

        {{--                                        <a href="#"><img class="card-img-top"--}}
        {{--                                                         src="{{asset('assets/images/Annuaire_des_services_de_la_DGC.png')}}"--}}
        {{--                                                         alt="Card image cap"></a>--}}
        {{--                                        --}}{{--                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>--}}
        {{--                                        --}}{{--                            <div class="card-body">--}}
        {{--                                        --}}{{--                                <h5 class="card-title text-center">--}}
        {{--                                        --}}{{--                                    <a href="#">Annuaire des services de la DGC.</a>--}}
        {{--                                        --}}{{--                                </h5>--}}
        {{--                                        --}}{{--                                <p class="card-text"></p>--}}
        {{--                                        --}}{{--                            </div>--}}

        {{--                                    </div>--}}

        {{--                                </div>--}}
        {{--                                <div class="row">--}}
        {{--                                    <div class="col-md-6 col-md-0 mb-auto p-3 hvr">--}}

        {{--                                        <a href="#"><img class="card-img-top"--}}
        {{--                                                         src="{{asset('assets/images/adresse.png')}}"--}}
        {{--                                                         alt="Card image cap"></a>--}}

        {{--                                        --}}{{--                            <div class="card-body">--}}
        {{--                                        --}}{{--                                <h5 class="card-title text-center">--}}
        {{--                                        --}}{{--                                    <a href="#">C'est qui la DGC.</a>--}}
        {{--                                        --}}{{--                                </h5>--}}
        {{--                                        --}}{{--                                <p class="card-text"></p>--}}
        {{--                                        --}}{{--                            </div>--}}

        {{--                                    </div>--}}

        {{--                                    <div class="col-md-6 col-md-0 mb-auto p-3 hvr">--}}

        {{--                                        <a href="#"><img class="card-img-top"--}}
        {{--                                                         src="{{asset('assets/images/formulaire.png')}}"--}}
        {{--                                                         alt="Card image cap"></a>--}}
        {{--                                        --}}{{--                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>--}}
        {{--                                        --}}{{--                            <div class="card-body">--}}
        {{--                                        --}}{{--                                <h5 class="card-title text-center">--}}
        {{--                                        --}}{{--                                    <a href="#">Annuaire des services de la DGC.</a>--}}
        {{--                                        --}}{{--                                </h5>--}}
        {{--                                        --}}{{--                                <p class="card-text"></p>--}}
        {{--                                        --}}{{--                            </div>--}}

        {{--                                    </div>--}}

        {{--                                </div>--}}


        {{--                            </div>--}}
        {{--                            <div class="carousel-item ">--}}
        {{--                                <div class="row">--}}

        {{--                                    <div class="col-lg-3 col-md-6 mb-4">--}}
        {{--                                        <div class="card h-100 hvr">--}}
        {{--                                            <a href="#"><img class="card-img-top"--}}
        {{--                                                             src="{{asset('assets/images/Consultation_de_solde.png')}}"--}}
        {{--                                                             alt="Card image cap"></a>--}}
        {{--                                            --}}{{--                                        <div class="card-body">--}}
        {{--                                            --}}{{--                                            <h5 class="card-title text-center">--}}
        {{--                                            --}}{{--                                                <a href="#">Consultation des soldes.</a>--}}
        {{--                                            --}}{{--                                            </h5>--}}
        {{--                                            --}}{{--                                            <p class="card-text"></p>--}}
        {{--                                            --}}{{--                                        </div>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="col-lg-3 col-md-0 mb-0" style="border: 1px solid black">--}}
        {{--                                        --}}{{--                                    <div class="card-body  hvr border"  >--}}
        {{--                                        <a href="#"><img width="200px;" height="100%"--}}
        {{--                                                         src="{{asset('assets/images/Registre_de_doléances1.png')}}"--}}
        {{--                                                         alt="Card image cap"></a>--}}
        {{--                                        --}}{{--                                        <a href="#"><img class="card-img-top" src="" alt=""></a>--}}
        {{--                                        --}}{{--                                        <div class="card-body">--}}
        {{--                                        --}}{{--                                            <h5 class="card-title text-center">--}}
        {{--                                        --}}{{--                                                <a href="#">Registre de doléances.</a>--}}
        {{--                                        --}}{{--                                            </h5>--}}
        {{--                                        --}}{{--                                            <p class="card-text"></p>--}}
        {{--                                        --}}{{--                                        </div>--}}
        {{--                                        --}}{{--                                    </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="col-lg-3 col-md-6 mb-4">--}}
        {{--                                        <div class="card h-100 hvr">--}}
        {{--                                            <a href="#"><img class="card-img-top"--}}
        {{--                                                             src="{{asset('assets/images/Réglementation.png')}}"--}}
        {{--                                                             alt="Card image cap"></a>--}}
        {{--                                            --}}{{--                                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>--}}
        {{--                                            --}}{{--                                        <div class="card-body">--}}
        {{--                                            --}}{{--                                            <h5 class="card-title text-center">--}}
        {{--                                            --}}{{--                                                <a href="#">Réglementation.</a>--}}
        {{--                                            --}}{{--                                            </h5>--}}
        {{--                                            --}}{{--                                            <p class="card-text"></p>--}}
        {{--                                            --}}{{--                                        </div>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="col-lg-3 col-md-6 mb-4">--}}
        {{--                                        <div class="card h-100 hvr">--}}
        {{--                                            <a href="#"> <img class="card-img-top"--}}
        {{--                                                              src="{{asset('assets/images/Fond_documentaire.png')}}"--}}
        {{--                                                              alt="Card image cap"></a>--}}
        {{--                                            --}}{{--                                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>--}}
        {{--                                            --}}{{--                                        <div class="card-body">--}}
        {{--                                            --}}{{--                                            <h5 class="card-title text-center">--}}
        {{--                                            --}}{{--                                                <a href="#">Fond documentaire.</a>--}}
        {{--                                            --}}{{--                                            </h5>--}}
        {{--                                            --}}{{--                                            <p class="card-text"></p>--}}
        {{--                                            --}}{{--                                        </div>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}


        {{--                                </div>--}}


        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button"--}}
        {{--                           data-slide="prev">--}}
        {{--                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
        {{--                            <span class="sr-only">Previous</span>--}}
        {{--                        </a>--}}
        {{--                        <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button"--}}
        {{--                           data-slide="next">--}}
        {{--                            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        {{--                            <span class="sr-only">Next</span>--}}
        {{--                        </a>--}}


        {{--                    </div>--}}

        {{--                </div>--}}


        {{--                <!-- /.row -->--}}
        {{--                --}}{{--     40b7ad  #bdc5ff  row--}}


        {{--            </div>--}}

        {{--            carousel photo--}}
        <!-- /.col-lg-9 -->
            <div class="col-lg-5">
                <div style="width: 100%;height: 100%"
                     id="carouselExampleControls" class="carousel slide"
                     data-ride="carousel">
                    <div class="carousel-inner"
                         style="width: 100%;height: 100%;border: 1px solid grey;background-color: rgba(87,130,255,0.39);">
                        <div class="carousel-item active" style=" width: 100%;height: 100%;">
                            <br>
                            <img style="margin: auto" class="d-block w-50 h-50"
                                 src="{{asset('assets/images/user_icon.png')}}"
                                 href="#" alt="First slide">
                            <br>
                            <table class="table " style="width: 90%;margin: auto;">
                                <tr>
                                    <th>Auteur :</th>
                                    <td>Younes et Yassine</td>
                                </tr>
                                <tr>
                                    <th>Diplôme :</th>
                                    <td>Ingénieur d'etat en informatique</td>
                                </tr>
                                <tr>
                                    <th>Fonction :</th>
                                    <td>Ingénieur d'etat en informatique</td>
                                </tr>
                                <tr>
                                    <th>Organisme :</th>
                                    <td>Direction Général De La Comptabilite</td>
                                </tr>

                            </table>
                        </div>
                        {{--                        <div class="carousel-item" style=" width: 100%;height: 100%">--}}
                        {{--                            <img class="d-block w-100 h-100" src="{{asset('assets/images/carousel2.jpg')}}"--}}
                        {{--                                 alt="Second slide">--}}
                        {{--                        </div>--}}
                        <div class="carousel-item">

                            <table class="table ">

                                <tr>
                                    <th>Thème de la publication:</th>
                                    <td>Comment l’intelligence artificielle va changer nos vies</td>
                                </tr>
                                <tr>
                                    <th>Date de publication:</th>
                                    <td>13/09/2020 09:00</td>
                                </tr>
                                <tr>
                                    <th>Description:</th>
                                    <td class="descript">
                                        <?php
                                        $str = "Ces systèmes intelligents ouvrent aussi de nouvelles pistes de recherche. « Nous allons voir apparaître des corrélations inattendues, par exemple qu’une molécule développée dans un autre domaine pourrait avoir des effets bénéfiques sur la dégénérescence maculaire liée à l’âge », illustre José-Alain Sahel. Ces systèmes pourront plus rapidement mettre en corrélation gène, diagnostic, symptôme et environnement, en brassant une quantité astronomique de données scientifiques désordonnées, et faire tendre la recherche médicale vers un changement de paradigme. Alors que la méthodologie classique de recherche part d’une hypothèse à explorer, désormais elle se contentera peut-être d’analyser les données et de voir ce qui en ressort. Ces sciences dites « omiques », comme la génomique ou la protéomique, prédisent une médecine de plus en plus personnalisée, appuyée par l’intelligence artificielle. Reste à savoir si ces avancées technologiques seront accessibles à tous et pertinentes.";
                                        $n = strlen($str);
                                        if ($n > 600)
                                            $str1 = substr($str, 0, 700) . ' ';
                                        echo($str1);
                                        ?>
                                        <div id="divhide" style="display: none"> <?php
                                            $str2 = substr($str, 700, $n);
                                            echo($str2);
                                            ?></div>
                                        <a href="#" id="sshow"><span id="">Lire la suite</span></a>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>


            {{--end carousel photo--}}
            <div style="overflow-y:scroll; height:470px;" class="col-lg-7 ">
                <div class="row">
                    <div class="col-md-3 col-md-0 p-1 hvr border">

                        <a href="#"><img class="card-img-top"
                                         src="{{asset('assets/images/qui_la_dgc.png')}}"
                                         alt="Card image cap"></a>
                        <div class="card-body p-0">
                            <h5 class="card-title text-center">
                                <a href="{{route('whosdgcInfo')}}">{{ trans('site.Qu\'est-ce que la DGC') }}</a>
                            </h5>
                        </div>

                    </div>
                    <div class="col-md-3 col-md-0 p-1 hvr">

                        <a href="#"><img class="card-img-top"
                                         src="{{asset('assets/images/Annuaire_des_services_de_la_DGC.png')}}"
                                         alt="Card image cap"></a>
                        <div class="card-body p-0">
                            <h5 class="card-title text-center">
                                <a href="{{route('annuaire')}}">{{ trans('site.Annuaire des services de la DGC') }}</a>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-0 p-1 hvr">

                        <a href="#"><img class="card-img-top"
                                         src="{{asset('assets/images/adresse.png')}}"
                                         alt="Card image cap"></a>
                        <div class="card-body p-0">
                            <h5 class="card-title text-center">
                                <a href="{{route('modernisation')}}">{{ trans('site.Réformes / Modernisation') }}</a>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-0 p-1 hvr">

                        <a href="#"><img class="card-img-top"
                                         src="{{asset('assets/images/formulaire.png')}}"
                                         alt="Card image cap"></a>
                        <div class="card-body p-0">
                            <h5 class="card-title text-center">
                                <a href="{{route('loiDeBudguter')}}">{{ trans('site.Loi de règlement budgétaire LRB') }}</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-md-0 p-1 hvr">

                        <a href="#"><img class="card-img-top"
                                         src="{{asset('assets/images/Consultation_de_solde.png')}}"
                                         alt="Card image cap"></a>
                        <div class="card-body p-0">
                            <h5 class="card-title text-center">
                                <a href="{{ route('tableauDeBord') }}">{{ trans('site.Tableau de bord /indicateur') }}</a>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-0 p-1 hvr">

                        <a href="#"><img class="card-img-top"
                                         src="{{asset('assets/images/Registre_de_doléances1.png')}}"
                                         alt="Card image cap"></a>
                        <div class="card-body p-0">
                            <h5 class="card-title text-center">
                                <a href="{{route('registreDoleances')}}">{{ trans('site.Registre de doléances') }}</a>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-0 p-1 hvr">

                        <a href="{{route('reglementation')}}"><img class="card-img-top"
                                                                   src="{{asset('assets/images/Réglementation.png')}}"
                                                                   alt="Card image cap"></a>
                        <div class="card-body p-0">
                            <h5 class="card-title text-center">
                                <a href="{{route('reglementation')}}">{{ trans('site.Réglementation') }}</a>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-0 p-1 hvr">

                        <a href="#"><img class="card-img-top"
                                         src="{{asset('assets/images/Infrastructures.png')}}"
                                         alt="Card image cap"></a>
                        <div class="card-body p-0">
                            <h5 class="card-title text-center">
                                <a href="{{ route('infrastructures') }}">{{ trans('site.Infrastructures') }}</a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3 col-md-0 p-1 hvr border h-25 d-inline-block" style="margin: auto">

                        <a href="#"><img class="card-img-top"
                                         src="{{asset('assets/images/note.png')}}"
                                         alt="Card image cap"></a>
                        <div class="card-body p-0">
                            <h5 class="card-title text-center">
                                <a href="{{route('descriptionContribution')}}">{{ trans('site.Appel à contribution') }}</a>
                                {{--{{route('contributions.index')}}--}}
                            </h5>
                        </div>

                    </div>
                    {{--                    <div class="col-sm-3 col-md-0 p-1 hvr h-25 d-inline-block" style="margin-right: auto">--}}

                    {{--                        <a href="#"><img class="card-img-top"--}}
                    {{--                                         src="{{asset('assets/images/periscope1.png')}}"--}}
                    {{--                                         alt="Card image cap"></a>--}}
                    {{--                        <div class="card-body p-0">--}}
                    {{--                            <h5 class="card-title text-center">--}}
                    {{--                                <a href="{{route('periscope')}}">{{ trans('site.Périscope de la DGC') }}</a>--}}
                    {{--                            </h5>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                </div>


            </div>

        </div>
        <!-- /.row -->
        {{--contact nous--}}
        <br>
        <br> <br>
        <div class="col-lg-12 pt-2" style=" background-color: #DBF3FA;">

            <div class="row  pt-2 pl-3 pr-3 pb-3 pt-1 w-100" >

                <div class="col-lg-6 ">
                    <a class="" href="#">Evénements</a>
                    <p>Liens utiles :</p>
                    <ul>
                        <li><a href="#">Messagerie du Ministère des Finances</a></li>
                        <li><a href="#">Site web du Ministère des Finances</a></li>
                        <li><a href="#">Site web du CNC</a></li>
                    </ul>

                    <br>
                    <p>Compteur de visiteurs : 1</p>
                </div>
                <div class="col-lg-6 ">
                    <ul>
                        <li><a href="{{route('descriptionContribution')}}">Appel à contribution</a></li>
                        <li><a href="#">Systeme d'information du trésor</a></li>
                        {{--                        <li><a href="{{ route('ecolenationaledutrésor') }}">Ecole Nationale du Trésor</a></li>--}}
                        <li><a href="#">Système de  comptabilité de gestion des  hôpitaux (projet 3 COH)</a></li>
                        <li><a href="{{ route('fonddocumentaire') }}">Fond documentaire</a></li>
                        <li><a href="#">Situations numériques des RRF et des EPA</a></li>
                        <li><a href="#">Trésoreries communales par wilaya</a></li>
                        <li><a href="{{route('utiles')}}">Informations utiles</a></li>
                        <li><a href="{{route('periscope')}}">Périscope de la DGC</a></li>



                    </ul>
                </div>


                <!--Form with header-->

            {{--                <form action="mail.php" method="post">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-header p-0">--}}
            {{--                            <div class="bg-info text-white text-center py-2">--}}
            {{--                                <h3><i class="fa fa-envelope"></i> {{ trans('site.Contacter nous') }}</h3>--}}

            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="card-body p-3">--}}

            {{--                            <!--Body-->--}}
            {{--                            <div class="form-group">--}}
            {{--                                <div class="input-group mb-2">--}}
            {{--                                    <div class="input-group-prepend">--}}
            {{--                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>--}}
            {{--                                    </div>--}}
            {{--                                    <input type="text" class="form-control" id="nom" name="nom"--}}
            {{--                                           placeholder="{{ trans('site.Le nom') }}" required>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="form-group">--}}
            {{--                                <div class="input-group mb-2">--}}
            {{--                                    <div class="input-group-prepend">--}}
            {{--                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>--}}
            {{--                                    </div>--}}
            {{--                                    <input type="email" class="form-control" id="nombre" name="email"--}}
            {{--                                           placeholder="exemple@gmail.com" required>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                            <div class="form-group">--}}
            {{--                                <div class="input-group mb-2">--}}
            {{--                                    <div class="input-group-prepend">--}}
            {{--                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>--}}
            {{--                                    </div>--}}
            {{--                                    <textarea class="form-control" placeholder="{{ trans('site.Votre message') }} ..."--}}
            {{--                                              rows="4" required></textarea>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                            <div class="text-center">--}}
            {{--                                <input type="submit" value="{{ trans('site.Envoyer') }}"--}}
            {{--                                       class="btn btn-info btn-block rounded-0 py-2">--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

            {{--                    </div>--}}
            {{--                </form>--}}
            <!--Form with header-->


            </div>
        </div>



    </div>
    <br>
    <!-- /.container -->
    <script>
        $(document).ready(function () {
            {{--    var text=$('.descript').html();--}}
            {{--    text=text.trim();--}}
            {{--    var len=text.length;--}}
            {{--    //alert(text);--}}
            {{--    alert(len);--}}

            $('#sshow').on('click', function () {
                $('#divhide').css({'display': 'block'});
                $('#sshow').remove();
            });
        });
    </script>

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























