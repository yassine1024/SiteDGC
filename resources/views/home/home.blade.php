
@extends('header.templated')
{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}

{{--link  --}}
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/aos.css')}}" rel="stylesheet">


<script>
    AOS.init();
</script>

@section('content')
    <style>
        @-ms-viewport {
            width: device-width; }
        body {
            -ms-overflow-style: scrollbar; }

        @media screen and (max-width: 480px) {
            html, body {
                min-width: 320px; } }
        html {
            box-sizing: border-box; }

        *, *:before, *:after {
            box-sizing: inherit; }

        body {
            background: #ffffff; }
        body.is-preload *, body.is-preload *:before, body.is-preload *:after {
            -moz-animation: none !important;
            -webkit-animation: none !important;
            -ms-animation: none !important;
            animation: none !important;
            -moz-transition: none !important;
            -webkit-transition: none !important;
            -ms-transition: none !important;
            transition: none !important; }



        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block; }

        body {
            line-height: 1; }

        ol, ul {
            list-style: none; }

        blockquote, q {
            quotes: none; }
        blockquote:before, blockquote:after, q:before, q:after {
            content: '';
            content: none; }

        table {
            border-collapse: collapse;
            border-spacing: 0; }

        body {
            -webkit-text-size-adjust: none; }
        body {
            padding-top: 3.25rem; }


        mark {
            background-color: transparent;
            color: inherit; }

        input::-moz-focus-inner {
            border: 0;
            padding: 0; }

        input, select, textarea {
            -moz-appearance: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            appearance: none; }

        /* Typography */
        html {
            font-size: 13pt; }
        @media screen and (max-width: 1680px) {
            html {
                font-size: 11pt; } }
        @media screen and (max-width: 980px) {
            html {
                font-size: 12pt; } }
        @media screen and (max-width: 480px) {
            html {
                font-size: 11pt; } }

        body {
            background-color: #ffffff;
            color: #444444; }

        body, input, select, textarea {
            font-family: "Times New Roman", Times, serif;
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.65; }

        .wrapper {
            padding: 8rem 0 6rem 0 ;
            position: relative;
            z-index: 1; }
        @media screen and (max-width: 1280px) {
            .wrapper {
                padding: 4rem 0 2rem 0 ; } }
        @media screen and (max-width: 736px) {
            .wrapper {
                padding: 3rem 0 1rem 0 ; } }
        @media screen and (max-width: 480px) {
            .wrapper {
                padding: 2rem 0 0.1rem 0 ; } }


        #banner {
            -ms-flex-align: center;
            -ms-flex-pack: center;
            background-color: #111111;
            color: rgba(255, 255, 255, 0.5);
            -moz-align-items: center;
            -webkit-align-items: center;
            -ms-align-items: center;
            align-items: center;
            display: -moz-flex;
            display: -webkit-flex;
            display: -ms-flex;
            display: flex;
            -moz-justify-content: center;
            -webkit-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            /*background-image: url("../../images/banner.jpg");*/
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-top: 0;
            display: -ms-flexbox;
            height: 35rem !important;
            min-height: 35rem;
            overflow: hidden;
            position: relative;
            text-align: center;
            width: 100%; }
        #banner input, #banner select, #banner textarea {
            color: #ffffff; }
        #banner a {
            color: #425ece; }
        #banner strong, #banner b {
            color: #ffffff; }
        #banner h1, #banner h2, #banner h3, #banner h4, #banner h5, #banner h6 {
            color: #ffffff; }
        #banner blockquote {
            border-left-color: rgba(255, 255, 255, 0.25); }
        #banner code {
            background: rgba(255, 255, 255, 0.075);
            border-color:#ffffff }
        #banner hr {
            border-bottom-color: rgba(255, 255, 255, 0.25); }

        #banner label {
            color: #ffffff; }


        #banner select {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' preserveAspectRatio='none' viewBox='0 0 40 40'%3E%3Cpath d='M9.4,12.3l10.4,10.4l10.4-10.4c0.2-0.2,0.5-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.4l3.3,3.3c0.2,0.2,0.4,0.5,0.4,0.9 c0,0.4-0.1,0.6-0.4,0.9L20.7,31.9c-0.2,0.2-0.5,0.4-0.9,0.4c-0.3,0-0.6-0.1-0.9-0.4L4.3,17.3c-0.2-0.2-0.4-0.5-0.4-0.9 c0-0.4,0.1-0.6,0.4-0.9l3.3-3.3c0.2-0.2,0.5-0.4,0.9-0.4S9.1,12.1,9.4,12.3z' fill='rgba(255, 255, 255, 0.25)' /%3E%3C/svg%3E"); }
        #banner select option {
            color: rgba(255, 255, 255, 0.5);
            background-color: #111111; }

        #banner:before {
            -moz-transition: opacity 3s ease;
            -webkit-transition: opacity 3s ease;
            -ms-transition: opacity 3s ease;
            transition: opacity 3s ease;
            -moz-transition-delay: 1.25s;
            -webkit-transition-delay: 1.25s;
            -ms-transition-delay: 1.25s;
            transition-delay: 1.25s;
            background: #111111;
            content: '';
            display: block;
            height: 100%;
            left: 0;
            opacity: 0.45;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1; }
        #banner:after {
            /*banner carousel*/
            background: linear-gradient(120deg, #72b0fe 0%, rgba(245, 245, 245, 0.04) 50%);
            content: ' ';
            display: block;
            height: 100%;
            left: 0;
            opacity: 0.6;
            position: absolute;
            top: 0;
            webkit-linear-gradientidth: 100%;
            width: 100%;
            z-index: 1; }

        body.is-preload #banner:before {
            opacity: 1; }




        .highlights {
            width: 100%;
            margin: 2.5rem 0;
            display: -moz-flex;
            display: -webkit-flex;
            display: -ms-flex;
            display: flex;
            -moz-flex-wrap: wrap;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -moz-align-items: -moz-stretch;
            -webkit-align-items: -webkit-stretch;
            -ms-align-items: -ms-stretch;
            align-items: stretch;

        }
        .highlights > * {
            -moz-flex-shrink: 1;
            -webkit-flex-shrink: 1;
            -ms-flex-shrink: 1;
            flex-shrink: 1;
            -moz-flex-grow: 0;
            -webkit-flex-grow: 0;
            -ms-flex-grow: 0;
            flex-grow: 0; }
        .highlights > * {
            width: 33.3333333333%; }
        .highlights > * {
            padding: 1.5rem;
            width: calc(33.3333333333% + 1rem); }
        .highlights > :nth-child(-n + 3) {
            padding-top: 0; }
        .highlights > :nth-last-child(-n + 3) {
            padding-bottom: 0; }
        .highlights > :nth-child(3n + 1) {
            padding-left: 0; }
        .highlights > :nth-child(3n) {
            padding-right: 0; }
        .highlights > :nth-child(3n + 1),
        .highlights > :nth-child(3n) {
            width: calc(33.3333333333% + -0.5rem); }
        .highlights .content {
            border-radius: 4px;
            height: 100%;
            padding: 3rem;
            text-align: center;

        }
        .highlights .content .icon {
            font-size: 5rem; }
        .highlights > div > :last-child {
            margin-bottom: 0; }
        @media screen and (max-width: 980px) {
            .highlights > * {
                width: 50%; }
            .highlights > * {
                padding: 1rem;
                width: calc(33.3333333333% + 0.6666666667rem); }
            .highlights > :nth-child(-n + 3) {
                padding-top: 1rem; }
            .highlights > :nth-last-child(-n + 3) {
                padding-bottom: 1rem; }
            .highlights > :nth-child(3n + 1) {
                padding-left: 1rem; }
            .highlights > :nth-child(3n) {
                padding-right: 1rem; }
            .highlights > :nth-child(3n + 1),
            .highlights > :nth-child(3n) {
                padding: 1rem;
                width: calc(50% + 1rem); }
            .highlights > * {
                padding: 1rem;
                width: calc(50% + 1rem); }
            .highlights > :nth-child(-n + 2) {
                padding-top: 0; }
            .highlights > :nth-last-child(-n + 2) {
                padding-bottom: 0; }
            .highlights > :nth-child(2n + 1) {
                padding-left: 0; }
            .highlights > :nth-child(2n) {
                padding-right: 0; }
            .highlights > :nth-child(2n + 1),
            .highlights > :nth-child(2n) {
                width: calc(50% + 0rem); }
            .highlights .content {
                padding: 2rem; } }
        @media screen and (max-width: 736px) {
            .highlights > * {
                width: 100%; }
            .highlights > * {
                padding: 1rem;
                width: calc(33.3333333333% + 0.6666666667rem); }
            .highlights > :nth-child(-n + 3) {
                padding-top: 1rem; }
            .highlights > :nth-last-child(-n + 3) {
                padding-bottom: 1rem; }
            .highlights > :nth-child(3n + 1) {
                padding-left: 1rem; }
            .highlights > :nth-child(3n) {
                padding-right: 1rem; }
            .highlights > :nth-child(3n + 1),
            .highlights > :nth-child(3n) {
                padding: 1rem;
                width: calc(100% + 2rem); }
            .highlights > * {
                padding: 1rem;
                width: calc(50% + 1rem); }
            .highlights > :nth-child(-n + 2) {
                padding-top: 1rem; }
            .highlights > :nth-last-child(-n + 2) {
                padding-bottom: 1rem; }
            .highlights > :nth-child(2n + 1) {
                padding-left: 1rem; }
            .highlights > :nth-child(2n) {
                padding-right: 1rem; }
            .highlights > :nth-child(2n + 1),
            .highlights > :nth-child(2n) {
                padding: 1rem;
                width: calc(100% + 2rem); }
            .highlights > * {
                padding: 1rem;
                width: calc(100% + 2rem); }
            .highlights > :nth-child(-n + 1) {
                padding-top: 0; }
            .highlights > :nth-last-child(-n + 1) {
                padding-bottom: 0; }
            .highlights > :nth-child(1n + 1) {
                padding-left: 0; }
            .highlights > :nth-child(1n) {
                padding-right: 0; }
            .highlights > :nth-child(1n + 1),
            .highlights > :nth-child(1n) {
                width: calc(100% + 1rem); } }

        .highlights .content {
            background: #ffffff;
            box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.025); }

        .highlights a {
            text-decoration: none;
            color:#444444;
        }
        .highlights a:hover {
            color: #4b50ff;
        }
        .highlights header {
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }

        .highlights header:hover {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        #cta {
            /*background-color: #ce1b28;*/
            color: rgba(1, 1, 1, 0.75);
            background-attachment: fixed;
            font-size: 18px;
            font-weight: bold;
            background-image: linear-gradient(rgba(0, 156, 255, 0.25), rgba(5, 67, 206, 0.25)), url({{asset('assets/images/ministere-des-finances.jpg')}} );
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            text-align: center;
            z-index: 1; }
        #cta input, #cta select, #cta textarea {
            color: #ffffff; }
        #cta a {
            color: rgba(1, 1, 1, 0.75); }
        #cta strong, #cta b {
            color: #ffffff; }
        #cta h1, #cta h2, #cta h3, #cta h4, #cta h5, #cta h6 {
            color: #292929; }
        #cta blockquote {
            border-left-color: rgba(255, 255, 255, 0.25); }
        #cta code {
            background: rgba(255, 255, 255, 0.075);
            border-color: rgba(255, 255, 255, 0.25); }
        #cta hr {
            border-bottom-color: rgba(255, 255, 255, 0.25); }
        #cta input[type="submit"],
        #cta input[type="reset"],
        #cta input[type="button"],
        #cta button,
        #cta .button {
            background-color: transparent;
            box-shadow: inset 0 0 0 1px #ffffff;
            color: #ffffff !important; }
        #cta input[type="submit"]:hover,
        #cta input[type="reset"]:hover,
        #cta input[type="button"]:hover,
        #cta button:hover,
        #cta .button:hover {
            background-color: rgba(255, 255, 255, 0.1); }
        #cta input[type="submit"]:hover:active,
        #cta input[type="reset"]:hover:active,
        #cta input[type="button"]:hover:active,
        #cta button:hover:active,
        #cta .button:hover:active {
            background-color: rgba(255, 255, 255, 0.25); }
        #cta input[type="submit"].primary,
        #cta input[type="reset"].primary,
        #cta input[type="button"].primary,
        #cta button.primary,
        #cta .button.primary {
            box-shadow: none;
            background-color: #ffffff;
            color: #ce1b28 !important; }
        #cta input[type="submit"].primary:hover,
        #cta input[type="reset"].primary:hover,
        #cta input[type="button"].primary:hover,
        #cta button.primary:hover,
        #cta .button.primary:hover {
            background-color: rgba(255, 255, 255, 0.875);
            box-shadow: none; }
        #cta input[type="submit"].primary:hover:active,
        #cta input[type="reset"].primary:hover:active,
        #cta input[type="button"].primary:hover:active,
        #cta button.primary:hover:active,
        #cta .button.primary:hover:active {
            background-color: rgba(255, 255, 255, 0.5); }
        #cta label {
            color: #ffffff; }
        #cta input[type="text"],
        #cta input[type="password"],
        #cta input[type="email"],
        #cta input[type="tel"],
        #cta input[type="search"],
        #cta input[type="url"],
        #cta select,
        #cta textarea {
            background-color: rgba(255, 255, 255, 0.075);
            border-color: rgba(255, 255, 255, 0.25); }
        #cta input[type="text"]:focus,
        #cta input[type="password"]:focus,
        #cta input[type="email"]:focus,
        #cta input[type="tel"]:focus,
        #cta input[type="search"]:focus,
        #cta input[type="url"]:focus,
        #cta select:focus,
        #cta textarea:focus {
            border-color: #ffffff;
            box-shadow: 0 0 0 1px #ffffff; }
        #cta select {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' preserveAspectRatio='none' viewBox='0 0 40 40'%3E%3Cpath d='M9.4,12.3l10.4,10.4l10.4-10.4c0.2-0.2,0.5-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.4l3.3,3.3c0.2,0.2,0.4,0.5,0.4,0.9 c0,0.4-0.1,0.6-0.4,0.9L20.7,31.9c-0.2,0.2-0.5,0.4-0.9,0.4c-0.3,0-0.6-0.1-0.9-0.4L4.3,17.3c-0.2-0.2-0.4-0.5-0.4-0.9 c0-0.4,0.1-0.6,0.4-0.9l3.3-3.3c0.2-0.2,0.5-0.4,0.9-0.4S9.1,12.1,9.4,12.3z' fill='rgba(255, 255, 255, 0.25)' /%3E%3C/svg%3E"); }
        #cta select option {
            color: rgba(255, 255, 255, 0.75);
            background-color: #ce1b28; }
        #cta input[type="checkbox"] + label,
        #cta input[type="radio"] + label {
            color: rgba(255, 255, 255, 0.75); }
        #cta input[type="checkbox"] + label:before,
        #cta input[type="radio"] + label:before {
            background: rgba(255, 255, 255, 0.075);
            border-color: rgba(255, 255, 255, 0.25); }
        #cta input[type="checkbox"]:checked + label:before,
        #cta input[type="radio"]:checked + label:before {
            background-color: #ffffff;
            border-color: #ffffff;
            color: #ce1b28; }
        #cta input[type="checkbox"]:focus + label:before,
        #cta input[type="radio"]:focus + label:before {
            border-color: #ffffff;
            box-shadow: 0 0 0 1px #ffffff; }
        #cta ::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 0.4) !important; }
        #cta :-moz-placeholder {
            color: rgba(255, 255, 255, 0.4) !important; }
        #cta ::-moz-placeholder {
            color: rgba(255, 255, 255, 0.4) !important; }
        #cta :-ms-input-placeholder {
            color: rgba(255, 255, 255, 0.4) !important; }
        #cta ul.alt li {
            border-top-color: rgba(255, 255, 255, 0.25); }
        #cta table tbody tr {
            border-color: rgba(255, 255, 255, 0.25); }
        #cta table tbody tr:nth-child(2n + 1) {
            background-color: rgba(255, 255, 255, 0.075); }
        #cta table th {
            color: #ffffff; }
        #cta table thead {
            border-bottom-color: rgba(255, 255, 255, 0.25); }
        #cta table tfoot {
            border-top-color: rgba(255, 255, 255, 0.25); }
        #cta table.alt tbody tr td {
            border-color: rgba(255, 255, 255, 0.25); }

        #cta .inner {
            position: relative;
            z-index: 3; }
        @media screen and (max-width: 980px) {
            #cta {
                background-attachment: scroll; } }




        strong, b {
            font-weight: 600; }

        em, i {
            font-style: italic; }

        p {
            margin: 0 0 2rem 0; }

        header.special {
            text-align: center;
            margin-bottom: 4rem; }
        header.special p {
            max-width: 75%;
            margin-left: auto;
            margin-right: auto; }



        blockquote {
            border-left-color: rgba(0, 0, 0, 0.25); }

        code {
            background: rgba(0, 0, 0, 0.075);
            border-color: rgba(0, 0, 0, 0.25); }

        hr {
            border-bottom-color: rgba(0, 0, 0, 0.25); }

        /* Inner */
        .inner {
            margin: 0 auto;
            width: 75rem;
            max-width: calc(100% - 6rem); }
        @media screen and (max-width: 480px) {
            .inner {
                max-width: calc(100% - 3rem); } }




    </style>
    {{--Publication--}}
 
    <div class="row" style="margin: auto">
        <div class="col-lg-4" data-aos="zoom-in-up" style="margin-left: auto" >
            <div id="carouselExampleControls" class="carousel slide"
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
                                <td>Direction d'informatique</td>
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
                                        $str1 = substr($str, 0, 600) . ' ';
                                    echo($str1);
                                    ?>
                                    <div id="divhide" style="display: none"> <?php
                                        $str2 = substr($str, 600, $n);
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


        {{--carousel--}}

        <div class="col-lg-6 " data-aos="zoom-in-up" style="margin-right: auto">
            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 " src="{{asset('assets/images/carousel1.png')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 " src="{{asset('assets/images/carousel2.jpg')}}" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            {{--    <ol class="carousel-indicators">--}}
            {{--        <li data-target="#carouselExampleIndicators2" data-slide-to="0" ></li>--}}
            {{--        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>--}}
            {{--    </ol>--}}
            {{--    <div class="carousel-inner">--}}
            {{--        <div class="carousel-item">--}}
            {{--            <img class="d-block w-100 " src="{{asset('assets/images/carousel1.png')}}" alt="First slide">--}}
            {{--        </div>--}}
            {{--        <div class="carousel-item">--}}
            {{--            <img class="d-block w-100 " src="{{asset('assets/images/carousel2.jpg')}}" alt="Second slide">--}}
            {{--        </div>--}}
            {{--    </div>--}}
            {{--    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">--}}
            {{--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
            {{--        <span class="sr-only">Previous</span>--}}
            {{--    </a>--}}
            {{--    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">--}}
            {{--        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
            {{--        <span class="sr-only">Next</span>--}}
            {{--    </a>--}}
        </div>
    </div>
    <!-- Highlights -->
    <section class="wrapper" >
        <div class="inner">
            <header class="special" data-aos="fade-down">
                <h2>LES SERVICES</h2>

            </header>
            <div class="highlights">
                <section data-aos="fade-down-right" >
                    <div class="content">
                        <header>
                            <a href="{{route('whosdgcInfo')}}" > <img  src="{{asset('assets/images/qui_la_dgc.png')}}" width='150' height="150">

                                <h3>{{ trans('site.Qu\'est-ce que la DGC') }}</h3>  </a>
                        </header>

                    </div>
                </section>
                <section data-aos="fade-down" >
                    <div class="content">
                        <header>
						
                            <a href="{{route('reglementation')}}" > <img  src="{{asset('assets/images/Réglementation.png')}}" width='150' height="150"  >
                                  <h3>{{ trans('site.Réglementation') }}</h3></a>
						
                       
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" data-aos="fade-down-left" >

                        <header>
                            <a href="{{route('modernisation')}}"> <img  src="{{asset('assets/images/adresse.png')}}" width='150' height="150"  >
                                <h3>{{ trans('site.Réformes / Modernisation') }}</h3></a>
                        </header>
                        <!--                    <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi-->
                        <!--                        integer non faucibus.</p>-->
                    </div>
                </section>
                <section>
                    <div class="content" data-aos="fade-right" >
                        <header>
                            <a href="{{route('loiDeBudguter')}}" > <img  src="{{asset('assets/images/formulaire.png')}}" width='150' height="150"  >
                                <h3>{{ trans('site.Loi de règlement budgétaire LRB') }}</h3></a>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content"  data-aos="zoom-in" >
                        <header>
                            <a href="{{ route('tableauDeBord') }}" > <img  src="{{asset('assets/images/Consultation_de_solde.png')}}" width='150' height="150">
                                <h3>{{ trans('site.Tableau de bord /indicateur') }}</h3></a>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content"  data-aos="fade-left" >
                        <header>
                            <a href="{{route('registreDoleances')}}"> <img  src="{{asset('assets/images/Registre_de_doléances1.png')}}" width='150' height="150"  >
                                <h3>{{ trans('site.Registre de doléances') }}</h3></a>
                        </header>
                        <!--                    <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi-->
                        <!--                        integer non faucibus.</p>-->
                    </div>
                </section>
                <section>
                    <div class="content"  data-aos="fade-right" >
                        <header>
						 <a  href="{{route('annuaire')}}" > <img  src="{{asset('assets/images/Annuaire_des_services_de_la_DGC.png')}}" width='150' height="150"  >
                                <h3>{{ trans('site.Annuaire des services de la DGC') }}</h3></a>
					
                        </header>

                    </div>
                </section>
                <section>
                    <div class="content"  data-aos="zoom-in" >
                        <header>
                            <a href="{{ route('infrastructures') }}" > <img  src="{{asset('assets/images/Infrastructures.png')}}" width='150' height="150">
                                <h3>{{ trans('site.Infrastructures') }}</h3></a>
                        </header>

                    </div>
                </section>

                <section>
                    <div class="content"  data-aos="fade-left" >
                        <header>
                            <a href="{{route('descriptionContribution')}}" > <img  src=" {{asset('assets/images/note.png')}}" width='150' height="150"  >
                                <h3>{{ trans('site.Appel à contribution') }}</h3></a>
                        </header>
                    </div>
                </section>

                <section >
                    <div class="content p-0"  data-aos="fade-up-right" >
                        <img  src=" {{asset('assets/images/paiement_electronique.bmp')}}" width='100%' height="80%">
                        <header class="p-0" >

                            <a href="{{route('paiementelectronique')}}" > <h3 style="text-align: center">Paiement électronique</h3></a>
                        </header>
                    </div>


                </section>
                <section data-aos="flip-left" class="leschiffres"  style="height: 100%">
                    <div style="text-align:center;font-size:18px;border:2px solid lightblue"><header><a href="{{route('leschiffresdelasemaine')}}">Les chiffres de la semaine</a></header></div>
                    <marquee behavior="slide" direction="up" class="content mt-1 p-2" id="chiffre1" style="height:100%;font-size:18px;padding:0;padding-left:5px;border:2px solid lightblue;">Du 15 au 20 Novembre 2020
                        <br>Impression de :
                        <ul style="list-style-type:disc">
                            <li>1500 chéquiers verts, pour 240.000,00 DA</li>
                            <li>3600 chéquiers jaunes, pour 576.000,00 DA</li>
                            <li>2300 chéquiers Bleus, pour 368.000,00 DA</li>
                        </ul>
                    </marquee>
                </section>
                <section>
                    <div class="content"  data-aos="fade-up-left" >
                        <header>
                            <a href="{{route('document')}}"> <img src="{{asset('assets/images/white_icons/Documents-pour-onstitution-de-dossier.png')}}" width='100' height="100">
                                <h3> Documents pour constitution des dossiers</h3></a>
                        </header>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- CTA -->

    <section  id="cta" class="wrapper">
        <div class="inner">
            {{--            <img style="margin: auto;text-align: center"  src="{{asset('assets/images/White_icons/g153.png')}}">--}}
            <h2>Direction Générale de la Comptabilité</h2>
            <p>constituée d’une administration centrale, sise au siège du Ministère des Finances et de services extérieurs appelés aussi le Trésor public.</p>
        </div>
    </section>
    <!-- Testimonials -->
    <section style="font-size: 18px" class="wrapper">
        <div class="inner">
            <!--les liens-->
            <div class="col-lg-12 pt-2">
                <div class="row  pt-2 pl-3 pr-3 pb-3 pt-1 w-100" >
                    <div class="col-lg-6 ">
                        <a class="" href="#">Evénements</a>
                        <p>Liens utiles :</p>
                        <ul>
                            <li><a href="https://zmail.mf.gov.dz">Messagerie du Ministère des Finances</a></li>
                            <li><a href="http://www.mf.gov.dz/">Site web du Ministère des Finances</a></li>
                            <li><a href="#">Site web du CNC</a></li>
                        </ul>
                        <br>
                        <p>Compteur de visiteurs : 1</p>
                    </div>
                    <div class="col-lg-6 ">
                        <ul>
                            <li><a href="{{route('descriptionContribution')}}">Appel à contribution</a></li>
                            <li><a href="#">Systeme d'information du trésor</a></li>
                            {{--   <li><a href="{{ route('ecolenationaledutrésor') }}">Ecole Nationale du Trésor</a></li>--}}
                            <li><a href="#">Système de  comptabilité de gestion des  hôpitaux (projet 3 COH)</a></li>
                            <li><a href="{{ route('fonddocumentaire') }}">Fond documentaire</a></li>
                            <li><a href="#">Situations numériques des RRF et des EPA</a></li>
                            <li><a href="#">Trésoreries communales par wilaya</a></li>
                            <li><a href="{{route('utiles')}}">Informations utiles</a></li>
                            <li><a href="{{route('periscope')}}">Périscope de la DGC</a></li>

                        </ul>
                    </div>
{{--                    <img style="margin: auto;text-align: center"  src="{{asset('assets/images/White_icons/logo-v05.svg')}}" width="150" height="150">--}}
                </div>

            </div>
            <!--les liens-->


        </div>
    </section>
    <script>
        AOS.init();
    </script>
    <script>
        $(document).ready(function(){
            $('#sshow').on('click', function () {
                $('#divhide').css({'display': 'block'});
                $('#sshow').remove();
            });


            // $("#collapse1 ul").append('<li class="list-group-item" id="fax" >'+result+'</li>');
            setTimeout(function()
            {
                $('#chiffre1').remove();
                $(".leschiffres").append(
                    '                        <marquee behavior="slide" direction="up" class="content mt-1" id="chiffre2" style="height:100%;font-size:18px;padding:0;padding-right:5px;border:2px solid lightblue;">Compensation de :\n' +
                    '                            <ul style="list-style-type:disc">\n' +
                    '                                <li>480000 opérations sur chèques, pour un cout de ****** DA</li>\n' +
                    '                                <li>75000 opérations de virement, pour un cout de *********** DA</li>\n' +
                    '                                <li>1200 opération sur effet de commerce et traie de douanes, pour un cout de ********** DA </li>\n' +
                    '                            </ul>\n' +
                    '                        </marquee>\n');
                //
                // $('#chiffre2').show();
            },8000);


        })</script>
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

