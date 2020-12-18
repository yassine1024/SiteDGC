<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="{{asset('assets/images/icon.png')}}" type="image/ico">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Direction Générale de la comptabilite</title>

    <style>
        .hvr:hover {
            opacity: 0.8;
            cursor: pointer;
        }

    </style>
</head>
<style>
    html {
        direction: {{(\App::getLocale()=="ar") ? "rtl" : "ltr" }};
    }

    body {
        font-family: "Times New Roman", Times, serif;
        background-color: #D2FDFF;
    }

    .navbar {
        /*background-color: #40b7ac;*/
        background-color: #00A5CF;

    }

    .txtclr {
        color: white;
    }

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
        };
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


<div style="position: relative;">
    <!-- Navigation -->

    <img id="imgtop" src="{{asset('assets/images/Imageheader.png')}}" width="100%" height="90px">
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div  class="bg-primary border-right" id="sidebar-wrapper" style="color:white">
            <div class="sidebar-heading text-center "> Menu </div>
            <div class="list-group list-group-flush" >
                <a href="{{route('admineAccueil')}}" class="list-group-item list-group-item-action bg-primary txtclr">Accueil</a>
                @if(\Illuminate\Support\Facades\Auth::User()->user_type!=2 && \Illuminate\Support\Facades\Auth::User()->user_type!=3)
                <a href="{{route('adminecontributions')}}" class="list-group-item list-group-item-action bg-primary txtclr">Contributions</a>
                @endif
                @if(\Illuminate\Support\Facades\Auth::User()->user_type!=1 && \Illuminate\Support\Facades\Auth::User()->user_type!=4)
                <a href="{{route('admindoleance')}}" class="list-group-item list-group-item-action bg-primary txtclr">Registre de doléance</a>
                @endif
                <a href="#" class="list-group-item list-group-item-action bg-primary txtclr">Titre 2</a>
                <a href="#" class="list-group-item list-group-item-action bg-primary txtclr">Titre 3</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div style="width: 100%" id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom">
                <button class="btn btn-success" id="menu-toggle">Menu</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

{{--                        <li class="nav-item active">--}}
{{--                            <a class="nav-link txtclr" href="#">Home <span class="sr-only">(current)</span></a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
{{--                                                    <a class="nav-link txtclr" href="{{route('admineAccueil')}}">َAccueil</a>--}}
                                                </li>
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle txtclr" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                Dropdown--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="#">Action</a>--}}
{{--                                <a class="dropdown-item" href="#">Another action</a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                    </ul>
                    <a class="btn btn-outline-danger h-25 mt-1" href="{{ route('logout') }}"><i
                                class="fa fa-sign-in"></i>
                        {{ trans('site.Déconnecter') }}
                    </a>
                </div>
            </nav>

            <div class="container-fluid">
                @yield('content')

            </div>
        </div>
        <!-- /#page-content-wrapper -->




    </div>
    <!-- /#wrapper -->

    <!-- /.container -->

</div>

<!-- Footer -->
{{--    <div class="container">--}}
{{--        <p class="m-0 text-center text-white">Copyright &copy; جميع الحقوق محفوظة المديرية العامة للمحاسبة  </p>--}}
{{--    </div>--}}
<!-- /.container -->

<div class="pt-2 pb-2 footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12 location">
                <h4 class="mt-lg-0 mt-sm-4"><i class="fa fa-location-arrow"></i> {{ trans('site.Localisation') }}</h4>
                <p><i class="fa fa-car"></i> {{ trans('site.Immeuble Ahmed FRANCIS 16306 BEN AKNOUN - ALGER') }}</p>
                <p class="mb-0"><i class="fa fa-phone"></i> {{ trans('site.Téléphone') }} : +213 (0)21 59 51 51 / (0)21
                    59 52 52 / (0)21 59
                    53 53</p>
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


<script>
    $(document).ready(function () {

    });

</script>
</html>
