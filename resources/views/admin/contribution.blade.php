@extends('header.templateAdmin')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link href="{{asset('assets/css/simple-sidebar.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/css/jquery.tagselect.css')}}">

@section('content')
    <style>
        th{
            background-color: #9dbfff;
        }
        th,td{
            text-align: center;
        }
        .motdepass {
            width: 100px;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-all;
        }

    </style>

    <div class="container-fluid">
        <br>
        <h1 class="text-center">Contributions</h1>
        <br>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table id="myTable" class="display table-bordered bg-white">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Thème de la publication</th>


                <th>piece joindre</th>
                <th>Mot de passe de décryptage</th>
                <th>Etat</th>
                <th>Tags</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contributions as $contribution)
                <tr>
                    <td>{{$contribution->last_name}}</td>
                    <td>{{$contribution->first_name}}</td>
                    <td>{{$contribution->publication_theme}}</td>
                    <td><a href="/contribution/{{$contribution->file_path}}"><i class='fa fa-paperclip ml-4'
                                                                                style='font-size:48px;color:red'></i></a>
                    </td>

                    <td class="motdepass">
                        <input type="text" class="key" value="{{\App\User::find($contribution->user_id)->key}}"/>
                        <button class="btn btn-primary copyFunction"><i class="fa fa-copy"></i></button>
                    </td>
                    <td>{{trans('site.'.$contribution->check)}}</td>
                    <td class="qtagselect p-2">
                        <select class="qtagselect__select" multiple>
                            <option value="1" class="ispurple" selected>jQuery</option>
                            <option value="2" class="isblue" selected>Script</option>
                            <option value="3" class="isblue" disabled="true">.Net</option>
                            <option value="4" class="isblue">CSS</option>
                            <option value="5" class="isblue">HTML</option>
                            <option value="6" class="isblue">JavaScript</option>
                            <option value="7" class="isblue">Ruby</option>
                            <option value="8" class="isblue">Python</option>
                            <option value="9" class="isblue">Golang</option>
                            <option value="10" class="isblue">Object C</option>
                            <option value="11" class="ispurple">Angular</option>
                            <option value="12" class="isblue">React</option>
                            <option value="13" class="isblue">Vue</option>
                            <option value="14" class="isblue">PHP</option>
                            <option value="15" class="isblue">C++</option>
                            <option value="16" class="isblue">C#</option>
                        </select>
                    </td>

                    <form action="{{ route('accepterContribution',$contribution->id) }}" method="POST" class="form123">

                        @csrf

                        {{--@method('PUT')--}}
                        <td class="p-2">
                            @if($contribution->check=="accepted")
                                <input type="button" class="btn btn-primary disabled" value="Accepter"
                                       />

                            @else
                                <button type="submit" class="btn btn-primary"
                                        onclick="accepteFunction()">Accepter
                                </button>

                            @endif
                            {{--<button type="button" class="btn btn-success">Accepter</button>--}}
                            <br>
                            <br>
                            @if($contribution->check=="refused")
                                    <a class="btn btn-danger disabled"
                                       style="width:100%"
                                       >
                                        Refuser</a>

                            @else

                                <a href="{{route('refuserContribution',$contribution->id)}}" class="btn btn-danger"
                                   style="width:100%"
                                   onclick="return confirm('{{trans("site.Êtes-vous sûr refuser?")}}')">
                                    Refuser</a>
                            @endif
                        </td>
                    </form>
                </tr>
            @endforeach


            </tbody>
        </table>

    </div>
    <!-- /#wrapper -->
    <br>
    <!-- /.container -->
    <script>



        function accepteFunction() {

            let foo = prompt('entrer la date de publication','AAAA-MM-JJ');
            var x = document.getElementsByClassName('form123')[0].getAttribute('action');
            //alert(x);
            var url =new URL(x);
            url.searchParams.append('showDate',foo);
           // alert(url);

            document.getElementsByClassName('form123')[0].setAttribute('action',url);



            return confirm('Confirmer ou refuser');
            //confirm("Press a button!");
        }


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

        $('.qtagselect__select').tagselect();

        $("#a").click(function () {
            //Do stuff when clicked
        });

        //copy the content

        $(".copyFunction").click(function () {
            // alert($(this).siblings('.key').val());
            var copyText = $(this).siblings('.key');
            copyText.select();
            //copyText.setSelectionRange(0, 99999);

            /* Copy the text inside the text field */
            document.execCommand("copy");

            /* Alert the copied text */
            // alert("Copié le texte: " + copyText.val());
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


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>

<script src="{{asset('assets/js/jquery.tagselect.js')}}"></script>


