@extends('header.template')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@section('content')

    <section id="tabs">
        <br>
        <br>
        <h1 class="text-center">{{ trans('site.Infrastructures') }}</h1>
        <br>
        <br>

        <div class="container" style="background-color: white">
            <div class="row ">

                <div class="col-lg-12">
                    <br>
                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header">
                            <img src="{{asset('assets/images/projet/projet_mediatheque(44).jpg')}}" height="250" width="250" alt="Card image cap">
                        </div>
                        <div class="card-block px-2 w-50">
                            <table class="mt-5 card-text">
                                <tr>
                                    <td>Intitulé :</td>
                                    <td style="font-weight: bold">Ecole Nationale du Trésor</td>
                                </tr>
                                <tr>
                                    <td>Description :</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Localisation :</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Taux d’avancement :</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Délai de réception :</td>
                                    <td></td>
                                </tr>

                            </table>
                            <a href="{{route('ecolenationaledutrésor') }}" style="margin-left:92%">Détail</a>

                        </div>
                    </div>

                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{ asset('assets/images/projet/Tindouf.png') }}"
                                 height="250" width="250"   alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Trésorerie de Wilaya de Tindouf</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>

                        </table>
                    </div>

                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{ asset('assets/images/projet/Biskra.png') }}"
                                 height="250" width="250" alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Trésorerie de Wilaya de Biskra</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>



                        </table>


                    </div>

                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{asset('assets/images/projet/Tebessa.png') }}"
                                 height="250" width="250" alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Trésorerie de Wilaya de Tebessa</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>

                        </table>
                    </div>

                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{ asset('assets/images/projet/Souk_Ahras.png') }}"
                                 height="250" width="250"  alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Trésorerie de Wilaya de Souk Ahras</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>

                        </table>
                    </div>

                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{ asset('assets/images/projet/Oum_El_Bouaghi.png') }}"
                                 height="250" width="250"  alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Trésorerie de Wilaya d’Oum El Bouaghi</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>


                        </table>
                    </div>
                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{ asset('assets/images/projet/El_bayadh.png') }}"
                                 height="250" width="250"  alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Trésorerie de Wilaya d'El Bayadh</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>


                        </table>
                    </div>

                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{ asset('assets/images/projet/Mascara.png') }}"
                                 height="250" width="250"   alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Trésorerie de Wilaya de Mascara</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Maitre d’œuvre :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Cout de réalisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>

                        </table>
                    </div>

                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{ asset('assets/images/projet/El_oued.png') }}"
                                 height="250" width="250"   alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Trésorerie de Wilaya d’El Oued</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>


                        </table>
                    </div>
                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{ asset('assets/images/projet/Ouargla.png') }}"
                                 height="250" width="250"   alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Trésorerie de Wilaya de Ouargla</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>


                        </table>
                    </div>
                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{ asset('assets/images/projet/Batna.png') }}"
                                 height="250" width="250"   alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Trésorerie de Wilaya de Batna</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>

                        </table>
                    </div>

                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{ asset('assets/images/projet/projet_mediatheque(54).jpg') }}"
                                 height="250" width="250"   alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Trésorerie de Wilaya de Relizane</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>

                        </table>
                    </div>

                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{ asset('assets/images/projet/projet_mediatheque(59).jpg') }}"
                                 height="250" width="250"   alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Trésorerie de Wilaya de Setif</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>

                        </table>
                    </div>

                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{ asset('assets/images/projet/projet_mediatheque(56).jpg') }}"
                                 height="250" width="250"   alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Centre Régional de Biskra</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>


                        </table>
                    </div>

                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{ asset('assets/images/projet/projet_mediatheque(58).jpg') }}"
                                 height="250" width="250"   alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Pole Administratif de Boumerdes</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>


                        </table>
                    </div>

                    <div class="ml-2 card flex-row flex-wrap" data-aos="fade-up">
                        <div class="card-header border-0">
                            <img src="{{ asset('assets/images/projet/projet_mediatheque(21).jpg') }}"
                                 height="250" width="250"   alt="Card image cap">
                        </div>
                        <table class="mt-3 card-text">
                            <tr>
                                <td>Intitulé :</td>
                                <td style="font-weight: bold">Centre Régional d’Archives de Sétif</td>
                            </tr>
                            <tr>
                                <td>Description :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Localisation :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Taux d’avancement :</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Délai de réception :</td>
                                <td></td>
                            </tr>


                        </table>
                    </div>


                </div>
            </div>

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
