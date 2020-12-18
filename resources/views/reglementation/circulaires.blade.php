@extends('header.template')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    th{
        text-align: center;margin: auto;
    }
</style>
@section('content')

    <section id="tabs">
        <br>
        <br>
        <h1 class="text-center">Circulaires</h1>
<br>
        <br>

        <div class="container" style="background-color: white">
            <br>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                 <h4><i class="fa fa-caret-down"></i> 2010</h4>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                <tr class="table-info">
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Objet</th>
                                    <th scope="col">Consulter la version</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
{{--                                    <th scope="row">1</th>--}}
                                    <td>N°13 DU 31 DECEMBRE 2010 </td>
                                    <td>Suspension de la pension concédée au titre de l’article 129-alinéas 3 et 4 de la loi n°89-26 du 31/12/1989 portant loi de finances pour 1990.</td>
                                    <td> <a href="{{asset('assets/download/reglementation/reglementation_fr_91.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_91.pdf')}}" > Arabe  </a> </td>
                                </tr>
                                <tr>
                                    <td>N°06 DU 01 JUILLET 2010</td>
                                    <td>Pensions des Moudjahidine et ayants droit Réévaluation du salaire National minimum garanti (SNMG)</td>
                                    <td> <a href="{{asset('assets/download/reglementation/reglementation_fr_82.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_82.pdf')}}" > Arabe  </a> </td>
                                </tr>
                                <tr>
                                    <td >N°02 DU 10 MAI 2010</td>
                                    <td>Codification des ordonnateurs du budget de l’état.</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_78.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_78.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 11 DU 25 NOVEMBRE 2010</td>
                                    <td>double émission de carnets de chèques postaux</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_87.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_87.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 08 DU 22 AOUT 2010</td>
                                    <td>Echange de billets de banque.</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_84.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_84.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 07 DU 10 AOUT 2010</td>
                                    <td>Codification des ordonnateurs du budget de l’état.</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_83.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_83.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 04 DU 14 JUIN 2010</td>
                                    <td>Exécution des dépenses imputables au budget des communes et des établissements publics de santé.</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_80.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_80.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 03 DU 30 MAI 2010</td>
                                    <td>Sécurité des fonds publics</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_79.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_79.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 01 du 08 MARS 2010</td>
                                    <td>Mise en œuvre de la directive présidentielle n°03, relative à la dynamisation de la lutte contre la corruption.</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_77.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_77.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 05 DU 24 JUIN 2010</td>
                                    <td>Gestion et sécurité des deniers publics.</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_81.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_81.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>ERRATUM A LA CIRCULAIRE N° 07 DU10 AOUT 2010</td>
                                    <td>ERRATUM A LA CIRCULAIRE N° 07 DU10 AOUT 2010</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_90.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_90.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>ERRATUM A LA CIRCULAIRE N° 07 DU 10 AOÛT 2010</td>
                                    <td>ERRATUM A LA CIRCULAIRE N° 07 DU 10 AOÛT 2010</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_85.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_85.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>ERRATUM A LA CIRCULAIRE N° 07 DU 10 AOÛT 2010</td>
                                    <td>ERRATUM A LA CIRCULAIRE N° 07 DU 10 AOÛT 2010</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_86.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_86.pdf')}}" > Arabe  </a></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4><i class="fa fa-caret-down"></i> 2009</h4>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                <tr class="table-info">
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Objet</th>
                                    <th scope="col">Consulter la version</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>N° 09 du 17/12/2009</td>
                                    <td>Procédure d'éxécution des virements urgents dans le cadre du systéme ARTS</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_23.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_23.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 08 du 17/12/2009</td>
                                    <td>Dégagement de caisse des receveurs des régies finacière</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_22.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_22.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td >N° 07 du 02/12/2009</td>
                                    <td>cumul de pensions</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_21.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_21.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 06 du 16/06/2009</td>
                                    <td>comptabilisation des chèques émis en réglement d'impôts, droit et taxes</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_20.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_20.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 05 du 14/06/2009</td>
                                    <td>Codification des postes Comptables</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_19.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_19.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 04 du 14/06/2009</td>
                                    <td>codification des postes comptables</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_18.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_18.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 03 du 13/06/2009</td>
                                    <td>	Gestion financière et comptable des Etablissements Publics à caractére Administratif pension</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_17.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_17.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 02 du 31/01/2009</td>
                                    <td>Revalorisation des pensions des grands invalides handicapés permanents</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_16.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_16.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 01 Erratum du 31/10/2009</td>
                                    <td>Codification des ordonnateurs</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_15.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_15.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 01 du 31/01/2009</td>
                                    <td>Revalorisation du montant des pensions concédées au titre de la guerre de libération nationale.</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_14.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_14.pdf')}}" > Arabe  </a></td>
                                </tr>
                                </tbody>
                            </table>
                               </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h4><i class="fa fa-caret-down"></i> 2008</h4>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                <tr class="table-info">
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Objet</th>
                                    <th scope="col">Consulter la version</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>N°07 du 28/10/08</td>
                                    <td>Codification de poste comptable</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr[10].pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar[10].pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N°06 du 12/08/2008</td>
                                    <td>Victimes civiles et victimes d’engins explosifs</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr[9].pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar[9].pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td >N°05 du 15/07/2008</td>
                                    <td>Revalorisation du montant des pensions concédées au titre de la guerre de libération nationale.</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr[8].pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar[8].pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 08 DU 16/11/08</td>
                                    <td>Recouvrement fiscal.</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr[11].pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar[11].pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 04 DU 15/06/08</td>
                                    <td>Recouvrement fiscal.</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr[7].pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar[8].pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 03 du 16/06/2008</td>
                                    <td>Codification des Ordonnateurs.</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr[6].pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar[6].pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 02 du 05/04/2008</td>
                                    <td>Codification des Ordonnateurs.</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr[5].pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar[5].pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 01 DU 31/03/2008</td>
                                    <td>Codification des Ordonnateurs.</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr[1].pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar[1].pdf')}}" > Arabe  </a></td>
                                </tr>

                                </tbody>
                            </table>
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
