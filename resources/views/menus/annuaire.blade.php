@extends('header.template')

@section('content')

    <br>
    <input id="myInput" class="form-control form-control-sm ml-3 w-50" type="text" placeholder="Recherche"
           aria-label="Recherche">

    <div class="ui-widget">
        <label for="tags">Tags: </label>
        <input id="tags">
    </div>
    <br>

    <table hidden class="table border">
        <thead>
        <th>NAME</th>
        <th>ADRESSE</th>
        <th>TEL</th>
        <th>FAX</th>
        <th>MAil</th>
        </thead>
        <tbody id="bodytableDR">
        @foreach($directions as $direction)
{{--            <input class="inpSearch" value="{{$direction->direction_titre}}">--}}
                <tr>

                    <td>{{$direction->direction_titre}}</td>
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
        <th>NAME</th>
        <th>ADRESSE</th>
        <th>TEL</th>
        <th>FAX</th>
        <th>MAil</th>
        </thead>
        <tbody id="bodytableTW">
        @foreach($tws as $tw)
            <div id="{{$tw->organisation_mere_titre}}">
                <tr>
                    <td>{{$tw->organisation_mere_titre}}</td>
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
        <th>NAME</th>
        <th>ADRESSE</th>
        <th>TEL</th>
        <th>FAX</th>
        <th>MAil</th>

        </thead>
        <tbody id="bodytableCM">
        @foreach($towns as $town)
            <div id="{{$town->organisation_titre}}">
                <tr>
                    <td>{{$town->organisation_titre}}</td>
                    <td>{{$town->organisation_adresse}}</td>
                    <td>{{$town->organisation_tel}}</td>
                    <td>{{$town->organisation_fax}}</td>
                    <td>{{$town->organisation_mail}}</td>

                </tr>
            </div>
        @endforeach
        </tbody>

    </table>
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title hvh">
                    <a class="txt" data-toggle="collapse" href="#collapse1">Collapsible list group</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item" id="fax" ></li>
                </ul>
            </div>
        </div>
    </div>


@endsection

<script>
    $( function() {
        var availableTags = [
            "ActionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme"
        ];
        $( "#tags" ).autocomplete({
            source: availableTags
        });
    } );
</script>

<script>
    $(document).ready(function () {



        var result=["yacine","younes"];
        var result1=["yacine","younes"];
        $("#myInput").on("keyup", function () {
            result=[];
            result1=[];
            var value = $(this).val().toLowerCase();
            $("tbody tr td:first-child").filter(function () {
                // alert($(this).text().toLowerCase().indexOf(value));
               // alert($(this).parent().text());
                if($(this).text().toLowerCase().indexOf(value) > -1){
                    result.push( $(this).parent().html());
                    result1.push( $(this).text());
                }
                $(this).parent().toggle($(this).text().toLowerCase().indexOf(value) > -1);
                //result="";



   //
        });

            $('.txt').remove();
            $("#collapse1 ul li").remove();
            result.forEach(myFunction);


            function myFunction(item, index) {

                var res = item.split("<td>");
                $('.hvh').append('<a class="txt" data-toggle="collapse" href="#collapse1">'+res[1]+'</a>');
                 $("#collapse1 ul").append('<li class="list-group-item" id="fax" >'+res[2]+'</li>');

                // document.getElementById("fax").innerHTML += index + ":" + item + "<br>";
            }



            // $("#collapse1 ul").append('<li class="list-group-item" id="fax" >'+result+'</li>');
        });


    });
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


