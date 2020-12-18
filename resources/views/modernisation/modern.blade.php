@extends('header.template')
{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}

{{--link  --}}
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/aos.css')}}" rel="stylesheet">

@section('content')
    <section id="tabs">
        <br>
        <br>
        <h1 class="text-center">Modernisation de Systèmes de Traitement de Paiements</h1>
        <br>
        <br>
        <div class="container" style="background-color: white">
            <br>

            <h4 data-aos="fade-up">Modernisation de Systèmes de Traitement de Paiements</h4>
            <p data-aos="fade-up">La modernisation du système de traitement de paiements s’inscrit dans le cadre de la
                réforme du secteur bancaire et financier. En fait, ce système regroupe l’ensemble des instruments et des
                procédures qui permettent le règlement des créances et des dettes, ainsi que les transferts de fonds
                entre agents économiques.</p>
            <p data-aos="fade-up">Les travaux engagés par le Trésor Public pour la modernisation du système de
                traitement de paiements, ont abouti à ce qui suit :</p>
            <p data-aos="fade-up"><b>1. La mise en place de deux systèmes de traitement de paiements au niveau du Trésor
                    Public (ATCI et RTGS) :</b></p>
            <ol data-aos="fade-up" type="A">
                <li data-aos="fade-up">La mise en place du système de télécompensation interbancaire ATCI;</li>
                <li data-aos="fade-up">La mise en place du système de règlement brut et en temps réel des gros montants
                    RTGS-ARTS (Real Time Gross Settlement-Algeria Real Time Settelment).
                </li>
            </ol>
            <p data-aos="fade-up"><b>2. La mise en place d’un dispositif de prévention et de lutte contre l’émission de
                    chèques sans provision au niveau du Trésor Public à travers l’application informatique qui prend en
                    charge les déclarations des incidents de paiement pour absence ou insuffisance de provision.</b></p>
            <p data-aos="fade-up"><b>A) Mise en place de deux systèmes de traitement de paiements au niveau du Trésor
                    Public (ATCI et RTGS-ARTS) :</b></p>
            <p data-aos="fade-up">Pour des raisons d’efficacité économique et de sécurité des échanges, la modernisation
                du système de traitement de paiements répond à un principe de spécialisation des systèmes de règlement
                interbancaire, selon la nature et la valeur des ordres de paiement qui y sont échangés.</p>
            <p data-aos="fade-up">Le paiement de montants élevés se règle via le système de règlement brut et en temps
                réel des gros montants RTGS (Real Time Gross Settlement) à travers une plate-forme unique gérée par
                l’Agent Comptable Central du Trésor (ACCT), tandis que le paiement de montants inférieurs à un million
                de dinars (1.000.000,00DA) se règle via le système de télécompensation interbancaire ATCI.</p>
            <p data-aos="fade-up"><b>I. Mise en place du système de télécompensation interbancaire ATCI au niveau du
                    Trésor Public :</b></p>
            <p data-aos="fade-up">C’est un système interbancaire de compensation électronique des instruments de
                paiement de masse, fonctionnant sur le principe de la compensation multilatérale des ordres de paiements
                présentés par les participants au moyen d’échanges interbancaires :</p>
            <p data-aos="fade-up">- d’opérations dématérialisées ;</p>
            <p data-aos="fade-up">- d’images scannérisées des valeurs papier ;</p>
            <p data-aos="fade-up">- d’autorisations pour les opérations de cartes bancaires (retraits, paiements) et les
                prélèvements.</p>
            <p data-aos="fade-up">Il repose sur l’automatisation complète dans le traitement des flux d’échanges et la
                dématérialisation des instruments de paiement.</p>
            <p data-aos="fade-up">Il est doté d’une plate forme centrale et géré par un opérateur à savoir :</p>
            <p data-aos="fade-up">e Centre de Précompensation CPI Interbancaire qui assure la régularité et la
                conformité des opérations traitées aux règles définis dans les normes interbancaires.</p>
            <p data-aos="fade-up">Pour ce système, le réseau du Trésor Public a opté pour le statut de participant
                indirect, car son intervention se fait par le biais de la Banque d’Algérie (les Trésoreries opèrent avec
                les succursales de la Banque d’Algérie, pour le traitement des opérations relatives aux chèques et aux
                virements au titre du système ATCI, via les CD-ROM en l’absence d’un réseau intranet et d’un système
                d’information au niveau des Trésoreries).</p>
            <p data-aos="fade-up"><b>a) Télécompensation des chèques Trésor normalisés :</b></p>
            <p data-aos="fade-up">En premier lieu, la normalisation des chèques Trésor était une procédure préalable
                indispensable pour la réalisation du système de télécompensation au niveau du Trésor Public, car elle
                sert à faciliter le traitement des chèques Trésor dans le cadre de la télécompensation.</p>
            <p data-aos="fade-up">La dématérialisation consiste en la transformation du support papier en fichiers «
                données » et fichiers « image ». Pour permettre cette dématérialisation, il y a lieu de procéder à la
                normalisation du support papier.</p>
            <p data-aos="fade-up"><b>b) Télécompensation des virements électroniques :</b></p>
            <p data-aos="fade-up">Le virement est l’instrument le moins coûteux et le plus sûr des instruments de
                paiement. Il permet de réduire les délais de paiement ou de recouvrement à condition d’automatiser son
                traitement au niveau du réseau interne du Trésor Public.</p>
            <p data-aos="fade-up">Les virements acceptés par le système ATCI ne concernent que les montants inférieurs à
                un million de dinars.</p>
            <p data-aos="fade-up"><b>II. Mise en place du système de règlement brut et en temps réel des gros montants
                    RTGS-ARTS (Real Time Gross Settlement) :</b></p>
            <p data-aos="fade-up">Le RTGS est un système de paiement spécifique pour les gros montants qui permet
                d’effectuer des opérations en temps réel, sur une base brute, irrévocable et en continu qui garantit un
                haut niveau de rapidité et de sécurité ainsi qu’une gestion rationnelle du fiduciaire.</p>
            <p data-aos="fade-up">Pour ce système, le réseau du Trésor Public a opté pour le statut de participant
                direct. Ce statut lui permet de disposer d’une plateforme et ainsi de gérer ses opérations en temps
                réel. Cette plate forme installée auprès de l’Agent Comptable Central du Trésor ACCT.</p>
            <p data-aos="fade-up"><b>B) Mise en place d’un dispositif de prévention et de lutte contre l’émission de
                    chèques sans provision au niveau du Trésor Public à travers l’application informatique qui prend en
                    charge les déclarations des incidents de paiement pour absence ou insuffisance de provision :</b>
            </p>
            <p data-aos="fade-up">A ce titre, une application informatique relative aux déclarations des incidents de
                paiement du Trésor Public a été mise en place.</p>
            <p data-aos="fade-up">Elle sert à centraliser les fichiers émanant des postes comptables et les acheminer
                vers la Centrale des Impayés.</p>
            <p data-aos="fade-up">Par ailleurs, une réflexion est engagée par les responsables de la Direction Générale
                de la Comptabilité pour faire bénéficier le réseau du Trésor Public de la consultation à distance du
                fichier des interdits de chéquiers en temps réel à travers l’installation de la ligne X 25.</p>

            <br>
        </div>

    </section>
    <br>
    <script>
        AOS.init();
    </script>
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

