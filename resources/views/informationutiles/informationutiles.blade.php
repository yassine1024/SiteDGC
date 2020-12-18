@extends('header.template')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    th{
        text-align: center;margin: auto;
    }
    /*@keyframes fadeIn {*/
    /*    from {opacity: 0;}*/
    /*    to {opacity: 1;}*/
    /*}*/

    /*.fadeInAnimated*/
    /*{*/
    /*    opacity: 1;*/
    /*    animation-name: fadeIn;*/
    /*    animation-duration: 2s;*/
    /*}*/
</style>
@section('content')
    <section id="tabs">
        <br>
        <br>
        <h1 class="text-center">Informations utiles </h1>
        <br>
        <br>
        <div class="container " style="background-color: white">
            <div class="fadeInAnimated">
            <br>
            <ul data-aos="fade-up" >
               <li data-aos="fade-up" style="list-style-type:none;"> <span style="font-size:20px;">&#10146;   <b>Les comptables publiques</b></span></li>
                <br>
            <p data-aos="fade-up">A la qualité de comptable public, toute personne régulièrement nommée pour effectuer les opérations d’exécution des dépenses publiques et de  recouvrement des recettes publiques</p>
            <p data-aos="fade-up">Le comptable public est  chargé de l’exécution des opérations afférentes au recouvrement des recettes, au paiement des dépenses, à la garde et à la conservation des fonds,  titres, valeurs, objets,  matières, biens, produits , du maniement de fonds et du mouvement des comptes de disponibilité.</p>
            <p data-aos="fade-up">A  ce  titre, il  procède  au  contrôle  de  régularité  des titres de  recettes  et  titres  de paiement  et procède à leur recouvrement  et paiement</p>
            <li data-aos="fade-up" style="list-style-type:none;" ><b> Classification </b></li>
                <br>
                <p data-aos="fade-up">Le comptable public est principal ou secondaire. Il est principal lorsqu’il est chargé d’exécuter les opérations financières prévues par la loi n°90-21 du 15 Août 1990 relative à la comptabilité publique. Il est secondaire lorsque ses opérations sont centralisées par un comptable principal.</p>

                <li data-aos="fade-up"><b>Ont la qualité de  comptable principal :</b></li>
                <ul data-aos="fade-up" style="list-style-type:disc">
                    <br>
                <li data-aos="fade-up">l’Agent Comptable Central du Trésor ;</li>
                <li data-aos="fade-up">le Trésorier central ;</li>
                <li data-aos="fade-up">le Trésorier principal ;</li>
                <li data-aos="fade-up">le Trésorier de wilaya;</li>
                <li data-aos="fade-up">le Trésorier de la  commune  lorsqu’il agit pour le compte de la commune ;</li>
                <li data-aos="fade-up">le Trésorier de l’établissement public de santé;</li>
                </ul>
                <br>
                <li data-aos="fade-up"><b>Ont la qualité de comptable secondaire :</b></li>
                <ul data-aos="fade-up" style="list-style-type:disc">
                    <br>
                    <li data-aos="fade-up">le Trésorier  de la  commune,</li>
                    <li data-aos="fade-up">le Receveur des impôts,</li>
                    <li data-aos="fade-up">le Receveur des domaines,</li>
                    <li data-aos="fade-up">le Receveur des douanes,</li>
                    <li data-aos="fade-up">le Conservateur des hypothèques,</li>
                </ul>
                <br>
                <p data-aos="fade-up">Le comptable public agit en qualité d’assignataire ou de mandataire. Il est assignataire lorsqu’il impute définitivement dans ses écritures les opérations ordonnées sur sa caisse et pour lesquelles il rend compte aux organes de contrôle. Il est mandataire lorsqu’il exécute des opérations pour le compte du comptable assignataire.</p>
                <li data-aos="fade-up" style="list-style-type:none;"> <span style="font-size:20px;">&#10146;  <b>Comptes de dépôt trésor</b></span></li>
                <br>
                <ul data-aos="fade-up" style="list-style-type:disc" >
                    <li data-aos="fade-up">+ Qui peut ouvrir un compte de dépôt trésor ?</li>
                    <li data-aos="fade-up">+ Qui doit ouvrir un compte de dépôt trésor.</li>
                    <li data-aos="fade-up">+ Quels sont les comptes qui possèdent des chéquiers ?</li>
                    <li data-aos="fade-up">+ Combien coutent les carnets de chèques au trésor ?</li>
                    <table class="table-bordered">
                        <th data-aos="fade-up">Les chéquiers</th>
                        <th data-aos="fade-up">Pour l'usager</th>
                        <th data-aos="fade-up">Pour le trésor (par unité)</th>
                        <tr data-aos="fade-up">
                            <td>Jaune</td>
                            <td>Gratuit</td>
                            <td>160 Da</td>
                        </tr>
                        <tr data-aos="fade-up">
                            <td>Vert</td>
                            <td>Gratuit</td>
                            <td>160 Da</td>
                        </tr>
                        <tr data-aos="fade-up">
                            <td>Bleu</td>
                            <td>Gratuit</td>
                            <td>160 Da</td>
                        </tr>
                    </table>
                    <b data-aos="fade-up" style="color:darkorchid"><i>Annuellement, le Trésor public débourse en moyenne une somme de <br> ***************** DA pour l’impression de carnets de chèques trésor.</i></b>
                    <li data-aos="fade-up">+ Combien coutent les opérations ( transactions)  au trésor ?</li>
                    <table data-aos="fade-up" class="table-bordered">
                        <th>Les transactions</th>
                        <th>Pour l'usager</th>
                        <th>Pour le trésor (par transaction)</th>
                        <tr data-aos="fade-up">
                            <td>Consultation de solde</td>
                            <td>Gratuit</td>
                            <td>Gratuit</td>
                        </tr>
                        <tr data-aos="fade-up">
                            <td>Retrait de fond</td>
                            <td>Gratuit</td>
                            <td>Gratuit</td>
                        </tr>
                        <tr data-aos="fade-up">
                            <td>Virement intra trésor</td>
                            <td>Gratuit</td>
                            <td>Gratuit</td>
                        </tr>
                        <tr data-aos="fade-up">
                            <td>Encaissement d’un chèque de banque (télé-compensation)</td>
                            <td>Gratuit</td>
                            <td>*******  DA</td>
                        </tr>
                        <tr data-aos="fade-up">
                            <td>Présentation d’un chèque trésor (télé-compensation)</td>
                            <td>Gratuit</td>
                            <td>*******  DA</td>
                        </tr>
                        <tr data-aos="fade-up">
                            <td>Présentation d’un effet de commerce ou traite de douane</td>
                            <td>Gratuit</td>
                            <td>*******  DA</td>
                        </tr>
                        <tr data-aos="fade-up">
                            <td>Emission d’un virement télé-compensé <1 MD</td>
                            <td>Gratuit</td>
                            <td>*******  DA</td>
                        </tr>
                        <tr data-aos="fade-up">
                            <td>Emission d’un virement télé-compensé <1 MD</td>
                            <td>Gratuit</td>
                            <td>*******  DA</td>
                        </tr>
                        <tr data-aos="fade-up">
                            <td>Emission d’un virement télé-compensé > 1 MD</td>
                            <td>Gratuit</td>
                            <td>*******  DA</td>
                        </tr>
                        <tr data-aos="fade-up">
                            <td>Emission d’un virement télé-compensé > 1 MD</td>
                            <td>Gratuit</td>
                            <td>*******  DA</td>
                        </tr>
                    </table>
                    <b data-aos="fade-up" style="color:darkorchid"><i>Annuellement, le Trésor public débourse en moyenne une somme de <br> ***************** DA pour les opérations interbancaires.</i></b>
                </ul>

                <li data-aos="fade-up" style="list-style-type:none;"> <span style="font-size:20px;">&#10146;  Titres de perceptions</span></li>
                <ul data-aos="fade-up" style="list-style-type:disc" >
                    <li data-aos="fade-up">+ C’est quoi un titre de perception ?</li>
                    <li data-aos="fade-up">+ C’est un recouvrement à l’amiable ?</li>
                    <li data-aos="fade-up">+ C’est quoi un recouvrement forcé ?</li>
                    <li data-aos="fade-up">+ Quels les difficultés pour le recouvrement des titres ?</li>
                    <li data-aos="fade-up">+ Comment peut-on améliorer le recouvrement des titres</li>
                </ul>
                <li data-aos="fade-up" style="list-style-type:none;"> <span style="font-size:20px;">&#10146;  Les pensions</span></li>
                <ul data-aos="fade-up" style="list-style-type:disc" >
                    <li data-aos="fade-up">+ Quels sont les types de pensionnés gérés par le trésor</li>
                    <li data-aos="fade-up">+ Le barème d’attribution des pensions</li>
                  </ul>
            </ul>
            <br>



            </div>
        </div>

    </section>
    <br>

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
