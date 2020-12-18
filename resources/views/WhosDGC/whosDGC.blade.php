@extends('header.template')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>

    /* Tabs*/
    section {
        padding: 60px 0;
    }

    section .section-title {
        text-align: center;
        color: #007b5e;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #tabs {

        color: black;
        margin-top: 0;
    }

    #tabs h6.section-title {
        color: black;
    }

    #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: black;
        background-color: transparent;
        border-color: transparent transparent #f3f3f3;
        border-bottom: 4px solid !important;
        font-size: 40px;
        font-weight: bold;
    }

    #tabs .nav-tabs .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        color: black;
        font-size: 20px;
    }
</style>
@section('content')

    <!-- Tabs -->
    <section  id="tabs">
        <h1 class="text-center">Qui sommes nous ?</h1>
        <br>
        <br>

        <div class="container" >
            <div class="row" style="background-color: white">
                <div class="col-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                               href="#nav-presentation"
                               role="tab" aria-controls="nav-home" aria-selected="true">Présentation</a>
                            <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-missions"
                               role="tab" aria-controls="nav-home" aria-selected="false">Nos missions</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-services"
                               role="tab" aria-controls="nav-profile" aria-selected="false">Nos services</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-metiers"
                               role="tab" aria-controls="nav-contact" aria-selected="false">Nos métiers</a>
                            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-organigramme"
                               role="tab" aria-controls="nav-about" aria-selected="false">Organigramme</a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-presentation" role="tabpanel"
                             aria-labelledby="nav-home-tab">

                            <br>

                            <p>La direction générale de la Comptabilité (DGC) représente un service public connu sous le
                                nom du trésor public. </p>

                            <p> Ses <span style="color:blue; font-weight: bold;">missions</span> permettent
                                ****************************************************</p>

                            <p> Les <span style="color:blue; font-weight: bold;">services</span> de la DGC sont présents
                                sur
                                l’ensemble du territoire, au plus près de ses usagers.
                            </p>
                            <p>Les <span style="color:blue; font-weight: bold;"> Métiers</span> de la DGC sont
                                ***************************************
                            </p>
                            <p> L’<span style="color:blue; font-weight: bold;">organigramme</span> de la DGC présente la
                                structure
                                des différents services rattachés au
                                Directeur Général.
                            </p>

                            <p STYLE="font-weight: bold">Pour Contacter nos services
                            </p>
                            <p> La Direction Générale, sise à l’Immeuble Ahmed Francis, Cité Malki, Ben Aknoun
                                N° Tél du standard : (021) 59 51 51/52 52 /53 53</p>


                            <p> Nos services extérieurs : Voir <a href="#">l’annuaire</a></p>
                            <br><br><br>


                            {{--begin collapse for the references--}}

                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                    data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                Textes de référence :
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <a href="#"> Voir le decret n° 07-364 du 28 Novembre 2007 (JO N°75 du 02
                                                Décembre
                                                2007.pdf)</a>
                                            <br><a href="#"> Voir le decret n° 17-325 du 08 Novembre 2017 (JO N°67 du 15
                                                Novembre
                                                2017.pdf)</a>
                                            <br><a href="#"> Voir Journal officiel N° 33 du 21 mai 2006</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--end collapse--}}


                        </div>
                        <div class="tab-pane fade" id="nav-missions" role="tabpanel" aria-labelledby="nav-profile-tab">

                            {{--Add collapse to each element of mission--}}


                            {{--End of adding--}}


                            <br>
                            <div class="accordion" id="accordionExample2One">
                                <div class="card">
                                    <div class="card-header" id="heading2One">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                    data-toggle="collapse" data-target="#collapse2One"
                                                    aria-expanded="true" aria-controls="collapse2One">
                                                L’Administration Centrale :</b> est chargée de :
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse2One" class="collapse " aria-labelledby="heading2One"
                                         data-parent="#accordionExample2One">
                                        <div class="card-body">
                                            <ul>
                                                <li> D’élaborer les règles et les procédures relatives à la comptabilité
                                                    ;
                                                </li>
                                                <li> D’entreprendre toute action, étude ou recherche visant à développer
                                                    et à moderniser
                                                    les services du Trésor et à normaliser les systèmes comptables ;
                                                </li>
                                                <li> De centraliser, de consolider et de produire les informations
                                                    financières,
                                                    comptables et budgétaires ;
                                                </li>
                                                <li> De concevoir et de gérer le système d’information du Trésor ;</li>
                                                <li> D’assurer l’animation et l’évaluation de l’activité de ses services
                                                    extérieurs ;
                                                </li>
                                                <li> D’initier et de proposer tout texte législatif ou réglementaire
                                                    relevant de son
                                                    domaine de compétence ;
                                                </li>
                                                <li> d’assurer, en relation avec les structures concernées, la
                                                    participation directe du
                                                    Trésor public au système Algérie Télé Compensation Interbancaire
                                                    (ATCI) pour la
                                                    compensation électronique de ses opérations financières, et d’offrir
                                                    de nouveaux
                                                    services de paiement.
                                                </li>

                                            </ul>

                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                Les services extérieurs : sont chargés de :
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                         data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="accordion" id="accordionOutSideServices">
                                                <div class="card">
                                                    <div class="card-header" id="headingOneOutSideServices">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left"
                                                                    type="button" data-toggle="collapse"
                                                                    data-target="#collapseOneOutSideServices"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOne">
                                                                Agence Comptable centrale du trésor
                                                            </button>
                                                        </h2>
                                                    </div>

                                                    <div id="collapseOneOutSideServices" class="collapse"
                                                         aria-labelledby="headingOneOutSideServices"
                                                         data-parent="#accordionOutSideServices">
                                                        <div class="card-body">
                                                            <p> Elle est chargée de :</p>
                                                            <ul>
                                                                <li> la centralisation, sur chiffres, des situations
                                                                    comptables fournies par les
                                                                    comptables
                                                                    publics au titre des opérations budgétaires et de
                                                                    trésorerie;
                                                                </li>
                                                                <li> la vérification sur pièces et sur place lorsque les
                                                                    mesures de centralisation
                                                                    l’exigent ;
                                                                </li>
                                                                <li> l’exécution des opérations relatives aux comptes
                                                                    courants du Trésor auprès des
                                                                    chèques
                                                                    postaux, de la Banque d’Algérie, ainsi qu’au compte
                                                                    courant du Trésor de l’Agent
                                                                    Comptable du budget annexe
                                                                </li>
                                                                des P et T ;
                                                                <li>la gestion de la dette publique et des opérations
                                                                    relatives au compte de règlement
                                                                    avec les trésors étrangers.
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOneOutSideServices2">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left"
                                                                    type="button" data-toggle="collapse"
                                                                    data-target="#collapseOneOutSideServices2"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOne">
                                                                Direction Régionale du Trésor
                                                            </button>
                                                        </h2>
                                                    </div>

                                                    <div id="collapseOneOutSideServices2" class="collapse"
                                                         aria-labelledby="headingOneOutSideServices2"
                                                         data-parent="#accordionOutSideServices">
                                                        <div class="card-body">
                                                            <p>Elle est chargée :</p>
                                                            <ul>
                                                                <li>De la trésorerie et des placements ;</li>
                                                                <li>De la gestion des ressources humaines ;</li>
                                                                <li>Des vérifications et du contentieux</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOneOutSideServices3">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left"
                                                                    type="button" data-toggle="collapse"
                                                                    data-target="#collapseOneOutSideServices3"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOne">
                                                                Trésorerie centrale
                                                            </button>
                                                        </h2>
                                                    </div>

                                                    <div id="collapseOneOutSideServices3" class="collapse"
                                                         aria-labelledby="headingOneOutSideServices3"
                                                         data-parent="#accordionOutSideServices">
                                                        <div class="card-body">
                                                            <p>Elle est chargée de l’exécution financière et comptable
                                                                des budgets des ministères, des
                                                                institutions nationales et des établissements publics à
                                                                caractère administratif qui lui
                                                                sont
                                                                rattachés.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOneOutSideServices4">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left"
                                                                    type="button" data-toggle="collapse"
                                                                    data-target="#collapseOneOutSideServices4"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOne">
                                                                Trésorerie Principale
                                                            </button>
                                                        </h2>
                                                    </div>

                                                    <div id="collapseOneOutSideServices4" class="collapse"
                                                         aria-labelledby="headingOneOutSideServices4"
                                                         data-parent="#accordionOutSideServices">
                                                        <div class="card-body">
                                                            <p>Elle est chargée de la gestion financière et comptable
                                                                des pensions et des comptes
                                                                spéciaux
                                                                du trésor.</p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card">
                                                    <div class="card-header" id="headingOneOutSideServices5">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left"
                                                                    type="button" data-toggle="collapse"
                                                                    data-target="#collapseOneOutSideServices5"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOne">
                                                                Trésorerie de wilaya
                                                            </button>
                                                        </h2>
                                                    </div>

                                                    <div id="collapseOneOutSideServices5" class="collapse"
                                                         aria-labelledby="headingOneOutSideServices5"
                                                         data-parent="#accordionOutSideServices">
                                                        <div class="card-body">
                                                            <p>Elle est chargée :</p>
                                                            <ul>
                                                                <li> De la gestion financière et comptable :</li>
                                                                <li> Des budgets des services déconcentrés de l’Etat ;
                                                                </li>
                                                                <li> Des budgets des wilaya ;</li>
                                                                <li> Des budgets des établissements publics à caractère
                                                                    administratif (EPA) qui leur
                                                                    sont
                                                                    rattachés
                                                                </li>
                                                                <li> De la centralisation des opérations effectuées pour
                                                                    le compte du trésor par les
                                                                    comptables
                                                                    secondaires des régies financières (impôts, douanes,
                                                                    domaines..)
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card">
                                                    <div class="card-header" id="headingOneOutSideServices6">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left"
                                                                    type="button" data-toggle="collapse"
                                                                    data-target="#collapseOneOutSideServices6"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOne">
                                                                Trésorerie communale
                                                            </button>
                                                        </h2>
                                                    </div>

                                                    <div id="collapseOneOutSideServices6" class="collapse"
                                                         aria-labelledby="headingOneOutSideServices6"
                                                         data-parent="#accordionOutSideServices">
                                                        <div class="card-body">
                                                            **************************************************************************
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>


                        <div class="tab-pane fade" id="nav-services" role="tabpanel" aria-labelledby="nav-contact-tab">
                            Services...
                        </div>
                        <div class="tab-pane fade" id="nav-metiers" role="tabpanel" aria-labelledby="nav-about-tab">
                            <br>
                            <p>La DGC gère tous les comptables publiques de l’éta, elle est présente dans différents
                                métiers :</p>


                            <li> Recouvrement de la recette publique :
                                *************************************************
                            </li>
                            <li> Exécution de la Dépense publique :
                                ***************************************************
                            </li>
                            <li>
                                **********************************************************************************************
                            </li>
                            <li>
                                ************************************************************************************************
                            </li>
                        </div>
                        <div class="tab-pane fade" id="nav-organigramme" role="tabpanel"
                             aria-labelledby="nav-about-tab">



                            <br><br>
                            <h4>1-Organigramme de l’Administration Centrale</h4>
                            <div class="text-center">
                                <img src="{{asset('assets/images/organigramme.png')}}" class="img-fluid">


                            </div>
                            <br>
                            <br>
                            <div id="accordion">
                                <div >
                                    <div  id="headingttt">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link " data-toggle="collapse" data-target="#collapsettt" aria-expanded="false" aria-controls="collapsettt" style=" position: absolute;right: 3%;">
                                                <h5 style="font-weight: bold;color: #2952ff;"><i class="fa fa-caret-down"></i>  Voir Coordonnées des responsables</h5>
                                            </button>
                                        </h5>
                                    </div>
                                    <br><br>
                                    <style>
                                        th,td{padding: 10px;font-weight: bold}
                                    </style>
                                    <div id="collapsettt" class="collapse" aria-labelledby="headingttt" data-parent="#accordion">
                                        <div >
                                            <table class="table-bordered table-primary table-striped " style="text-align: center;">
                                                <tr>
                                                    <td>Directeur Général</td>
                                                    <td>M.MOHAMED LAARBI Ghanem</td>
                                                    <td>Tel:021.59.**.**<br>Fax:021.59.**.**</td>
                                                    <td class="center"><img  id="" src="{{asset('assets/images/user-organisation.png')}}" ></td>
                                                    <td>Mohamedlaarbi.Ghanem@mf.gov.dz</td>
                                                </tr>
                                                <tr>
                                                    <td>Inspecteur des Services Comptables</td>
                                                    <td>M. ELAIDI Chakib</td>
                                                    <td>Tel : 021 59 ****<br>Fax :021 59 ****</td>
                                                    <td class="center"><img  id="" src="{{asset('assets/images/user-organisation.png')}}"></td>
                                                    <td>Chakib.Elaidi@mf.gov.dz </td>
                                                </tr>
                                                <tr>
                                                    <td>Directeur d’Etude</td>
                                                    <td>M. FERRAD Badis</td>
                                                    <td>Tel : 021 59 ****<br>Fax :021 59 ****</td>
                                                    <td class="center"><img  id="" src="{{asset('assets/images/user-organisation.png')}}" ></td>
                                                    <td>Badis.Ferrad@mf.gov.dz </td>
                                                </tr>
                                                <tr>
                                                    <td>Directeur d’Etude</td>
                                                    <td>M. MOUGAS</td>
                                                    <td>Tel : 021 59 ****<br>Fax :021 59 ****</td>
                                                    <td class="center"><img  id="" src="{{asset('assets/images/user-organisation.png')}}" ></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Directeur de la Règlementation et de l’Exécution Comptable <br> des Budgets</td>
                                                    <td>M. BOUDAOUD Smail</td>
                                                    <td>Tel : 021 59 ****<br>Fax :021 59 ****</td>
                                                    <td class="center"><img  id="" src="{{asset('assets/images/user-organisation.png')}}" ></td>
                                                    <td>Smail.Boudaoud@mf.gov.dz </td>
                                                </tr>
                                                <tr>
                                                    <td>Directeur de la Modernisation et la Normalisation <br> Comptable </td>
                                                    <td>M. HAMZA</td>
                                                    <td>Tel : 021 59 ****<br>Fax :021 59 ****</td>
                                                    <td class="center"><img  id="" src="{{asset('assets/images/user-organisation.png')}}" ></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Directeur des Consolidations Comptables et <br> Financières</td>
                                                    <td>M. RIGHI</td>
                                                    <td>Tel : 021 59 ****<br>Fax :021 59 ****</td>
                                                    <td class="center"><img  id="" src="{{asset('assets/images/user-organisation.png')}}"></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Directeur de l’Informatique</td>
                                                    <td>M. ABADJA Abdelkader</td>
                                                    <td>Tel : 021 59 ****<br>Fax :021 59 ****</td>
                                                    <td class="center"><img  id="" src="{{asset('assets/images/user-organisation.png')}}" ></td>
                                                    <td>Abdelkader.Abadja@mf.gov.dz </td>
                                                </tr>
                                                <tr>
                                                    <td>Directeur de l’Administration  des Moyens et <br> des Finances </td>
                                                    <td>M. MESSIOURI Khaled</td>
                                                    <td>Tel : 021 59 ****<br>Fax :021 59 ****</td>
                                                    <td class="center"><img  id="" src="{{asset('assets/images/user-organisation.png')}}" ></td>
                                                    <td>Khaled.Messiouri@mf.gov.dz </td>
                                                </tr>
                                                <tr>
                                                    <td>Directeur des Instruments de Paiement </td>
                                                    <td>M. TAFNI Ali</td>
                                                    <td>Tel : 021 59 ****<br>Fax :021 59 ****</td>
                                                    <td class="center"><img  id="" src="{{asset('assets/images/user-organisation.png')}}" ></td>
                                                    <td>Ali.Tafni@mf.gov.dz</td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <h4>2-Organigramme des services extérieur</h4>

                            <iframe src="{{asset('assets/orgChart/examples/example.html')}}" width="100%" height="550px;" title="W3Schools Free Online Web Tutorials">
                            </iframe>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ./Tabs -->
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

