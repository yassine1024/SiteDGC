@extends('header.template')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>




@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{trans('site.Vos contributions')}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success"
                   href="{{ route('contributions.create') }}"> {{trans('site.Nouvelle contribution')}}</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br>
    <table class="table table-bordered bg-light">
        <tr>
            <th>{{trans('site.No')}}</th>
            <th>{{trans('site.Nom')}}</th>
            <th>{{trans('site.Prénom')}}</th>
            <th>{{trans('site.Thème de la publication')}}</th>
            <th>{{trans('site.Etat')}}</th>

            <th width="280px">{{trans('site.Action')}}</th>
        </tr>
        @foreach ($contributions as $contribution)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $contribution->last_name }}</td>
                <td>{{ $contribution->first_name }}</td>
                <td>{{ $contribution->publication_theme }}</td>
                @if($contribution->check=="under verification")
                    <td class="text-primary">
                @elseif($contribution->check=="accepted")
                    <td class="text-success">
                @else
                    <td class="text-danger">

                        @endif
                        {{ trans('site.'.$contribution->check)}}

                        @if($contribution->check=="accepted")
                            . Votre contribution sera affichée dans la page d'acceuil de notre site le {{$contribution->show_date}}
                            @endif
                    </td>
                    <td>
                        <form action="{{ route('contributions.destroy',$contribution->id) }}" method="POST">

                            {{--<a class="btn btn-info" href="{{ route('contributions.show',$contribution->id) }}">Show</a>--}}

                            <a class="btn btn-primary"
                               href="{{ route('contributions.edit',$contribution->id) }}">{{trans('site.Modifier')}}</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" onclick="return confirm('{{trans("site.Êtes-vous sûr?")}}')"><i class="fa fa-trash"></i></button>



                            {{--<a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('contributions.destroy', $contribution->id)}}"><i class="fa fa-trash"></i></a>--}}

                        </form>
                    </td>
            </tr>
        @endforeach
    </table>






@endsection



