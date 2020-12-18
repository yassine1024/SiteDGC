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
        <h2 style="text-align: center">{{trans('site.Annuaire des services de la DGC')}}</h2>
        <br>
        <br>


        <div class="row">
            <br>

            <div class="col-md-8 border" style=" float: none; margin: 0 auto;background-color: #DCF3EC">
                <br>
                <div class="border" style="background-color: #D1EFE6; float: none; margin: 0 auto;">

                    <div class="ui-widget input-group p-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text ml-4" id="basic-addon1">🔎</span>
                        </div>
                        <input id="tags" type="text" class="form-control mr-4"
                               placeholder="{{trans('site.Recherche rapide')}}"
                               aria-label="Recherche"
                               aria-describedby="basic-addon1">

                    </div>
                    <div class="panel-group divHideShow ">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <ul class="panel-title hvh">
                                    <a class="txt" data-toggle="collapse" href="#collapse1">Collapsible list group</a>
                                </ul>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <ul class="list-group">
                                    <li class="list-group-item">21</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <table hidden class="table border">
                    <thead>
                    <th>{{trans('site.NAME')}}</th>
                    <th>{{trans('site.ADRESSE')}}</th>
                    <th>{{trans('site.TEL')}}</th>
                    <th>{{trans('site.FAX')}}</th>
                    <th>{{trans('site.MAil')}}</th>
                    </thead>
                    <tbody id="bodytableDR">
                    @foreach($directions as $direction)

                        <tr>

                            <td>{{$direction->direction_titre." DRT"}}</td>
                            <td>{{$direction->direction_adresse}}</td>
                            <td>{{$direction->direction_tel}}</td>
                            <td>{{$direction->direction_fax}}</td>
                            <td>{{$direction->direction_mail}}</td>

                        </tr>

                    @endforeach
                    </tbody>

                </table>
                {{--TWS--}}
                <table hidden class="table border">
                    <thead>
                    <th>{{trans('site.NAME')}}</th>
                    <th>{{trans('site.ADRESSE')}}</th>
                    <th>{{trans('site.TEL')}}</th>
                    <th>{{trans('site.FAX')}}</th>
                    <th>{{trans('site.MAil')}}</th>
                    </thead>
                    <tbody id="bodytableTW">
                    @foreach($tws as $tw)
                        <div id="{{$tw->organisation_mere_titre}}">
                            <tr>
                                <td>{{$tw->organisation_mere_titre." TW"}}</td>
                                <td>{{$tw->organisation_mere_adresse}}</td>
                                <td>{{$tw->organisation_mere_tel}}</td>
                                <td>{{$tw->organisation_mere_fax}}</td>
                                <td>{{$tw->organisation_mere_mail}}</td>

                            </tr>
                        </div>
                    @endforeach
                    </tbody>

                </table>
                {{--    TOWNS--}}
                <table hidden class="table border">
                    <thead>
                    <th>{{trans('site.NAME')}}</th>
                    <th>{{trans('site.ADRESSE')}}</th>
                    <th>{{trans('site.TEL')}}</th>
                    <th>{{trans('site.FAX')}}</th>
                    <th>{{trans('site.MAil')}}</th>

                    </thead>
                    <tbody id="bodytableCM">
                    @foreach($towns as $town)
                        <div id="{{$town->organisation_titre}}">
                            <tr>
                                <td>{{$town->organisation_titre." TC"}}</td>
                                <td>{{$town->organisation_adresse}}</td>
                                <td>{{$town->organisation_tel}}</td>
                                <td>{{$town->organisation_fax}}</td>
                                <td>{{$town->organisation_mail}}</td>

                            </tr>
                        </div>
                    @endforeach
                    </tbody>

                </table>


                <br>

                <div class="p-5   border" style="background-color:#D1EFE6;float: none; margin: 0 auto;">
                    <form>
                        <div class="form-group gDRT">
                            <label for="exampleFormControlSelectDRT">
                                <h4>{{trans('site.Direction Régionale du trésor')}}</h4>
                            </label>
                            <select class="form-control" id="exampleFormControlSelectDRT">
                                <option>{{trans('site.Selectionnez une direction')}}</option>
                                @foreach($directions as $direction)
                                    <option value="{{$direction->id}}">{{$direction->direction_titre}}</option>
                                @endforeach
                            </select>
                            <br>
                            <div class="panel-group linkHideDRT">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <ul class="panel-title ulDRT">
                                            <a class="txtDRT" data-toggle="collapse" href="#collapseDRT">Collapsible
                                                list
                                                groupccc</a>
                                        </ul>
                                    </div>
                                    <div id="collapseDRT" class="panel-collapse collapse">
                                        <ul class="list-group">
                                            <li class="list-group-item">21</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group gTW">
                            <label for="exampleFormControlSelectTW"><h4>{{trans('site.Trésoreries de wilaya')}}</h4>

                            </label>
                            <select class="form-control" id="exampleFormControlSelectTW">
                                <option>{{trans('site.Selectionnez une Trésorerie')}}</option>

                            </select>
                            <br>
                            <div class="panel-group linkHideTW">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <ul class="panel-title ulTW">
                                            <a class="txtTW" data-toggle="collapse" href="#collapseTW">Collapsible list
                                                group</a>
                                        </ul>
                                    </div>
                                    <div id="collapseTW" class="panel-collapse collapse">
                                        <ul class="list-group">
                                            <li class="list-group-item">21</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group gTC">
                            <label for="exampleFormControlSelectTC"><h4>{{trans('site.Trésoreries Communale')}}</h4>

                            </label>
                            <select class="form-control" id="exampleFormControlSelectTC">
                                <option>{{trans('site.Veuillez selectionner une Trésoreries Communale')}}</option>

                            </select>
                            <br>
                            <div class="panel-group linkHideTC">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <ul class="panel-title ulTC">
                                            <a class="txtTC" data-toggle="collapse" href="#collapseTC">Collapsible list
                                                group</a>
                                        </ul>
                                    </div>
                                    <div id="collapseTC" class="panel-collapse collapse">
                                        <ul class="list-group">
                                            <li class="list-group-item">21</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                <br>

            </div>

        </div>
        <br>
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
        5555
        $('.faroussa').click(function () {
            console.log("fares");
        });


        $('.divHideShow').hide();
        $('.gTW').hide();
        $('.gTC').hide();
        $('.linkHideDRT').hide();
        $('.linkHideTW').hide();
        $('.linkHideTC').hide();
        // ***********************************************the begin  the search  of DRT *****************************************************************
        $('.gDRT').change(function () {
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
                    $("#collapseDRT ul li").remove();
                    $('.ulDRT').append('<a class="txtDRT" data-toggle="collapse" href="#collapseDRT"><h5><i class="fa fa-caret-down"></i> ' + data.findDRT.direction_titre + '</h5></a>');
                    $("#collapseDRT ul").append('<li class="list-group-item" id="adresse" ><h5><i class="fa fa-location-arrow"></i> {{trans("site.Adresse:")}}</h5>' + data.findDRT.direction_adresse + '</li>' +
                        '<li class="list-group-item " ><h5><i class="fa fa-phone"></i> {{trans("site.Téléphone:")}}</h5>' + data.findDRT.direction_tel + '</li>' +
                        '<li class="list-group-item"  ><h5><i class="fa fa-fax"></i> {{trans("site.Fax:")}}</h5>' + data.findDRT.direction_fax + '</li>' +
                        '<li class="list-group-item" ><h5><i class="fa fa-at"></i> {{trans("site.Email:")}}</h5>' + data.findDRT.direction_mail + '</li>');
                    $('.linkHideDRT').show();
                    $('#exampleFormControlSelectTW').append('<option>{{trans("site.Selectionnez une Trésorerie")}}</option>');

                    for (var i = 0; i < data.success.length; i++) {
                        $('#exampleFormControlSelectTW').append('<option value="' + data.success[i].id + '">' + data.success[i].organisation_mere_titre + '</option>');

                    }
                    $('.gTW').show();
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
                    $("#collapseTW ul li").remove();
                    444444
                    $('.ulTW').append('<a class="txtTW faroussa" data-toggle="collapse" href="#collapseTW"><h5><i class="fa fa-caret-down"></i> ' + data.findTW.organisation_mere_titre + '</h5></a>');
                    $("#collapseTW ul").append('<li class="list-group-item" id="adresse" ><h5><i class="fa fa-location-arrow"></i>{{trans("site.Adresse:")}} </h5>' + data.findTW.organisation_mere_adresse + '</li>' +
                        '<li class="list-group-item " ><h5><i class="fa fa-phone"></i> {{trans("site.Téléphone:")}}</h5>' + data.findTW.organisation_mere_tel + '</li>' +
                        '<li class="list-group-item"  ><h5><i class="fa fa-fax"></i> {{trans("site.Fax:")}}</h5>' + data.findTW.organisation_mere_fax + '</li>' +
                        '<li class="list-group-item" ><h5><i class="fa fa-at"></i>{{trans("site.Email:")}} </h5>' + data.findTW.organisation_mere_mail + '</li>');
                    $('.linkHideTW').show();

                    $('#exampleFormControlSelectTC').append('<option>{{trans("site.Veuillez selectionner une Trésoreries Communale")}}</option>');
                    for (var i = 0; i < data.success.length; i++) {
                        $('#exampleFormControlSelectTC').append('<option value="' + data.success[i].id + '">' + data.success[i].organisation_titre + '</option>');

                    }
                    $('.gTC').show();

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
                    $('.ulTC').append('<a class="txtTC" data-toggle="collapse" href="#collapseTC"><h5><i class="fa fa-caret-down"></i> ' + data.success.organisation_titre + '</h5></a>');
                    $("#collapseTC ul").append('<li class="list-group-item" id="adresse" ><h5><i class="fa fa-location-arrow"></i> {{trans("site.Adresse:")}}</h5>' + data.success.organisation_adresse + '</li>' +
                        '<li class="list-group-item " ><h5><i class="fa fa-phone"></i> {{trans("site.Téléphone:")}}</h5>' + data.success.organisation_tel + '</li>' +
                        '<li class="list-group-item"  ><h5><i class="fa fa-fax"></i>{{trans("site.Fax:")}} </h5>' + data.success.organisation_fax + '</li>' +
                        '<li class="list-group-item" ><h5><i class="fa fa-at"></i>{{trans("site.Email:")}} </h5>' + data.success.organisation_mail + '</li>');
                    $('.linkHideTC').show();


                }

            });
            //alert(tst);
        });

        //     ***********************************************************the end the search of TC *******************************************************************

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
                $("#collapse1 ul").append('<li class="list-group-item" id="adresse" ><h5><i class="fa fa-location-arrow"></i>{{trans("site.Adresse:")}} </h5>' + res[2] + '</li>' +
                    '<li class="list-group-item" id="tel" ><h5><i class="fa fa-phone"></i>{{trans("site.Téléphone:")}} </h5>' + res[3] + '</li>' +
                    '<li class="list-group-item" id="fax" ><h5><i class="fa fa-fax"></i> {{trans("site.Fax:")}}</h5>' + res[4] + '</li>' +
                    '<li class="list-group-item" id="email" ><h5><i class="fa fa-at"></i> {{trans("site.Email:")}}</h5>' + res[5] + '</li>');

                // document.getElementById("fax").innerHTML += index + ":" + item + "<br>";
            }


            // $("#collapse1 ul").append('<li class="list-group-item" id="fax" >'+result+'</li>');
        });


    });
</script>
