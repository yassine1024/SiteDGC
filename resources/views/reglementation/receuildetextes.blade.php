@extends('header.template')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
    th {
        text-align: center;margin: auto;
    }
</style>
@section('content')
    <section id="tabs">
        <br>
        <br>
        <h1 class="text-center">Receuil de textes</h1>
        <br>
        <br>
        <div class="container" style="background-color: white">
            <br>

            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <h4><i class="fa fa-caret-down"></i> Recueil de lois et réglements</h4>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <p>Textes relatifs à la comptabilité publique : lois , ordonnances, décrets,arrêtes, instructions, circulaires</p>
                            <table class="table table-bordered ">
                                <thead>
                                <tr class="table-info">
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Objet</th>
                                    <th scope="col">Consulter la version</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>receuil de lois relatifs à la comptabilité</td>
                                    <td>receuil de lois relatifs à la comptabilité</td>
                                   <td> <a href="{{asset('assets/download/reglementation/reglementation_fr_76.pdf')}}" > Française  </a> </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4><i class="fa fa-caret-down"></i> 2015</h4>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                <tr class="table-info">
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Objet</th>
                                    <th scope="col">Consulter la version</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Recueil des circulaires et instructions pour l'année 2015</td>
                                    <td>Recueil des circulaires et instructions pour l'année 2015</td>
                                   <td> <a href="{{asset('assets/download/reglementation/Recueil_DGC_fr_2015.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/Recueil_DGC_AR_2015.pdf')}}" > Arabe  </a> </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h4><i class="fa fa-caret-down"></i> 2014</h4>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                <tr class="table-info">
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Objet</th>
                                    <th scope="col">Consulter la version</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Recueil des circulaires et instructions pour l'année 2014</td>
                                    <td>Recueil des circulaires et instructions pour l'année 2014</td>
                                   <td> <a href="{{asset('assets/download/reglementation/Recueil_DGC_fr_2014.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/Recueil_DGC_AR_2014.pdf')}}" > Arabe  </a> </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h4><i class="fa fa-caret-down"></i> 2013</h4>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                <tr class="table-info">
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Objet</th>
                                    <th scope="col">Consulter la version</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Recueil des circulaires et instructions pour l'année 2013</td>
                                    <td>Recueil des circulaires et instructions pour l'année 2013</td>
                                   <td> <a href="{{asset('assets/download/reglementation/Recueil_DGC_fr_AR_2013.pdf')}}" > Française  </a> </td>
                                </tr>

                                </tbody>
                            </table>
                             </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <h4><i class="fa fa-caret-down"></i> 2012</h4>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                <tr class="table-info">
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Objet</th>
                                    <th scope="col">Consulter la version</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Recueil des circulaires et instructions pour l'année 2012</td>
                                    <td>Recueil des circulaires et instructions pour l'année 2012</td>
                                   <td> <a href="{{asset('assets/download/reglementation/Recueil_DGC_fr_AR_2012.pdf')}}" > Française  </a> </td>
                                </tr>

                                </tbody>
                            </table>
                            </div>
                    </div>
                </div> <div class="card">
                    <div class="card-header" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSixe" aria-expanded="false" aria-controls="collapseSixe">
                                <h4><i class="fa fa-caret-down"></i> 2011</h4>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSixe" class="collapse" aria-labelledby="headingSixe" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                <tr class="table-info">
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Objet</th>
                                    <th scope="col">Consulter la version</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Recueil des circulaires et instructions pour l'année 2011</td>
                                    <td>Recueil des circulaires et instructions pour l'année 2011</td>
                                   <td> <a href="{{asset('assets/download/reglementation/Recueil_DGC_FR_2011.pdf')}}" > Française  </a>|<a href="{{asset('assets/download/reglementation/Recueil_DGC_AR_2011.pdf')}}" > Arabe  </a> </td>
                                </tr>

                                </tbody>
                            </table>
                              </div>
                    </div>
                </div> <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <h4><i class="fa fa-caret-down"></i> 2005</h4>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                <tr class="table-info">
                                    <th scope="col">Numéro</th>
                                    <th scope="col">Objet</th>
                                    <th scope="col">Consulter la version</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Recueil des circulaires et instructions pour l'année 2005</td>
                                    <td>Recueil des circulaires et instructions pour l'année 2005</td>
                                   <td> <a href="{{asset('assets/download/reglementation/Recueil_DGC_FR_2005.pdf')}}" > Française  </a> </td>
                                </tr>

                                </tbody>
                            </table>     </div>
                    </div>
                </div>
            </div>

            <br>
        </div>

    </section>
    <br>

@endsection
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
