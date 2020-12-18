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
        <h1 class="text-center">Documents pour constitution de dossiers</h1>
        <br>
        <br>
        <div class="container"  style="background-color: white">
            <br>
           <h2 data-aos="fade-up">Demande pour changement de compte</h2>
            <ul data-aos="fade-up">
                <li data-aos="fade-up">Demande manuscrite pour changement de compte.</li>
                <li data-aos="fade-up">Chéque barré.</li>
                <li data-aos="fade-up">Photo copie de brevet.</li>
                <li data-aos="fade-up">Photo copie de piéce d'identité nationale ou permis de conduire.</li>
            </ul>
            <h2 data-aos="fade-up">Piéce controle pour article 28</h2>
            <ul data-aos="fade-up">
                <li data-aos="fade-up">Attestation de non perception d'une pension d'invalidité CNAS</li>
                <li data-aos="fade-up">Attestation de non perception d'une pension d'invalidité CASNOS</li>
                <li data-aos="fade-up">Photo copie de la carte d'identité</li>
                <li data-aos="fade-up">Deux (02) photos</li>
            </ul>
            <h2 data-aos="fade-up">Dossier de réversion et capital décès</h2>
            <ul data-aos="fade-up">
                <li data-aos="fade-up">Deux (02) actes de décès.</li>
                <li data-aos="fade-up">Deux (02) actes de naissance n° 12 concernant la veuve.</li>
                <li data-aos="fade-up">Deux (02) actes de mariage.</li>
                <li data-aos="fade-up">Deux (02) fiches familiales de la veuve.</li>
                <li data-aos="fade-up">Deux (02) copies de la frédha certifiées par le notaire.</li>
                <li data-aos="fade-up">Deux (02) chèques barrés au nom de la veuve.</li>
                <li data-aos="fade-up">Deux (02) copies de la pièce d’identité de la veuve.</li>
                <li data-aos="fade-up">Une (01) attestation communale.</li>
                <li data-aos="fade-up">Brevet original.</li>
                <li data-aos="fade-up">Photo copie de la pièce d’identité de déposant du dossier.</li>
                <li data-aos="fade-up">Photo copie de l’accusé de reception.</li>

            </ul>
            <h2 data-aos="fade-up">Pièces contrôle pour article 24</h2>
            <ul data-aos="fade-up">
                <li data-aos="fade-up">Photo copie de brevet d’inscription.</li>
                <li data-aos="fade-up">Certificat de vie.</li>
                <li data-aos="fade-up">Certificat de non mariage.</li>
                <li data-aos="fade-up">Extrait de rôle attestation d’affiliation ou non affiliation (CNAS) et (CASNOS).</li>
            </ul>
            <h2 data-aos="fade-up">Pièces de réversion 74 et 129 vers art 25</h2>
            <ul data-aos="fade-up">
                <li data-aos="fade-up">Un (01) acte de naissance de l’intéressé.</li>
                <li data-aos="fade-up">Un (01) acte de décès (mari).</li>
                <li data-aos="fade-up">Un (01) acte de décès (mère).</li>
                <li data-aos="fade-up">Une (01) fiche familiale au nom du chahid.</li>
                <li data-aos="fade-up">Une (01) fiche familiale au nom de l’intéressé.</li>
                <li data-aos="fade-up">Une (01) résidence.</li>
                <li data-aos="fade-up">Un (01) certificat de non mariage.</li>
            </ul>
            <h2 data-aos="fade-up">Pièces de contrôle pour article  74 et 156 et 25 : Hommes</h2>
            <ul data-aos="fade-up">
                <li data-aos="fade-up">Photo copie brevet.</li>
                <li data-aos="fade-up">Certificat de vie.</li>
                <li data-aos="fade-up">Extrait de rôle.</li>
                <li data-aos="fade-up">Attestation d’affiliation ou non affiliation (CNAS) et (CASNOS).</li>
                <li data-aos="fade-up">Attestation de perception ou non perception de retraite (CASNOS) et (CNR).</li>
            </ul>
            <h2 data-aos="fade-up">Pièces de contrôle pour article   25 : Femme</h2>
            <ul data-aos="fade-up">
                <li data-aos="fade-up">Photo copie de la carte d’identité.</li>
                <li data-aos="fade-up">Deux (02) photos.</li>
                <li data-aos="fade-up">Chèque barré.</li>
                <li data-aos="fade-up">Certificat de célibat ou de non remariage.</li>
            </ul>
            <h2 data-aos="fade-up">Modèles d’engagements à télécharger</h2>
            <ul data-aos="fade-up">
               <li data-aos="fade-up"><a href="{{route('documenttt',['file'=>'engagement_prome_chahid.jpg'])}}">Engagement prime de chahid
                   <br>تعهد بالإلتزام : منحة شهيد</a></li>
               <li data-aos="fade-up"> <a href="{{route('documenttt',['file'=>'engagement_pret-vehicule_1.jpg'])}}">Engagement prêt véhicule remboursement sur le montant initial.
                       <br>  تعهد بالإلتزام : قرض السيارة الٱولي</a></li>
               <li data-aos="fade-up"> <a href="{{route('documenttt',['file'=>'engagement_pret-vehicule_2.jpg'])}}">Engagement prêt véhicule remboursement sur le montant restant
                       <br> تعهد بالإلتزام : قرض السيآرة على باقي</a></li>
            </ul>
{{--zmail.fm.gov.dz--}}
{{--            autommatique--}}
            <br>
            <br>
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
