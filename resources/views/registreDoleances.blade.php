@extends('header.template')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')

    <style>
        .ui-autocomplete {
            max-height: 500px;
            overflow-y: auto; /* prevent horizontal scrollbar */
            overflow-x: hidden; /* add padding to account for vertical scrollbar */
            z-index: 1000 !important;
        }
    </style>

    <div class="container">
        <br>
        <br>
        <h2 style="text-align: center">{{ trans('site.Vos Doléances') }}</h2>
        <br><br>
        <div class="row ">

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <br>
            <div class="col-12 pr-0">


                <!--Form with header-->

                <form action="{{route('postDoleance')}}" method="post" id="myForm">
                    @csrf

                    <div class="card">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> {{ trans('site.Votre Doléance') }}</h3>

                            </div>
                        </div>
                        <div class="card-body p-3">

                            <!--Body-->

                            <div class="row pl-3">
                                {{--                                <label for="exampleFormControlSelectDRT">--}}
                                {{--                                    <h4>Le nom :</h4>--}}
                                {{--                                </label>--}}
                                <div class="form-group col-xs-6 w-50 pr-3">
                                    <label for="nom">
                                        <h5>{{trans('site.Nom et Prénom ou Numéro de sécurité sociale')}} <span style="color: red">*</span>:</h5>
                                    </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nom" name="nom"
                                               placeholder="{{ trans('site.Nom et Prénom ou Numéro de sécurité sociale') }}" required>
                                    </div>
                                </div>
                                <div class="form-group col-xs-6 w-50 pl-3 pr-3">
                                    <label for="eemail">
                                        <h5>{{trans('site.Email')}}<span style="color: red"> ({{trans('site.Facultatif')}})</span>:
                                        </h5>
                                    </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="eemail" name="eemail"
                                               placeholder="exemple@gmail.com">
                                    </div>
                                </div>
                            </div>

                            {{--                            <div class="form-group">--}}
                            {{--                                <div class="input-group mb-2">--}}
                            {{--                                    <div class="input-group-prepend">--}}
                            {{--                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <input type="text" class="form-control" id="prenom" name="prenom"--}}
                            {{--                                           placeholder="{{ trans('site.Le prénom') }}" required>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            {{--<div class="row pl-3 ">--}}
                            {{--<div class="form-group col-xs-6 w-50 pr-3 ddTW">--}}
                            {{--<label for="wilaya">--}}
                            {{--<h5>Wilaya <span style="color: red">*</span>:</h5>--}}
                            {{--</label>--}}
                            {{--<div class="input-group mb-2">--}}
                            {{--<div class="input-group-prepend">--}}
                            {{--<div class="input-group-text"><i class="fa fa-user text-info"></i></div>--}}
                            {{--</div>--}}
                            {{--                                    <input type="text" class="form-control" id="commune" name="commune"--}}
                            {{--                                           placeholder="Commune" required>--}}

                            {{--<select class="form-control" id="wilaya" name="wilaya" required>--}}
                            {{--<option>{{ trans('site.Selectionnez une Trésorerie') }}</option>--}}
                            {{--@foreach($states as $state)--}}
                            {{--<option--}}
                            {{--value="{{$state->id}}">{{$state->state_titre}}</option>--}}

                            {{--@endforeach--}}

                            {{--</select>--}}
                            {{--<br>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group col-xs-6 w-50 pl-3 pr-3 dCommune">--}}
                            {{--<label for="commune">--}}
                            {{--<h5>Commune <span style="color: red">*</span>:</h5>--}}
                            {{--</label>--}}
                            {{--<div class="input-group mb-2">--}}

                            {{--<div class="input-group-prepend">--}}
                            {{--<div class="input-group-text"><i class="fa fa-user text-info"></i></div>--}}
                            {{--</div>--}}
                            {{--                                    <input type="text" class="form-control" id="commune" name="commune"--}}
                            {{--                                           placeholder="Commune" required>--}}

                            {{--<select class="form-control" id="commune" name="commune" required>--}}
                            {{--<option>{{ trans('site.Veuillez selectionner une Trésoreries Communale') }}</option>--}}

                            {{--</select>--}}
                            {{--<br>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="row pl-3">
                                <div class="form-group w-50 pr-3 ">
                                    <label for="secteur">
                                        <h5>{{trans("site.Secteur d'Activite")}} <span style="color: red">*</span>:</h5>
                                    </label>
                                    <div class="input-group mb-2 gSecteur">

                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        {{--                                    <input type="text" class="form-control" id="commune" name="commune"--}}
                                        {{--                                           placeholder="Commune" required>--}}

                                        <select class="form-control" id="secteur" name="secteur" required>
                                            <option value=""></option>
                                            <option value="1">Service Public</option>
                                            <option value="2">Fonction Libérale</option>
{{--                                            <option value="3">Activite 3</option>--}}
                                            <option value="autre">Autre</option>

                                        </select>
                                        <br>
                                    </div>
                                </div>
                                <div class="form-group col-xs-6 w-50 pl-3 pr-3">
                                    <label for="tel">
                                        <h5>{{trans('site.Téléphone')}}<span style="color: red"> ({{trans('site.Facultatif')}})</span>:
                                        </h5>
                                    </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="tel" name="tel">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-xs-6 w-50 pr-2 divAutre">
                                <label for="autre">
                                    <h5>Autre activite :</h5>
                                </label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="autre" name="autre"
                                           placeholder="Autre" required>
                                </div>
                            </div>

                            <div class="form-group col-xs-6 w-50 pr-2 pb-1">
                                <label for="objet">
                                    <h5>{{trans('site.Object de Votre Requete')}} <span style="color: red">*</span>:
                                    </h5>
                                </label>
                                <div class="input-group mb-2 gObjet">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>

                                    <select class="form-control" id="objet" name="objet" required>
                                        <option value=""></option>
                                        <option value="1">Réclamation</option>
                                        <option value="2">Suggestion</option>
                                        <option value="autre">Autre</option>

                                    </select>

                                </div>
                            </div>
                            <div class="form-group col-xs-6 w-50 pr-2 divAutreObjet">
                                <label for="autre">
                                    <h5>Autre Objet :</h5>
                                </label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="autreobjet" name="autreobjet"
                                           placeholder="Autre" required>
                                </div>
                            </div>


                            {{--                            <div class="form-group w-50 pr-2 pb-1">--}}
                            {{--                                <div class="input-group mb-2">--}}
                            {{--                                    <div class="input-group-prepend">--}}
                            {{--                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>--}}
                            {{--                                    </div>--}}
                            {{--                                    --}}{{--                                    <input type="text" class="form-control" id="commune" name="commune"--}}
                            {{--                                    --}}{{--                                           placeholder="Commune" required>--}}

                            {{--


                                                               <select class="form-control" id="poste" name="poste" required>--}}
                            {{--                                        <option>Poste Comptable concerne</option>--}}

                            {{--                                    </select>--}}
                            {{--                                  --}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="w-50 pr-2 pb-1">

                                {{--<div class="form-group gDRT">--}}
                                {{--<label for="exampleFormControlSelectDRT">--}}
                                {{--<h5>Poste Comptable Concerne <span style="color: red">*</span>:</h5>--}}
                                {{--</label>--}}
                                {{--<div class="input-group mb-2">--}}
                                {{--<div class="input-group-prepend">--}}
                                {{--<div class="input-group-text"><i class="fa fa-user text-info"></i></div>--}}
                                {{--</div>--}}
                                {{--<select class="form-control" id="exampleFormControlSelectDRT">--}}
                                {{--<option value="choix">{{ trans('site.Selectionnez une direction') }}</option>--}}
                                {{--@foreach($directions as $direction)--}}
                                {{--<option--}}
                                {{--value="{{$direction->id}}">{{$direction->direction_titre}}</option>--}}
                                {{--@endforeach--}}
                                {{--</select>--}}
                                {{--</div>--}}

                                {{--</div>--}}

                                <div class="form-group posteCC">
                                    <label for="choiceDTC">
                                        <h5>{{trans('site.Structure Concernée')}} <span style="color: red">*</span>:
                                        </h5>
                                    </label>
                                    <div class="input-group mb-2 gDTC">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <select class="form-control" id="choiceDTC" name="choiceDTC">
                                            <option
                                                value="choix">{{ trans('site.Selectionnez une direction') }}</option>
                                            <option value="1"> DRT</option>
                                            <option value="2"> TW</option>
                                            <option value="3"> TC</option>
                                            <option value="4"> Autre</option>

                                        </select>
                                    </div>

                                </div>
                                <div class="form-group  divAutreChoiceDTC">
                                    <label for="autre">
                                        <h5>Autre :</h5>
                                    </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="autreChoiceDTC" name="autre"
                                               placeholder="Autre" required>
                                    </div>
                                </div>

                                <div class="form-group drtNewer">
                                    <label for="exampleFormControlSelectDRT">
                                        <h5>{{ trans('site.Selectionnez une DRT') }}<span style="color: red">*</span>:
                                        </h5>
                                    </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <select class="form-control" id="exampleFormControlSelectDRT"
                                                name="exampleFormControlSelectDRT">
                                            <option value="choix">{{ trans('site.Selectionnez une DRT') }}</option>
                                            @foreach($directions as $direction)
                                                <option
                                                    value="{{$direction->id}}">{{$direction->direction_titre}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>


                                <div class="form-group gTW">
                                    <label for="exampleFormControlSelectTW">
                                        <h5>{{ trans('site.Trésoreries de wilaya') }} <span
                                                style="color: red">*</span>:</h5>

                                    </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <select class="form-control" id="exampleFormControlSelectTW"
                                                name="exampleFormControlSelectTW">
                                            <option>{{ trans('site.Selectionnez une Trésorerie') }}
                                            </option>

                                        </select>
                                    </div>

                                </div>
                                <div class="form-group gTC">
                                    <label for="exampleFormControlSelectTC">
                                        <h5>{{ trans('site.Trésoreries Communale') }} <span
                                                style="color: red">*</span>:</h5>

                                    </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <select class="form-control" id="exampleFormControlSelectTC"
                                                name="exampleFormControlSelectTC">
                                            <option>{{ trans('site.Veuillez selectionner une Trésoreries Communale') }}</option>

                                        </select>
                                    </div>

                                </div>

                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlSelectDRT">
                                    <h5>{{trans('site.Votre Message')}} <span style="color: red">*</span>:</h5>
                                </label>
                                <div class="input-group mb-2 pb-1">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                    </div>
                                    <textarea class="form-control"
                                              placeholder="{{ trans('site.Votre message') }} ..."
                                              rows="4" name="message" required></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" value="{{ trans('site.Envoyer') }}"
                                       class="btn btn-info btn-block rounded-0 py-2" onClick='formSubmit()'>
                            </div>

                        </div>

                    </div>
                </form>
                <!--Form with header-->


            </div>
        </div>

        {{--       annuaire         --}}

    </div>




@endsection


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


<script>
    function selectChange() {
        alert($(this).value);
    }


    $(document).ready(function () {

        $('.divAutre').hide();
        $('.divAutreObjet').hide();
        $('.divHideShow').hide();
        // $('.gTW').hide();

        $('.drtNewer').hide();
        //$('.gTC').hide();
        $('.linkHideDRT').hide();
        $('.linkHideTW').hide();
        $('.linkHideTC').hide();

        $('.drtNewer').hide();
        $('.gTW').hide();
        $('.gTC').hide();
        $('.divAutreChoiceDTC').hide();


        $('.gSecteur').change(function () {
            if ($("#secteur").val() == "autre") {

                $('.divAutre').show();


            } else {
                $('.divAutre').hide();
            }
        });
        $('.gObjet').change(function () {
            if ($("#objet").val() == "autre") {

                $('.divAutreObjet').show();


            } else {
                $('.divAutreObjet').hide();
            }
        });

        //add listener to   post comptable changes
        $('.posteCC').change(function () {
            $('.drtNewer').hide();
            $('.gTW').hide();
            $('.gTC').hide();
            $('.divAutreChoiceDTC').hide();
            //alert($('#choiceDTC').val());
            var choiceDTC = $('#choiceDTC').val();
            if (choiceDTC == 1) {
                $('.drtNewer').show();
                //$('.gTW').hide();
            } else if (choiceDTC == 2) {
                $('.drtNewer').show();
                $('.gTW').show();
            } else if (choiceDTC == 4) {
                $('.divAutreChoiceDTC').show();
            } else {
                $('.drtNewer').show();
                $('.gTW').show();
                $('.gTC').show();
            }
            //$('.drtNewer').show();

        });
        // ***********************************************the begin  the search  of DRT *****************************************************************
        $('.drtNewer').change(function () {
            // alert($(this).children("option:selected").val());
            // var tst= $('#exampleFormControlSelectDRT').find(":selected").value();
            var valueSelectDRT = $("select#exampleFormControlSelectDRT").val();

            $.ajax({

                type: 'GET',

                url: '/selectDRT',

                data: {idDRT: valueSelectDRT},
                dataType: 'json',

                success: function (data) {

                    $('.gTW option').remove();
                    $('.txtDRT').remove();

                    $('.linkHideDRT').show();
                    $('#exampleFormControlSelectTW').append('<option>Selectionnez une Trésorerie</option>');

                    for (var i = 0; i < data.success.length; i++) {
                        $('#exampleFormControlSelectTW').append('<option value="' + data.success[i].id + '">' + data.success[i].organisation_mere_titre + '</option>');

                    }
                    // $('.gTW').show();
                }

            });
            //alert(tst);
        });
        // ***************************************************************the end the search of DRT ****************************************************************


        // *****************************************************************the begin the search of TW ****************************************************************

        $('.gTW').change(function () {
            // alert($(this).children("option:selected").val());
            // var tst= $('#exampleFormControlSelectDRT').find(":selected").value();
            var valueSelectTW = $("select#exampleFormControlSelectTW").val();

            $.ajax({

                type: 'GET',

                url: '/selectTW',

                data: {idTW: valueSelectTW},
                dataType: 'json',

                success: function (data) {

                    $('.gTC option').remove();

                    $('.txtTW').remove();

                    $('.linkHideTW').show();

                    $('#exampleFormControlSelectTC').append('<option>Veuillez selectionner une Trésoreries Communale</option>');
                    for (var i = 0; i < data.success.length; i++) {
                        $('#exampleFormControlSelectTC').append('<option value="' + data.success[i].id + '">' + data.success[i].organisation_titre + '</option>');

                    }
                    // $('.gTC').show();

                }

            });
            //alert(tst);
        });

        //     ***********************************************************the end the search of TW *******************************************************************
        // *****************************************************************the begin the search of TC ****************************************************************

        $('.gTC').change(function () {
            // alert($(this).children("option:selected").val());
            // var tst= $('#exampleFormControlSelectDRT').find(":selected").value();
            var valueSelectTC = $("select#exampleFormControlSelectTC").val();

            $.ajax({

                type: 'GET',

                url: '/selectTC',

                data: {idTC: valueSelectTC},
                dataType: 'json',

                success: function (data) {

                    $('.txtTC').remove();
                    $("#collapseTC ul li").remove();


                    $('.linkHideTC').show();


                }

            });
            //alert(tst);
        });


        //     ***********************************************************the end the search of TC *******************************************************************
        //        ***********************************************************tw registre *******************************************************


        $('.ddTW').change(function () {
            // alert($(this).children("option:selected").val());
            // var tst= $('#exampleFormControlSelectDRT').find(":selected").value();
            var valuess = $("select#wilaya").val();
            alert("atik");
            $.ajax({

                type: 'GET',

                url: '/selectStreet',

                data: {idStreet: valuess},
                dataType: 'json',

                success: function (data) {


                    $('#commune option').remove();

                    for (var i = 0; i < data.success.length; i++) {
                        $('#commune').append('<option value="' + data.success[i].id + '">' + data.success[i].street_titre + '</option>');

                    }


                }

            });
            //alert(tst);
        });


        //        *********************************************************** end tw registre *******************************************************


        // $('.hvh').hide();
        // $('.collapse1').hide();
        // $('.collapse1 ul li').hide();
        var result = ["yacine", "younes"];
        var result1 = ["yacine", "younes"];
        $("#tags").on("keyup", function () {
            // $('.hvh').hide();
            // $('.collapse1').hide();
            // $('.collapse1 ul li').hide();
            $('.divHideShow').hide();

            result = [];
            result1 = [];
            var value = $(this).val().toLowerCase();
            $("tbody tr td:first-child").filter(function () {
                // alert($(this).text().toLowerCase().indexOf(value));
                // alert($(this).parent().text());
                if ($(this).text().toLowerCase().indexOf(value) > -1) {
                    result.push($(this).parent().html());
                    result1.push($(this).text());
                }
                $(this).parent().toggle($(this).text().toLowerCase().indexOf(value) > -1);
                //result="";

            });


            $('.txt').remove();
            $("#collapse1 ul li").remove();
            $("#tags").autocomplete({

                source: result1,
                maxHeight: 20,
                // select:showLabel,
                close: showLabel,
                //change:showLabel
            });

            function showLabel(event, ui) {
                if ($("#tags").val().length > 2) {
                    console.log($("#tags").val());
                    //  $('#tags').text(ui.item.label);

                    result = [];
                    result1 = [];
                    var value = $(this).val().toLowerCase();
                    // alert(value.substring(0, value.length-4));
                    //alert($(this).val().toLowerCase());
                    $("tbody tr td:first-child").filter(function () {
                        // alert($(this).text().toLowerCase().indexOf(value));
                        // alert($(this).parent().text());
                        if ($(this).text().toLowerCase().indexOf(value) > -1) {
                            result.push($(this).parent().html());
                            result1.push($(this).text());
                        }

                        $(this).parent().toggle($(this).text().toLowerCase().indexOf(value) > -1);
                        //result="";

                        //
                    });

                    $('.txt').remove();
                    $("#collapse1 ul li").remove();
                    console.log(result);


                    result.forEach(myFunction);
                    // $('.hvh').show();
                    // $('.collapse1').show();
                    // $('.collapse1 ul li').show();
                    $('.divHideShow').show();
                }
            }

            // $('.ui-menu-item').onclick(function () {
            //     alert("ef");
            // });

            result.forEach(myFunction);


            function myFunction(item, index) {

                var res = item.split("<td>");

                $('.hvh').append('<a class="txt" data-toggle="collapse" href="#collapse1"><h5><i class="fa fa-caret-down"></i> ' + res[1] + '</h5></a>');
                $("#collapse1 ul").append('<li class="list-group-item" id="adresse" ><h5><i class="fa fa-location-arrow"></i> Adresse :</h5>' + res[2] + '</li>' +
                    '<li class="list-group-item" id="tel" ><h5><i class="fa fa-phone"></i> Téléphone :</h5>' + res[3] + '</li>' +
                    '<li class="list-group-item" id="fax" ><h5><i class="fa fa-fax"></i> Fax :</h5>' + res[4] + '</li>' +
                    '<li class="list-group-item" id="email" ><h5><i class="fa fa-at"></i> Email :</h5>' + res[5] + '</li>');

                // document.getElementById("fax").innerHTML += index + ":" + item + "<br>";
            }


            // $("#collapse1 ul").append('<li class="list-group-item" id="fax" >'+result+'</li>');
        });


    });

    function formSubmit() {
        $('#myForm').submit();

    }
</script>
