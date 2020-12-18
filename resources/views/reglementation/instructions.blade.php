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
        <h1 class="text-center">Instructions</h1>
        <br>
        <br>
        <div class="container" style="background-color: white">
            <br>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">
                                <h4><i class="fa fa-caret-down"></i> 2015</h4>
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
                                    <td>N° 06 DU 15/03/2015</td>
                                    <td>Gestion Comptabilité des Trésoreries des communes et des trésoreries des
                                        (EPS):Comptabilité à partie double
                                    </td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_instruction_fr_N06_mars_2015.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_instruction_ar_N06_mars_2015.pdf')}}" > Arabe  </a></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                <h4><i class="fa fa-caret-down"></i> 2010</h4>
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
                                    <td>N°14 DU 09/05/2010</td>
                                    <td>Comptabilisation du produit du droit de timbre</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_105.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_105.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 43 DU 27 DECEMBRE 2010</td>
                                    <td> Gestion comptable du centre de formation professionnelle et de l’apprentissage
                                        spécialisé pour personnes handicapées physiques (CFPAHP), commune de Filfila
                                        wilaya de Skikda
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_134.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_134.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 42 DU 27 DECEMBRE 2010</td>
                                    <td>Gestion comptable de l’Observatoire National de la Ville</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_133.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_133.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 41 DU 08 NOVEMBRE 2010</td>
                                    <td>Clôture du sous-compte n° 53 intitulé « Ecole Préparatoire en Sciences et
                                        Techniques à Annaba »
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_132.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_132.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 40 DU 20 OCTOBRE 2010</td>
                                    <td>Clôture du compte d’affectation spéciale n°302-053 «fonds d’affectation du droit
                                        d’exploitation des licences de taxis».
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_131.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_131.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 39 DU 20/10/2010</td>
                                    <td>Clôture du compte d’affectation spéciale n° 302-104 « compte de gestion des
                                        opérations d’investissements publics financées sur des emprunts extérieurs»
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_130.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_130.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 38 DU 19/10/2010</td>
                                    <td>ouverture de lignes au sein des comptes n° 335 009 et 432.049</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_129.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_129.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 36 DU 14/10/2010</td>
                                    <td>Gestion comptable de l’école nationale de conservation et de restauration des
                                        biens culturels.
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_127.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_127.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 35 DU 12/10/2010</td>
                                    <td>Dispositif relatif à la répression de l’infraction à la législation et à la
                                        règlementation des changes et des mouvements de capitaux de et vers l’étranger
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_126.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_126.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 33DU 09/09/2010</td>
                                    <td>Création d’un sous-compte n°62 intitulé « Ecole Préparatoire en Sciences et
                                        Techniques » dans la nomenclature des comptes du Trésor au sein du compte
                                        n°402-001
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_124.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_124.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 32 DU 09/09/2010</td>
                                    <td>Création d’un sous-compte n°61 intitulé « Ecole Préparatoire en Sciences
                                        Economiques, Commerciales et Science de Gestion »
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_123.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_123.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 30 DU 26/08/2010</td>
                                    <td>comptable de l’Ecole Nationale Supérieure de Management</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_121.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_121.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 29 DU 18/08/2010</td>
                                    <td>Modalités de prise en charge du financement des projets retenus pour la
                                        réparation des dégâts causés par les intempéries au niveau des wilayas des hauts
                                        plateaux
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_120.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_120.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 28 DU 01/07/2010</td>
                                    <td>fonctionnement du compte d’affectation spéciale n° 302-134</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_119.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_119.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 27 DU 22/06/2010</td>
                                    <td>Gestion comptable du Musée Régional de Béchar</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_118.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_118.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 25 DU 10/06/2010</td>
                                    <td>déconcentration des décisions de remboursement des crédits de TVA</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_116.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_116.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 24 DU 09/06/2010</td>
                                    <td>Clôture du sous-compte n°52 ouvert au sein du compte n°402-001 « Wilayate et
                                        établissements de wilayate -service financier -»
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_115.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_115.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 23 DU 23/05/2010</td>
                                    <td>Fonctionnement du compte d’affectation spéciale n° 302-132</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_114.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_114.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 21 DU 18/05/2010</td>
                                    <td>Modalités de paiement des indemnisations prononcées par la commission
                                        d’indemnisation instituées auprès de la Cour suprême, en raison de la détention
                                        provisoire injustifiée de l’erreur judiciaire
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_112.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_112.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 20 DU 17/05/2010</td>
                                    <td>Fonctionnement du compte d'affectation spéciale n°302.121 " Fonds national de
                                        régulation de la production agricole"
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_111.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_111.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 19 DU 17/05/2010</td>
                                    <td>Fonctionnement du compte d'affectation spéciale n°302.126 " Fonds spécial
                                        d'appui aux éleveurs et petits exploitants agricoles"
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_110.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_110.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 18 DU 17/05/2010</td>
                                    <td>Fonctionnement du compte d'affectation spéciale n°302.111 " Fonds de
                                        développement rural et de la mise en valeur des terres par la concession."
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_109.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_109.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 17 DU 17/05/2010</td>
                                    <td>Fonctionnement du compte d'affectation spéciale n°302.109 " Fonds de lutte
                                        contre la désertification et le développement du pastoralisme et de la steppe"
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_108.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_108.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 16 DU 17/05/2010</td>
                                    <td>Fonctionnement du compte d'affectation spéciale n°302.067 " Fonds National de
                                        Développement de l'Investissement agricole."
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_107.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_107.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 15 DU 13/05/2010</td>
                                    <td>Fonctionnement du compte d'affectation spéciale n°302.122 "Fonds de revenus
                                        complémentaires en faveur du personnel des enquêtes économiques et de la
                                        répression des fraudes».
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_106.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_106.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 13 DU 14/03/2010</td>
                                    <td>: Modalités de comptabilisation du produit de l’Impôt forfaitaire unique</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_104.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_104.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 12 DU 08/03/2010</td>
                                    <td>Gestion comptable des Musées Régionaux du Moudjahid. - Création du sous-compte
                                        n°59 au sein du compte 402 001 « Wilaya et Etablissements de wilaya –service
                                        financier- ».
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_103.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_103.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 11 DU 01/03/2010</td>
                                    <td>Gestion comptable de l’office national du parc culturel de l’Atlas Saharien à
                                        Laghouat. - Création du sous-compte n° 110 au sein du compte 402 003 «
                                        établissements publics nationaux –service financier ».
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_102.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_102.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 10 DU 01/03/2010</td>
                                    <td>Gestion comptable de l’office national du parc culturel de Tindouf. - Création
                                        du sous-compte n° 109 au sein du compte 402 003 « établissements publics
                                        nationaux –service financier ».
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_101.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_101.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 09 DU 01/03/2010</td>
                                    <td>Gestion comptable de l’office national du parc culturel de Touat Gourara
                                        Tidikelt. - Création du sous-compte n° 108 au sein du compte 402 003 «
                                        établissements publics nationaux –service financier ».
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_100.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_100.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 08 DU 01/03/2010</td>
                                    <td>Gestion comptable des instituts de l’enseignement professionnel.- Création du
                                        sous-compte n° 58 au sein du compte 402 001 « Wilaya et Etablissements de wilaya
                                        –service financier- ».
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_99.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_99.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 07 DU 28/01/2010</td>
                                    <td>Clôture du compte d’affectation spéciale n°302.022 « Fonds de garantie des
                                        communes».
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_98.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_98.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 05 DU 27/01/2010</td>
                                    <td>Gestion comptable du Musée Régional d’El Meniâa. - Création du sous-compte n°57
                                        au sein du compte 402 001 « Wilaya et Etablissements de wilaya –service
                                        financier- ».
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_96.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_96.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 04 DU 27/01/2010</td>
                                    <td>Gestion comptable du Musée National de Cherchell. - Création du sous-compte n°
                                        107 au sein du compte 402 003 « établissements publics nationaux –service
                                        financier ».
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_95.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_95.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 03 DU 19/01/2010</td>
                                    <td>Modalités de répartition des ressources du fonds de revenu complémentaire
                                        (FRC).
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_94.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_94.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 02 DU 18/01/2010</td>
                                    <td>Fonctionnement du compte d’affectation spéciale n° 302-129 Intitulé « Fonds
                                        National de Préparation et d'Organisation de la manifestation, Tlemcen capitale
                                        de la culture islamique 2011».
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_93.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_93.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 34 DU 27/09/2010</td>
                                    <td>Gestion comptable de l’Ecole Nationale d’Administration</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_125.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_125.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 31 DU 09/09/2010</td>
                                    <td>Clôture du compte d’affectation spéciale n°302-104 « compte de gestion des
                                        opérations d’investissements publics financées sur des emprunts extérieurs ».
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_122.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_122.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 22 DU 23/05/2010</td>
                                    <td>Fonctionnement du compte d’affectation spéciale n° 302-089 «Fonds spécial de
                                        développement des régions du Sud
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_113.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_113.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N °06 DU 28/01/2010</td>
                                    <td>Clôture du compte d’affectation spéciale n°302.023 « Fonds de garantie des
                                        Wilayas».
                                    </td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_97.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_97.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>ERRATUM A L’INSTRUCTION N°33 DU 09 SEPTEMBRE 2010</td>
                                    <td>ERRATUM A L’INSTRUCTION N°33 DU 09 SEPTEMBRE 2010</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_128.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_128.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>ERRATUM A L’INSTRUCTION N° 21 DU 18 MAI 2010</td>
                                    <td>ERRATUM A L’INSTRUCTION N° 21 DU 18 MAI 2010</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_117.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_117.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>ERRATUM A LA NOMENCLATURE DES COMPTES DU TRESOR (version 2009)</td>
                                    <td>ERRATUM A LA NOMENCLATURE DES COMPTES DU TRESOR (version 2009)</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_92.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_92.pdf')}}" > Arabe  </a></td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                <h4><i class="fa fa-caret-down"></i> 2009</h4>
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
                                    <td>N°33 du 24/11/2009</td>
                                    <td>Gestion Comptable des bibliothèques de lecture publique Création du Sous Compte n° 104 au sein du compte 402.003</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_71.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_71.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N°31 du 11/11/2009</td>
                                    <td>Gestion Comptable du Musée de Tebessa Création du Sous Compte n° 102 au sein du compte 402.003</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_69.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_69.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 37 du 13/12/2009</td>
                                    <td>Gestion comptable du centre national des permis de conduire(CeNAPEC) Création du sous compte n°106 au sein du compte 402.003</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_75.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_75.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 36 du 10/12/2010</td>
                                    <td>Gestion comptable de l'université de Bouzaréah Création du sous compte n°55 au sein du compte 402.001</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_74.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_74.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 35 du 10/12/2009</td>
                                    <td>Gestion comptable de l'université de Dely Brahim Création du sous compte n°56 au sein du compte 402.001</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_73.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_73.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 34 du 02/12/2009</td>
                                    <td>Généralisation de la procédure de paiement par voie de virement à l'ensemble des pensions concédées par L'eat au titre de la guerre</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_72.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_72.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 32 du 18/11/2009</td>
                                    <td>Modalités de comptabilisation de la taxe applicable aux chargements prépayés</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_70.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_70.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 30 du 11/11/2009</td>
                                    <td>Gestion Comptable du Musée Régional de Chlef Création du Sous Compte n° 45 au sein du compte 402.001</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_68.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_68.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 29 du 11/11/2009</td>
                                    <td>Gestion Comptable du Musée Régional de Khenchla Création du Sous Compte n° 64 au sein du compte 402.001</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_67.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_67.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 28 du 11/11/2009</td>
                                    <td>Gestion Comptable de L'Ecole Préparatoire en sciences et Tecjniques à Annaba Création du Sous Compte n° 53 au sein du compte 402.001</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_66.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_66.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 27 du 11/11/2009</td>
                                    <td>Gestion Comptable de L'Ecole Nationale Supérieur de journalisme et des sciences de l'information Création du Sous Compte n° 105 au sein du compte 402.003</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_65.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_65.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 26 du 11/11/2009</td>
                                    <td>Gestion comptable de l'école préparatoire en Sciences et techniques à tlemcen Création de sous compte n° 47 au sein du compte 402.001</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_64.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_64.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 25 du 11/11/2009</td>
                                    <td>Gestion comptable de l'Ecole nationale supérieure de sciences politiques Création du sous compte 103 au sein du compte 402.003</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_63.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_63.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 24 du 11/11/2009</td>
                                    <td>Gestion Comptable du c entre national du livre Création du sous compte n° 104 au sein du compte 402.003</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_62.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_62.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 23 du 21/10/2009</td>
                                    <td>Gestion Comptable de L'Ecole Nationale Supérieur de Technologie Création du Sous Compte n° 104 au sein du compte 402.003</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_61.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_61.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 22 du 21/10/2009</td>
                                    <td>Gestion comptable de l4ecole nationale de Football de Sidi-Moussa Création du sous compte n° 100 au sein du compte 402.003</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_60.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_60.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 21 du 21/10/2009</td>
                                    <td>Gestion Comptable de l'Ecole préparatoire en Sciences et techniques Création du sous compte n°44 au sein du compte 402.003</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_59.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_59.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 20 du 21/10/2009</td>
                                    <td>Gestion comptable de l'Ecole préparatoire en sciences économiques, commerciales et sciences de gestion Création du sous compte n°43 au sein du compte 402.001</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_58.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_58.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 19 du 10/09/2009</td>
                                    <td>Fonctionnement du compte d'affectation spéciale n°302.122</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_57.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_57.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 18 du 18/08/2009</td>
                                    <td>Répartition des ressources du fonds de revenu complémentaire entre l'administration fiscale et les services appelés à apporter une assistance aux services fiscaux</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_56.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_56.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 17 du 13/06/2009</td>
                                    <td>Dispositif de lutte contre la fraude fiscale</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_55.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_55.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 16 du 07/06/2009</td>
                                    <td>Modalités de comptabilisation du produit de la provision pour remise en état des sites, instituée par la loi relative aux hydrocarbures</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_54.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_54.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 15 du 07/03/2009</td>
                                    <td>Généralisation de la procédure de paiement par voie de virement à l'ensemble des pensions concédées par L'État au titre de la guerre de libération nationale</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_53.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_53.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 14 du 25/05/2009</td>
                                    <td>Fonctionnement du compte d'affectation spéciale n°302.128</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_52.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_52.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 13 du 25/05/2009</td>
                                    <td>Fonctionnement du compte d'affectation spéciale n°302.126</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_51.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_51.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 12 du 25/05/2009</td>
                                    <td>Fonctionnement du compte d'affectation spéciale n°302.121</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_50.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_50.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 11 du 19/05/2009</td>
                                    <td>Gestion Comptable de L'Ecole de formation Technique de pêche er d'Aquaculture à Ghazaout Création du sous compte N° 40 au sein du compte 402.001</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_48.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_48.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 10 du 18/05/2009</td>
                                    <td>Gestion comptable du centre national de médecine du sport</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_47.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_47.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 09 du 25/05/2009</td>
                                    <td>Acquisition par l'Etat de biens immobiliers auprès de promoteurs publics ou privés</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_46.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_46.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 07 du 22/02/2009</td>
                                    <td>Comptabilisation des produits miniers</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_44.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_44.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 06 du 17/02/2009</td>
                                    <td>Procédure de paiement par accréditif des dépenses de l'État des collectivités locales et des Établissements publics à caractère administratif</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_43.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_43.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 05 du 17/02/2009</td>
                                    <td>Prêt au gouvernement de la république de Cuba</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_42.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_42.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 04 du 12/02/2009</td>
                                    <td>Modalités d'engagement et d'exécution des dépenses liées au déroulement des élections présidentielles du 09 Avril 2009</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_41.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_41.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 03 du 14/02/2009</td>
                                    <td>Modalités de prise en charge du financement des projets retenus par la réparation des dégats causés par les intempéries au niveau des wilayas des hauts plateaux</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_40.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_40.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 02 du 10/02/2009</td>
                                    <td>Fonctionnement du compte d'affectation spéciale n°302.127</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_39.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_39.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 01 du 19/01/2009</td>
                                    <td>Clôture du compte d'affectation spéciale n° 302.040</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_38.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_38.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>Erratum N° 08</td>
                                    <td>Comptabilisation des produits miniers</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_45.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_45.pdf')}}" > Arabe  </a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                <h4><i class="fa fa-caret-down"></i> 2008</h4>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
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
                                    <td>N° 12 du 15/11/2008</td>
                                    <td>Fonctionnement du compte d'affectation spéciale n°302.12</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_37.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_37.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 11 du 04/11/2008</td>
                                    <td>fonctionnement du compte d'affectation spaciale n° 302.089</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_36.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_36.pdf')}}" > Arabe  </a></td>
                                </tr>
                                <tr>
                                    <td>N° 10 du 16/07/2008</td>
                                    <td>Modification de l'instruction n°62 du 29 Mai 1991 relative à la gestion comptable des centres d'information et d'animation de la jeunesse</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_33.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_33.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 09 du 16/07/2008 Erratum</td>
                                    <td>Gestion Comptable de l'office du Parc du Tassili</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_32.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_32.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 08 du 15/07/2008</td>
                                    <td>Gestion comptable du centre de recherche juridique et judiciaire</td>
                                    <td><a href="{{asset('assets/download/reglementation/reglementation_fr_31.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_31.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 07 du 07/06/2008</td>
                                    <td>Comptabilisation du produit de la redevance au titre de la fiscalité pétrolière</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_30.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_30.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 06 du 19/05/2008</td>
                                    <td>Prêt du royaume de Belgique "Accord du 27/11/2007"</td>
                                  <td> <a href="{{asset('assets/download/reglementation/reglementation_fr_29.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_29.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 05 du 17/05/2008</td>
                                    <td>Modalités de comptabilisation du produit de l'impôt forfaitaire unique "IFU"</td>
                                  <td> <a href="{{asset('assets/download/reglementation/reglementation_fr_28.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_28.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 04 du 09/04/2008</td>
                                    <td>Prise en charge des indemnités compensatrices des frais engagés à l'étranger par les personnels civils et militaires</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_27.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_27.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 03 du 04/02/2008</td>
                                    <td>Gestion Comptable du parc National du tassili</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_26.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_26.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 02 du 03/02/2008</td>
                                    <td>Gestion Comptable de la résidence des magistrats</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_25.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_25.pdf')}}" > Arabe  </a></td>
                                </tr> <tr>
                                    <td>N° 01 du 06/01/2008</td>
                                    <td>Gestion comptable du musée maritime national</td>
                                   <td><a href="{{asset('assets/download/reglementation/reglementation_fr_24.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/reglementation_ar_24.pdf')}}" > Arabe  </a></td>
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
