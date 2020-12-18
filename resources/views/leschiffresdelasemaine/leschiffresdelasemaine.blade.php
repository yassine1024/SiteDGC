@extends('header.template')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    th {
        text-align: center;
        margin: auto;
    }
</style>
@section('content')

    <section class="div1" id="tabs">
        <br>
        <br>
        <h1 class="text-center">les chiffres de la semaine</h1>
        <br>
        <br>
        <style>
            @keyframes fadeIn {
                   from {
                       opacity: 0;
                   }
                   to {
                       opacity: 1;
                   }
               }

            .fadeInAnimated {
                opacity: 1;
                animation-name: fadeIn;
                animation-duration: 2s;
            }

            #second {
                animation-delay: 2s;
            }

            #third {
                animation-delay: 4s;
            }
        </style>
        <div class="container" style="background-color: white">
            <br>
            <ul class="div3" data-aos="fade-up" style="list-style-type:none;">
                <li data-aos="fade-up"><span>&#10146; Les chéquiers Verts : chéquiers destinés aux particuliers, EPIC et Notaires (comptes d’étude)</span>
                </li>
                <li data-aos="fade-up"><span>&#10146; Les chéquiers jaunes : ce sont des chéquiers de consignation, destinés aux greffiers, notaires et huissiers</span>
                </li>
                <li data-aos="fade-up"><span>&#10146; Les chéquiers bleus : destinés aux EPA, Régies d’avance et Caisses (CNAS)</span></li>
                </li>
            </ul>
            <h2 data-aos="fade-up" style="margin-left: 1%">Les chiffres de la semaine :</h2>
            <br>
            <ul data-aos="fade-up">
                <p>Du 15 au 20 Novembre 2020</p>
                <ul data-aos="fade-up" style="list-style-type:none;">
                    <li data-aos="fade-up"><span>&#10146; Impression de :</span>
                        <ul data-aos="fade-up" style="list-style-type:square">
                            <li data-aos="fade-up">1500 chéquiers verts, pour 240.000,00 DA</li>
                            <li data-aos="fade-up">3600 chéquiers jaunes, pour 576.000,00 DA</li>
                            <li data-aos="fade-up">2300 chéquiers roses, pour 368.000,00 DA</li>
                        </ul>
                    </li>
                    <br>
                    <li data-aos="fade-up"><span>&#10146; Compensation de :</span>
                        <ul data-aos="fade-up" style="list-style-type:square">
                            <li data-aos="fade-up">480000 opérations su chèques, pour un cout de ****** DA</li>
                            <li data-aos="fade-up">75000 opérations de virement, pour un cout de *********** DA</li>
                            <li data-aos="fade-up">1200 opération sur effet de commerce et traie de douanes, pour un cout de **********
                                DA
                            </li>

                        </ul>
                    </li>
                </ul>
            </ul>
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
