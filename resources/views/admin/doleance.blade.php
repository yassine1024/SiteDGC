@extends('header.templateAdmin')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link href="{{asset('assets/css/simple-sidebar.css')}}" rel="stylesheet">

@section('content')
    <style>
        th {
            background-color: #9dbfff;
        }

        th, td {
            text-align: center;
        }
    </style>



    <div class="container-fluid" style="position: relative">
        <br>
        <h1 class="text-center">Registre de doleance</h1>
        <br>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if(\Illuminate\Support\Facades\Auth::User()->user_type==2)
            <input type="button" value="envoyer" id="envoyerButton">
        @else
            <input type="button" value="envoyer" id="envoyerButton2">
        @endif
        <form id="myForm" action="{{route('teste2')}}" method="POST">
            <table id="myTable" class="display table-bordered bg-white">
                <thead>
                <tr>
                    <th>Le nom</th>
                    <th>Email</th>
                    <th>Secteur d'Activite</th>
                    <th>Object</th>
                    <th>Poste Comptable</th>
                    <th>Message</th>
                    <th>Tag</th>
                    <th>Remarque</th>
                    <th>Observation</th>
                </tr>
                </thead>
                <tbody>

                @foreach($grivences as $grivence)

                    <tr id="{{$grivence->id}}">
                        <td>{{$grivence->nom}}</td>
                        <td>{{$grivence->mail}}</td>
                        <td>{{$grivence->sector}}</td>
                        <td>{{$grivence->object}}</td>
                        @php
                            $direction=\App\Direction::find($grivence->direction_id);

                        @endphp
                        <td>{{$direction->direction_titre}}</td>

                        @csrf
                        <td style="width: 50%">{{$grivence->message}}</td>
                        <td class="tdTag" style="width: 25%">
                            @if(\Illuminate\Support\Facades\Auth::User()->user_type==2 && !$hashTableStatueGrivences[$grivence->id])

                                <select class="custom-select selectTag">

                                    {{--<option value="0">Tout</option>
                                    <option value="1">Younes</option>
                                    <option value="2">Yassine</option>
                                    <option value="3">Salim</option>
                                    <option value="4">Mohamed</option>
                                    <option value="5">Yasser</option>--}}
                                    {{--<option value="0">Tout</option>--}}
                                    @foreach($usersDoleances as $usersDoleance)
                                        <option value="{{$usersDoleance->id}}">{{$usersDoleance->name}}</option>
                                    @endforeach
                                </select>
                            @elseif($hashTableStatueGrivences[$grivence->id])
                                @foreach($usersDoleances as $usersDoleance)
                                    @if(array_key_exists($grivence->id.$usersDoleance->id,$hashTableTagUsers))
                                        <p>{{$hashTableTagUsers[$grivence->id.$usersDoleance->id]->name}}</p>
                                    @endif
                                @endforeach

                            @endif
                        </td>

                        <td style="width: 50%">
                            @if($hashTableStatueGrivences[$grivence->id])
                                @foreach($usersDoleances as $usersDoleance)
                                    @if(array_key_exists($grivence->id.$usersDoleance->id,$hashTableTagGrivences))
                                        <p>{{$hashTableTagGrivences[$grivence->id.$usersDoleance->id]->boss_comment}}</p>
                                    @endif
                                @endforeach

                            @else
                                <div class="rremarque"></div>
                                <span class="sspanR">Aucune remarque</span>
                            @endif

                        </td>
                        <td style="width: 50%">
                            @if($hashTableStatueGrivences[$grivence->id])
                                @foreach($usersDoleances as $usersDoleance)
                                    @if(array_key_exists($grivence->id.$usersDoleance->id,$hashTableTagGrivences))

                                        {{--if is the taged user && not make his observation --}}
                                        @if(\Illuminate\Support\Facades\Auth::User()->id==$hashTableTagGrivences[$grivence->id.$usersDoleance->id]->user_id && $hashTableTagGrivences[$grivence->id.$usersDoleance->id]->employee_comment=="Aucune Observation")

                                            <input name="{{$hashTableTagGrivences[$grivence->id.$usersDoleance->id]->id}}" type="text" placeholder="Please enter your observation...">
                                            {{--<button type="button" class="btn btn-primary">Primary</button>--}}

                                        @else
                                            <p>{{$hashTableTagGrivences[$grivence->id.$usersDoleance->id]->employee_comment}}</p>
                                        @endif
                                    @endif
                                @endforeach

                            @else
                                <div class="oobservation"></div>
                                <span class="sspanO">Aucune observation</span></td>

                        @endif
                    </tr>
                @endforeach

                </tbody>
            </table>
        </form>

    </div>

    <!-- /#wrapper -->
    <br>
    <!-- /.container -->
    <script>
        //variable globale
        var grivencesJS = [];

        // $('.selectTag').on('click',function () {
        //
        // });
        $(".selectTag").prop("selectedIndex", -1);
        $('.selectTag').change(function () {
            // alert($(this).children("option:selected").val());
            var nameTag = ($(this).children("option:selected").text());
            // if($(this).children("option:selected").val()!=0){}
            var idTag = ($(this).children("option:selected").val());
            //added by yassine
            var grivenceID = $(this).closest('tr').attr('id');
            var grivence = {grivence: grivenceID, user: idTag};
            grivencesJS.push(grivence);
            //end Added by yassine
//          var cnt = $(this).children("option").length - 1;
            //   alert($(this).closest('td').next('td').find('span').html());

            if ($(this).children("option:selected").val() == 0) {

                $(this).closest('td').next('td').find('.sspanR').remove();
                $(this).closest('td').next('td').next('td').find('.sspanO').remove();
                $(this).children("option:not(:first)").each(function () {
                    // Add $(this).val() to your list
                    $(this).closest('td').next('td').find('.rremarque').append('<input name="' + $(this).val() + '" type="text" class="form-control w-100" placeholder="' + $(this).text() + '"><br>');
                    $(this).closest('td').next('td').next('td').find('.oobservation').append('<input name="' + $(this).val() + '" type="text" class="form-control w-100" placeholder="' + $(this).text() + '" readonly><br>');
                });

                $(this).prop('disabled', 'disabled');
                $(this).closest('td').next('td').append('<button class="btn btn-primary btnEnvoie" >Envoie</button><br>');
                $(this).closest('td').next('td').next('td').append('<br><br>');
                // $(this).closest('td').next('td').append('');
            } else {
                $(this).children("option[value='0']").remove();
                $(this).children("option:selected").attr("disabled", "true");
                $(this).closest('td').next('td').find('.sspanR').remove();
                $(this).closest('td').next('td').next('td').find('.sspanO').remove();
                $(this).closest('td').next('td').find('.rremarque').append('<input name="rem' + grivenceID + idTag + '" type="text" class="form-control w-100" placeholder="' + nameTag + '"><br>');
                $(this).closest('td').next('td').next('td').find('.oobservation').append('<input name="' + idTag + '" type="text" class="form-control w-100" placeholder="' + nameTag + '" readonly><br>');
               /* if ($(this).closest('td').next('td').find('.btnEnvoie').length == 0) {
                    $(this).closest('td').next('td').append('<input hidden type="button"  class="btn btn-primary btnEnvoie bte1" value="button"></input><br>');
                    $(this).closest('td').next('td').next('td').append('<br><br>');
                }*/

            }

        });

        $(document).ready(function () {
            // case if the super user grivence make comment
            $("#envoyerButton").on('click', function () {

                var url = '{{ route("teste", ":slug") }}';

                var arrStr = encodeURIComponent(JSON.stringify(grivencesJS));
                url = url.replace(':slug', arrStr);
                $('#myForm').attr('action', url);
                $('#myForm').submit();
            });

            // case if the user grivence make his own observatin
            $("#envoyerButton2").on('click', function () {
                $('#myForm').submit();
            });

        });
        $(document).ready(function () {


            $('#myTable').DataTable(
                {
                    "language": {
                        "lengthMenu": "Affichage _MENU_ utilisteurs par page",
                        "zeroRecords": "Rien trouvé - désolée",
                        "info": "Présenter page _PAGE_ sur _PAGES_",
                        "infoEmpty": "Aucun utilisateur disponible",
                        "infoFiltered": "(Filtré de _MAX_ nombre total d'utilisateurs)",
                        "search": "Chercher:",
                        "paginate": {
                            "first": "Première",
                            "last": "Dernière",
                            "next": "Suivant",
                            "previous": "Précédent"
                        },
                    }
                }
            );

            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        });

    </script>

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

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

