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
        <h1 class="text-center">Système comptable Financier</h1>
        <br>
        <br>
        <div class="container" style="background-color: white">
            <br>
            <h4 data-aos="fade-up"> Le Système Comptable Financier</h4>
            <p data-aos="fade-up">Le Système Comptable Financier s’inscrit dans le cadre de la mise à jour des
                instruments
                devant accompagner les réformes économiques et financières. En fait, il s’agit d’un
                changement de la culture comptable, qu’elle dépasse le champ de la comptabilité qui
                consiste à faire converger à des règles comptables appliquées par les entreprises
                algériennes vers les normes IFRS ; ces normes constituent la référence mondiale
                puisqu’elles sont appliquées par plus de 100 pays et plus de 120 organismes
                professionnels dans le monde.
            </p>
            <p data-aos="fade-up">
                Ainsi que, ce nouveau référentiel comptable prend en considération la majeure partie des
                normes existantes en matière des IFRS, ce qui constitue un choix d’avant-garde,
                puisqu’il reprend les aspects liés à la définition du cadre conceptuel, les règles
                générales et spécifiques d’évaluation et de comptabilisation et présentation des états
                financiers.
            </p>
            <p data-aos="fade-up"><b>Pourquoi le Système Comptable Financier SCF ?</b></p>
            <p data-aos="fade-up">L’Algérie a connu, depuis les années 1990, de nombreuses réformes touchant tous les
                domaines de la vie économique, sociale, politique, juridique et culturelle.</p>
            <p data-aos="fade-up">Les réformes économiques introduites dans ce cadre ont permis une ouverture plus
                importante au secteur privé, largement dominant, aujourd’hui, puisque le tissu
                économique actuel est à 99% privé et représente plus de 80% du PIB, mais également la
                révision et/ou l’introduction de nouveaux textes réglementaires à l’effet d’instaurer un
                environnement favorisant la promotion d’une économie libérale, telle que consacrée
                depuis la Constitution de 1989 et maintenu par toutes les constitutions qui lui ont
                succédé. Alors que tous les textes relatifs à la vie économique ont connu des réformes
                notables, celui qui permet de mesurer la situation financière et la performance des
                entreprises, c’est-à-dire le Plan comptable national, n’a pratiquement – hormis
                l’introduction de deux comptes – pas connu de changement depuis sa promulgation en
                1975.</p>
            <p data-aos="fade-up">En fait, le Plan comptable national (PCN) ne semble plus adapté à la nouvelle
                situation
                du pays : il date de 1975, et à l’époque, le pays était sous le régime de l’économie
                dirigée. A présent, l’économie de marché est la doctrine officielle de l’Etat et le PCN
                ne correspond plus aux nouvelles réalités économiques induites par la globalisation et
                la mondialisation auxquelles les groupes algériens vont devoir se soumettre. Les
                entreprises algériennes ont besoin d’une bonne visibilité à l’étranger, notamment celles
                disposant de plans de développement à l’international.</p>
            <p data-aos="fade-up">En outre, les scandales financiers qui ont eu lieu dans le monde et en Algérie à
                partir
                de 2002, ajoutés à la crise financière, ont conduit les autorités à accélérer la
                révision du processus de traitement de l’information financière. C’est dans ce contexte
                qu’a été introduit le système comptable financier. Bien qu’il représente une forme
                simplifiée des normes internationales d’informations financières (IFRS), il exprime une
                évolution significative par rapport aux normes et pratiques anciennes du PCN qui,
                rappelons-le, a été conçu pour une économie planifiée et pour des institutions dans leur
                quasi-totalité étatiques.</p>
            <p data-aos="fade-up"><b>Cadre juridique régissant le Système Comptable Financier :</b></p>
            <p data-aos="fade-up">Ce système comptable financier est mis en application par un cadre législatif et
                réglementaire conformément à la loi n° 07-11 du 15 Dhou El Kaada 1428 correspondant au
                25 novembre 2007 portant Système Comptable Financier (J.O n°74), comme suit :</p>
            <p data-aos="fade-up">- Décret exécutif n° 08-156 du 20 Joumada El Oula 1429 correspondant au 26 mai 2008
                portant application des dispositions de la loi n° 07-11 du 15 Dhou El Kaada 1428
                correspondant au 25 novembre 2007 portant système comptable financier (J.O n°27 );</p>
            <p data-aos="fade-up">- Décret exécutif n° 09-110 du , 11 Rabie Ethani 1430 correspondant au 7 avril 2009
                fixant les conditions et modalités de la comptabilité au moyen de systèmes informatiques
                (J.O n°21 );</p>
            <p data-aos="fade-up">- Arrêté du 23 Rajab 1429 correspondant au 29 juillet, fixant les règles d’évaluation
                et
                de comptabilisation, le contenu et la présentation des états financiers ainsi que la
                nomenclature et les règles de fonctionnement des comptes (J.O n°19 );</p>
            <p data-aos="fade-up">- Arrêté du 23 Rajab 1429 correspondant au 29 juillet, fixant les seuils de chiffre
                d’affaires, d’effectif et l’activité applicables aux petits entités pour la tenue d’une
                comptabilité financière simplifiée (J.O n°19 );</p>
            <p data-aos="fade-up">- Instruction ministérielle n° 02 du 29 octobre 2009, portant première application du
                système comptable financier (Tableau de correspondance PCN/SNF en annexe).
            </p>

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

