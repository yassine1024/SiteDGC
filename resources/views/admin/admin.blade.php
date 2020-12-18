@extends('header.templateAdmin')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link href="{{asset('assets/css/simple-sidebar.css')}}" rel="stylesheet">

@section('content')

    <div class="container-fluid">
        <br>
        <br>
        <br>
        <br>
        <br>

        <h1 class="text-center">Hello Admin</h1>
        <br>

{{--        <table id="myTable" class="display table-bordered bg-white">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>Le nom</th>--}}
{{--                <th>Email</th>--}}
{{--                <th>Diplome</th>--}}
{{--                <th>Fonction</th>--}}
{{--                <th>Theme</th>--}}
{{--                <th>Objet</th>--}}
{{--                <th>piece joindre</th>--}}
{{--                <th>Mot de passe</th>--}}
{{--                <th>Choix</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <td>Younes</td>--}}
{{--                <td>rahazyounes@gmail.com</td>--}}
{{--                <td>inginieur d'etat en informatique</td>--}}
{{--                <td>inginieur d'etat en informatique</td>--}}
{{--                <td>Theme 1</td>--}}
{{--                <td>inginieur d'etat en informatiquinginieur d'etat en informatiqueinginieur d'etat en informatiqueinginieur d'etat en informatiqueinginieur d'etat en informatiqueinginieur d'etat en informatique</td>--}}
{{--                <td> <img id="" src="{{asset('assets/images/piecejoindre.png')}}" width="50%" height="10%"></td>--}}
{{--                <td>rffksldfkdlmfksde</td>--}}
{{--                <td><select>--}}
{{--                        <option>selection</option>--}}
{{--                        <option>accepter</option>--}}
{{--                        <option>refuser</option>--}}
{{--                    </select></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Yassine</td>--}}
{{--                <td>yassine@gmail.com</td>--}}
{{--                <td>inginieur d'etat en informatique</td>--}}
{{--                <td>inginieur d'etat en informatique</td>--}}
{{--                <td>Theme 2</td>--}}
{{--                <td>inginieur d'etat en informatiquinginieur d'etat en informatique inginieur d'etat en informatiquinginieur d'etat en informatique inginieur d'etat en informatiquinginieur d'etat en informatique inginieur d'etat en informatiqueinginieur d'etat en informatiqueinginieur d'etat en informatiqueinginieur d'etat en informatique</td>--}}
{{--                <td><img id="" src="{{asset('assets/images/piecejoindre.png')}}" width="50%" height="10%"></td>--}}
{{--                <td>rffksldfkdlmfksde</td>--}}
{{--                <td><select>--}}
{{--                        <option>selection</option>--}}
{{--                        <option>accepter</option>--}}
{{--                        <option>refuser</option>--}}
{{--                    </select></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Salim</td>--}}
{{--                <td>Salim@gmail.com</td>--}}
{{--                <td>inginieur d'etat en informatique</td>--}}
{{--                <td>inginieur d'etat en informatique</td>--}}
{{--                <td>Theme 3</td>--}}
{{--                <td>inginieur d'etat en informatiquinginieur d'etat en informatiqueinginieur d'etat en informatiqueinginieur d'etat en informatiqueinginieur d'etat en informatiqueinginieur d'etat en informatique</td>--}}
{{--                <td><img  src="{{asset('assets/images/piecejoindre.png')}}" width="50%" height="10%"></td>--}}
{{--                <td>rffksldfkdlmfksde</td>--}}
{{--                <td><select>--}}
{{--                        <option>selection</option>--}}
{{--                        <option>accepter</option>--}}
{{--                        <option>refuser</option>--}}
{{--                    </select></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Yasser</td>--}}
{{--                <td>yasser@gmail.com</td>--}}
{{--                <td>inginieur d'etat en informatique</td>--}}
{{--                <td>inginieur d'etat en informatique</td>--}}
{{--                <td>Theme 4</td>--}}
{{--                <td>inginieur d'etat en informatiquinginieur d'etat en informatiqueinginieur d'etat en informatiqueinginieur d'etat en informatiqueinginieur d'etat en informatiqueinginieur d'etat en informatique</td>--}}
{{--                <td></td>--}}
{{--                <td>rffksldfkdlmfksde</td>--}}
{{--                <td><select>--}}
{{--                        <option>selection</option>--}}
{{--                        <option>accepter</option>--}}
{{--                        <option>refuser</option>--}}
{{--                    </select></td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}

    </div>
    <!-- /#wrapper -->
    <br>
    <!-- /.container -->
    <script>
        $(document).ready( function () {
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
                            "first":      "Première",
                            "last":       "Dernière",
                            "next":       "Suivant",
                            "previous":   "Précédent"
                        },
                    }
                }
            );

            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        } );

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



