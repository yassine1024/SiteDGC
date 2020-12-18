@extends('header.template')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    th {
        text-align: center;
        margin: auto;
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
        <h1 class="text-center">Paiement électronique</h1>
        <br>
        <br>
        <div class="container" style="background-color: white">
            <br>
            {{--            class="fadeInAnimated"--}}
            <p data-aos="fade-up">Les paiements électroniques contribuent à éliminer le paiement par espèces, favorisent
                la traçabilité des opérations, et offrent aux usagers une garantie de paiement, et plusieurs avantages
                tels le gain de temps, moins de déplacement…etc </p>
            <p data-aos="fade-up">Sous l’égide du Groupement d’intérêt économique pour la monétique (Gie Monétique) et
                en collaboration avec la Banque Extérieure d’Algérie BEA, la Direction Générale de la Comptabilité DGC
                coordonne les travaux de mise en place des paiements électroniques de proximité via les terminaux de
                paiement TPE et à distance via Web services, Terminal de Paiement Virtuel -TPV et ce au niveau des
                recettes des différentes régies financières et de certains établissements publics à caractère
                administratif EPA.</p>
            <p data-aos="fade-up">Les paiements électroniques par carte sont garantis et leur règlement est
                irrévocable.</p>
            <p data-aos="fade-up">Les paiements électroniques sont normalisés, où l’échange et le règlement des
                transactions obéissent à des délais stricts.</p>
            <h2 data-aos="fade-up">Le rôle des différents acteurs </h2>
            <br>
            <ul data-aos="fade-up" style="list-style-type:none;">
                <li data-aos="fade-up"><span style="font-weight: bold">&#10146; Gie Monétique : </span> Organe de régulation des paiements
                    électroniques, composé de 22 banques adhérentes au RMI (Réseau Monétique Interbancaire)……..
                </li>
                <li data-aos="fade-up"><span style="font-weight: bold">&#10146; SATIM : </span> Société d’automatisation des transactions
                    interbancaires monétiques, est l’opérateur technique connecté aux sites Web marchands dits
                    accepteurs du paiement par carte, aux sites des banques émettrices de cartes interbancaires et aux
                    sites des banques acquéreurs, qui garantie les transactions;
                </li>
                <li data-aos="fade-up"><span style="font-weight: bold">&#10146; BEA : </span> Entité bancaire chargée de la mise en place
                    des TPE au niveau des recettes et assure la collecte de la recette pour le compte du Trésor public.
                </li>
                <li data-aos="fade-up"><span style="font-weight: bold">&#10146; La DGC :</span></li>
                <ul style="list-style-type:square" data-aos="fade-up">
                    <li data-aos="fade-up">Coordination des travaux, et mise en place des outils réglementaires, procéduraux et comptables
                        pour couvrir ces nouveaux moyens de paiement électroniques.
                    </li>

                    <li  data-aos="fade-up">Mise en place des outils applicatifs à l’effet de collecter la recette transitant par la BEA et
                        la transférer aux différents postes comptables pour les imputations comptables.
                    </li>
                </ul>
                </li>
            </ul>
            <h2 data-aos="fade-up">Les recettes concernées </h2>
            <br>
            <ul data-aos="fade-up" style="list-style-type:none;">
                <li data-aos="fade-up"><span style="font-weight: bold">&#10146; La Direction Générale des Impôts :</span>
                    <ul data-aos="fade-up" style="list-style-type:square">
                        <li data-aos="fade-up">449 recettes à doter en terminal de paiement électronique TPE</li>
                        <li data-aos="fade-up">Un portail WEB est en cours de réalisation pour le paiement électronique via l’internet
                            (Terminal de Paiement Virtuel -TPV)
                        </li>
                        <li data-aos="fade-up">Les paiements concernent la G50</li>
                    </ul>
                </li>
                <br>
                <li data-aos="fade-up"><span style="font-weight: bold">&#10146; La Direction Générale du Domaine National :</span>
                    <ul data-aos="fade-up" style="list-style-type:square">
                        <li data-aos="fade-up">426 à confirmer recettes à doter en terminal de paiement électronique TPE</li>
                        <li data-aos="fade-up">Les taxes payables par TPE sont : ******, ******, *****(texte réglementaire sollicité lors
                            de la réunion du 17 novembre 2020)
                        </li>

                    </ul>
                </li>
                <br>
                <li data-aos="fade-up"><span style="font-weight: bold">&#10146; La Direction Générale de la Comptabilité :</span>
                    <ul data-aos="fade-up" style="list-style-type:square">
                        <li data-aos="fade-up">625 à confirmer trésoreries communales à doter en terminal de paiement électronique TPE ;
                        </li>
                        <li data-aos="fade-up">Un portail WEB est en cours de réalisation pour le paiement électronique via l’internet
                            (TPV)
                        </li>
                        <li data-aos="fade-up">Les taxes payables par TPE sont : ******, ******, *****voir avec DRECB</li>
                    </ul>
                </li>
                <br>
                <li data-aos="fade-up"><span style="font-weight: bold">&#10146; L’Agence Nationale du Cadastre ANC :</span>
                    <ul  data-aos="fade-up" style="list-style-type:square">
                        <li data-aos="fade-up">200 à confirmer sites à doter en terminal de paiement électronique TPE</li>
                        <li data-aos="fade-up">Un portail WEB est en cours de réalisation pour le paiement électronique via l’internet
                            (TPV)
                        </li>
                        <li data-aos="fade-up">Les taxes payables par TPE sont :
                            <ul data-aos="fade-up" style="list-style-type:upper-roman">
                                <li data-aos="fade-up">Documents relatifs à la publication foncière et à la conservation cadastrale
                                    <ul style="list-style-type:lower-alpha" data-aos="fade-up">
                                        <li data-aos="fade-up">Etablissement des extraits mod CC.4 bis (PR4 bis)</li>
                                        <li data-aos="fade-up">Documents de mises à jour
                                        <ul data-aos="fade-up" style="list-style-type:lower-roman">
                                            <li data-aos="fade-up">Délivrance d’extrait du plan cadastral (papier et fichier numérique plus le procès-verbal de délimitation modèle CC1)</li>
                                            <li data-aos="fade-up">Vérification du document d’arpentage et contrôle des travaux</li>
                                        </ul>
                                        </li>
                                </ul>
                                </li>
                                <li data-aos="fade-up">Extraits de la documentation cadastrale
                                    <ul style="list-style-type: lower-alpha" data-aos="fade-up">
                                        <li data-aos="fade-up">Extrait de la matrice cadastrale (modèle CC.11)</li>
                                        <li data-aos="fade-up">Extrait de l’état de section (modèle CC.12)</li>
                                        <li data-aos="fade-up">Extrait de l’état des changements (modèle CC.13)</li>
                                        <li data-aos="fade-up">Relevé des renseignements d’ordre cadastral (modèle CC.14)</li>
                                        <li data-aos="fade-up">Extrait du plan cadastral</li>
                                        <li data-aos="fade-up">Relevé de renseignements d’ordre général ( CC.6)</li>

                                    </ul>
                                </li>
                                <li data-aos="fade-up">Délivrance de fichier numérique (de la base de données graphique)</li>
                                <li data-aos="fade-up">Extraits ou copies des archives du service du cadastre
                                <ul data-aos="fade-up" style="list-style-type: lower-alpha">
                                    <li data-aos="fade-up">Extrait du tableau indicatif</li>
                                    <li data-aos="fade-up">Extrait du PV de délimitation</li>
                                    <li data-aos="fade-up">Extrait des anciens plans (A4, A3, A2)</li>
                                    <li data-aos="fade-up">Reproduction par feuille des anciens plans numérisés (A0)</li>
                                </ul></li>
                                <li data-aos="fade-up">Travaux topographiques, de délimitations et de barrage
                                    <ul style="list-style-type:lower-alpha" data-aos="fade-up">
                                        <li data-aos="fade-up">Travaux de terrain</li>
                                        <li data-aos="fade-up">Traitement et édition.</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
            <br>
            <br>
        </div>

    </section>
    <br>



    {{--    <p  data-aos="fade-up" >Sous l’égide du Gie Monétique et en collaboration avec la Banque Extérieure d’Algérie BEA, la Direction--}}
    {{--        Générale de la Comptabilité DGC coordonne les travaux de mise en place du paiement électronique aux des--}}
    {{--        recettes des différentes régies financières et de certains EPA.</p>--}}
    {{--    <h2 data-aos="fade-up">Le Rôle de chaque acteur </h2>--}}
    {{--    <br>--}}
    {{--    <ul  data-aos="fade-up" style="list-style-type:none;">--}}
    {{--        <li ><span >&#10146; Gie Monétique : ***************** </span></li>--}}
    {{--        <li ><span >&#10146; BEA : mise en place des TPE au niveau des recettes et collecte de la recette pour le compte du--}}
    {{--                        Trésor.</span>--}}
    {{--        </li>--}}
    {{--        <li> <span >&#10146; La DGC :</span></li>--}}
    {{--        <ul style="list-style-type:square" data-aos="fade-up">--}}
    {{--            <li>Coordination des travaux, mise en place des outils réglementaire, procéduraux et--}}
    {{--                comptables pour couvrir ces nouveaux moyens de paiement--}}
    {{--            </li>--}}

    {{--            <li>Mise en place des outils applicatifs à l’effet de collecter la recette transitant par la--}}
    {{--                BEA et la transférer aux différents postes comptable pour passation des écritures comptable.--}}
    {{--            </li>--}}
    {{--        </ul>--}}
    {{--        </li>--}}
    {{--    </ul>--}}
    {{--    <h2 data-aos="fade-up">Les recettes à doter </h2>--}}
    {{--    <br>--}}
    {{--    <ul  data-aos="fade-up" style="list-style-type:none;">--}}
    {{--        <li><span >&#10146; La Direction Générale des Impôts :</span>--}}
    {{--            <ul style="list-style-type:square">--}}
    {{--                <li>449 recettes à doter en terminal de paiement électronique TPE</li>--}}
    {{--                <li>Un portail WEB est en cours de réalisation pour le paiement électronique via l’internet--}}
    {{--                    (TPV)--}}
    {{--                </li>--}}
    {{--                <li>Les paiements concernent la G50</li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}
    {{--        <br>--}}
    {{--        <li data-aos="fade-up"><span >&#10146; La Direction Générale du Domaine National :</span>--}}
    {{--            <ul style="list-style-type:square">--}}
    {{--                <li>*** recettes à doter en terminal de paiement électronique TPE</li>--}}
    {{--                <li>Les taxes payables par TPE sont : ******, ******, *****</li>--}}

    {{--            </ul>--}}
    {{--        </li>--}}
    {{--        <br>--}}
    {{--        <li data-aos="fade-up"><span >&#10146; La Direction Générale de la Comptabilité :</span>--}}
    {{--            <ul style="list-style-type:square">--}}
    {{--                <li>****** trésoreries communales  à doter en terminal de paiement électronique TPE</li>--}}
    {{--                <li>Un portail WEB est en cours de réalisation pour le paiement électronique via l’internet (TPV)</li>--}}
    {{--                <li>Les taxes payables par TPE sont : ******, ******, *****</li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}
    {{--        <br>--}}
    {{--        <li data-aos="fade-up"><span >&#10146; L’Agence Nationale du Cadastre ANC :</span>--}}
    {{--            <ul style="list-style-type:square">--}}
    {{--                <li>******* sites à doter en terminal de paiement électronique TPE</li>--}}
    {{--                <li>Un portail WEB est en cours de réalisation pour le paiement électronique via l’internet (TPV)</li>--}}
    {{--                <li>Les taxes payables par TPE sont : ******, ******, *****</li>--}}
    {{--            </ul>--}}
    {{--        </li>--}}

    {{--    </ul>--}}



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
