@extends('header.template')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    th{
        text-align: center;margin: auto;
    }
</style>
@section('content')
    <section id="tabs">
        <br>
        <br>
        <h1 class="text-center">Périscope de la DGC </h1>
        <br>
        <br>
        <div class="container" style="background-color: white">
            <br>
            <p data-aos="fade-up" ><b>Périscope de la DGC : </b></p>
             <p data-aos="fade-up">Avant la mise en place du nouveau système d’Information du Trésor, la vérification des virements (salaire, primes, …) se faisait à base du numéro e compte du bénéficiaire.</p>
            <p data-aos="fade-up">Les postes comptables pouvaient contrôler la concordance des noms et des numéros de comptes pour ceux domiciliés au trésor, mais n’avaient aucun moyen de vérifier les comptes domiciliés au niveau des autres banques et surtout les CCP. Cette défaisance avait casé plusieurs détournement pour lesquels les chefs de poste sont ****** (responsabilité pécuniaire) même s’ils n’ont rien à voir avec le détournement.</p>
            <p data-aos="fade-up">Afin de remédier à cette situation, la DGC a exigé des ordonnateurs de rajouter l’information sur le N° de sécurité sociale pour les salariés, et le NIF pour les entreprises, sur les états de virement, cette exigence a suscité une vague de contestations et de résistances.</p>
            <p data-aos="fade-up">Cependant, il y a lieu de  préciser qu’en se basant sur l’unicité de ces deux identifiants, le nouveau  système d’information du Trésor a détecté des centaines de virements en double sur le territoire national. </p>

            <img data-aos="zoom-in" style="margin: auto" class="d-block w-75 h-75" src="{{asset('assets/images/periscope.png')}}" width="100%" height="100%">
            <br>
            <p data-aos="fade-up">La DGC sollicite la contribution et la compréhension de tous les ordonnateurs afin de mieux contrôler la dépense publique.</p>

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
