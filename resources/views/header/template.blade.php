<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="{{asset('assets/images/icon.png')}}" type="image/ico">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Direction Générale de la comptabilite</title>

    <!-- Bootstrap core CSS -->

{{--    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">--}}
<!-- Custom styles for this template -->
{{--    <link href="css/shop-homepage.css" rel="stylesheet">--}}
<!-- Page Content -->
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    {{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"--}}
    {{--          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
    <style>
        .hvr:hover {
            opacity: 0.8;
            cursor: pointer;
        }

        #btnlog:hover {
            color: #fad000;
        }

    </style>
</head>
<style>
    html {
		{{-- direction: {{(\App::getLocale()=="ar") ? "rtl" : "ltr" }}; --}}
    }

    {{--    body {--}}
{{--        font-family: "Times New Roman", Times, serif;--}}
{{--        /*background-color: #D2FDFF;*/--}}

{{--        /*background-size: cover;*/--}}
{{--        --}}

{{--    }--}}

{{--    body:before {--}}
{{--        content : "";--}}
{{--        display: block;--}}
{{--        position: absolute;--}}
{{--        top: 0;--}}
{{--        left: 0;--}}

{{--        background-image:url({{asset('assets/images/Minis2.jpg')}}),url({{asset('assets/images/Abs1.jpg')}});--}}
{{--background-repeat:no-repeat;--}}
{{--        background-position:--}}
{{--            top 500px left, /* this positions the first image */--}}
{{--            top left; /* this positions the second image */--}}
{{--        width: 100%;--}}
{{--        height: 100%;--}}
{{--        opacity : 0.2;--}}
{{--        z-index: -1;--}}

{{--    }--}}
body {
	
        font-family:"Times New Roman", Times, serif;
        display: block;
        position: relative;
        margin: 0 auto;
        z-index: 0;
    }

    body::after {
        background: url({{asset('assets/images/Minis2.jpg')}});
        content: "";
        opacity: 0.2;
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        z-index: -1;
    }

    .navbar {
        /*background-color: #40b7ac;*/
        background-color: #00A5CF;

    }

    /*.txtclr {
        color: white;
    }
*/
    .footer {
        background: #152F4F;
        /*background:#004E64;*/
        color: white;

    .links {

    ul {
        list-style-type: none;
    }

    li a {
        color: white;
        transition: color .2s;

    &
    :hover {
        text-decoration: none;
        color: #4180CB;
    }

    }
    }
    .about-company {

    i {
        font-size: 25px;
    }

    a {
        color: white;
        transition: color .2s;

    &
    :hover {
        color: #4180CB
    }

    }
    }
    .location {

    i {
        font-size: 18px;
    }

    }
    .copyright p {
        border-top: 1px solid rgba(255, 255, 255, .1);
    }

    }

    /*css menu nv*/

    /*
    =====
    EFFECT FADING OUT FOR SIBLINGS MENU OPTIONS
    =====
    */

    .navLink2 {
        color: #fff;
        font-weight: bold;
        font-size: 14px;
        text-align: center;
    }

    .navLink2:hover {
        /*color: #2438d9;*/
        color: #FFBF00;
    }

    /*
    =====
    MENU STYLES
    =====
    */

    /*navBar underLine*/
    .navItem2 {
        position: relative;
        overflow: hidden;

        will-change: color;
        transition: color .25s ease-out;
    }

    .navItem2::before,
    .navItem2::after {
        content: "";
        width: 0;

        height: 3px;
        /*background-color: #5375ff;*/
        background-color: #FFBF00;
        will-change: width;
        transition: width .1s ease-out;

        position: absolute;
        bottom: 0;
    }

    .navItem2::before {
        left: 50%;
        transform: translateX(-50%);
    }

    .navItem2::after {
        right: 50%;
        transform: translateX(50%);
    }

    .navItem2:hover::before,
    .navItem2:hover::after {
        width: 90%;
        transition-duration: .3s;
    }


</style>


<header style="position: relative">
    <!-- Navigation -->

    <img id="imgtop" src="{{asset('assets/images/Imageheader.png')}}" width="100%" height="90px">
    <div class="divnav" style="top: 0;">
        <nav class="navbar  navbar-expand-lg " style=" width:100%;height: 50px;position: relative;z-index: 4000;">
            <a class="navbar-brand" style="color:white;font-weight: bold" href="#">DGC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="navItem2 active">
                        <a class="nav-link navLink2" name="acceuil"
                           href="{{route('home')}}">{{  trans('site.Accueil') }}<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item navItem2">
                        <a class="nav-link navLink2"
                           href="{{route('whosdgcInfo')}}">{{ trans('site.Qu\'est-ce que la DGC')}}</a>
                    </li>
                    <li class="nav-item navItem2">
                        <a class="nav-link navLink2"
                           href="{{route('annuaire')}}">{{ trans('site.Annuaire des services de la DGC')}}</a>
                    </li>
                    <li class="nav-item navItem2">
                        <a class="nav-link navLink2"
                           href="{{route('modernisation')}}">{{ trans('site.Réformes / Modernisation')}}</a>
                    </li>
                    <li class="nav-item navItem2">
                        <a class="nav-link navLink2"
                           href="{{route('loiDeBudguter')}}">{{ trans('site.Loi de règlement budgétaire LRB')}}</a>
                    </li>
                    <li class="nav-item navItem2 ">
                        <a class="nav-link navLink2"
                           href="{{ route('tableauDeBord') }}">{{ trans('site.Tableau de bord /indicateur') }}</a>
                    </li>
                    <li class="nav-item navItem2">
                        <a class="nav-link navLink2"
                           href="{{route('registreDoleances')}}">{{ trans('site.Registre de doléances')}}</a>
                    </li>
                    {{--<li class="nav-item navItem2">
                        <a class="nav-link navLink2" href="#">{{ trans('site.Réglementation')}}</a>
                    </li>
                    <li class="nav-item navItem2">
                        <a class="nav-link navLink2" href="#">{{ trans('site.Informations utiles') }}</a>
                    </li>--}}


                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                           style="color:white;font-weight: bold" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            {{ trans('site.plus...') }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"
                               href="{{route('reglementation')}}">{{ trans('site.Réglementation')}}</a>
                            <a class="dropdown-item"
                               href="{{route('utiles')}}">{{ trans('site.Informations utiles') }}</a>
                            <a class="dropdown-item"
                               href="{{route('descriptionContribution')}}">{{ trans('site.Appel à contribution') }}</a>
                            <a class="dropdown-item"
                               href="{{route('periscope')}}">{{ trans('site.Périscope de la DGC') }}</a>
                        </div>
                    </li>


                    {{--                    <li class="nav-item  dropdown">--}}
                    {{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"--}}
                    {{--                           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--                            Infos Utiles--}}
                    {{--                        </a>--}}
                    {{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                    {{--                            <a class="dropdown-item" href="#">C'est qui la DGC</a>--}}
                    {{--                            <a class="dropdown-item" href="#">Ou s'adesser</a>--}}
                    {{--                            <a class="dropdown-item" href="#">Reglementation</a>--}}
                    {{--                            <a class="dropdown-item" href="#">Registre de doléances</a>--}}
                    {{--                        </div>--}}
                    {{--                    </li>--}}

					  <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown"
                           style="color:white;font-weight: bold" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            {{ trans('site.Langue') }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="locale/ar"> {{ trans('site.Arabe') }}</a>
                            <a class="dropdown-item" href="locale/fr"> {{ trans('site.Français') }}</a>
                        </div>
                    </li>
					
                </ul>
                <div class="navbar-nav navbar-right nvrght">

               
                    {{--the user is login--}}
                    @auth
                        <a class="btn btn-outline-danger h-25 " href="{{ route('logout') }}"><i
                                class="fa fa-sign-in"></i>
                            {{ trans('site.Déconnecter') }}
                        </a>
                    @endauth
                    {{--the user is not login--}}
                    @guest
                        <a class="btn btn-outline-success bg-white h-25 mt-1" id="btnlog" type="submit"
                           href="{{ route('login') }}"><i
                                class="fa fa-sign-in"></i>
                            {{ trans('site.s\'inscrire') }}
                        </a>
                    @endguest
                </div>
            </div>
        </nav>
    </div>

</header>

<body>

@yield('content')

</body>
<!-- Footer -->
{{--    <div class="container">--}}
{{--        <p class="m-0 text-center text-white">Copyright &copy; جميع الحقوق محفوظة المديرية العامة للمحاسبة  </p>--}}
{{--    </div>--}}
<!-- /.container -->

<div class="mt-2 pt-2 pb-2 footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12 location">
                <br>
                <br>
                <h4 class="text-center">Direction Générale de la Comptabilité / Trésor public</h4>

                <h4 class="mt-lg-0 mt-sm-4"><i class="fa fa-location-arrow"></i> {{ trans('site.Localisation') }}</h4>
                <p><i class="fa fa-car"></i> {{ trans('site.Immeuble Ahmed FRANCIS 16306 BEN AKNOUN - ALGER') }}</p>
                <p class="mb-0"><i class="fa fa-phone"></i> {{ trans('site.Téléphone') }} : +213 (0)21 59 51 51 / (0)21
                    59 52 52 / (0)21 59
                    53 53</p>
            </div>
            <div class="col-lg-6 ">
                <form action="mail.php" method="post">
                    <div class="card">
                        <div class="card-header p-0">
                            <div class="text-white text-center py-2" style="background-color: #152F4F">
                                <h3><i class="fa fa-envelope"></i> {{ trans('site.Contacter nous') }}</h3>
                            </div>
                        </div>
                        <div class="card-body p-3" style="background-color: #152F4F">
                            <!--Body-->
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="nom" name="nom"
                                           placeholder="{{ trans('site.Le nom') }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="email" class="form-control" id="nombre" name="email"
                                           placeholder="exemple@gmail.com" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                    </div>
                                    <textarea class="form-control" placeholder="{{ trans('site.Votre message') }} ..."
                                              rows="4" required></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="{{ trans('site.Envoyer') }}"
                                       class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div class="row mt-2">
            <div class="col copyright">
                <p class="m-0 text-center text-white">Copyright &copy; جميع الحقوق محفوظة المديرية العامة
                    للمحاسبة {{date('Y')}}  </p>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript -->
{{--<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
{{--<script src="{{asset('assets/js/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}

{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"--}}
{{--        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"--}}
{{--        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"--}}
{{--        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"--}}
{{--        crossorigin="anonymous"></script>--}}


<script>
    $(document).ready(function () {


        $('.collapse').on('shown.bs.collapse', function () {
            console.log("shown");
        }).on('hidden.bs.collapse\t', function () {
            console.log("hiden");
        });


        $(function () {
            $(window).scroll(function () {
                var aTop = $('#imgtop').height();
                if ($(this).scrollTop() >= aTop + 100) {
                    // alert('header just passed.');
                    //   $('.navbar').css('position','fixed');

                    $('.navbar').css({
                        'position': 'fixed',
                        'z-index': '5000',
                        'margin-top': '-50px',
                        'background-color': 'transparent',
                        'width': '100%',
                        'height': '50px',
                        // 'left': '0',
                        // 'margin-right': 'auto',
                    });
                    $('.divnav').css({
                        'position': 'fixed',
                        'width': '100%',
                        'margin-top': '0',
                        'height': '50px',
                        'z-index': '5000',
                        'border-left': '50px solid transparent',
                        'border-right': '50px solid transparent',
                        'border-top': '50px solid #00A5CF',
                    });
                    $('.nvrght').css({
                        'margin-right': '8%'
                    });
                    // $('#btnlog').css({
                    //     'margin-top': '500px'
                    // });

                    // instead of alert you can use to show your ad
                    // something like $('#footAd').slideup();
                } else {


                    $('.navbar').css({
                        'position': 'relative',
                        'z-index': '4000',
                        'margin-top': '',
                        'background-color': '#00A5CF',
                        'width': 'width:100%',
                        // 'left': '0',
                        // 'margin-right': 'auto',
                    });

                    $('.nvrght').css({
                        'margin-right': '0',
                    });

                    $('.divnav').css({
                        'position': '',
                        'width': '',
                        'margin-top': '',
                        'height': '',
                        'z-index': '',
                        'border-left': '',
                        'border-right': '',
                        'border-top': '',

                    });
                }
            });
        });


        // if ($(window).width() > 200) {
        //   $('.navbar').css('position','fixed');
        // }

    });

</script>
</html>
