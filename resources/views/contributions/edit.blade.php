@extends('header.template')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


@section('content')

    <div class="d-flex justify-content-center mt-4 mb-4">


        <h2>{{trans('site.ajouter une nouvelle contribution')}}</h2>



    </div>

    {{--@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif--}}

    <form action="{{ route('contributions.update',$contribution->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group row">
            <label for="nickName" class="col-md-4 col-form-label text-md-right"></label>

            <div class="col-md-6" id="nickName">
                <label class="radio-inline"><input type="radio" name="optradio" value="Monsieur" @if($contribution->gender=="Monsieur") checked @endif>{{trans('site.Monsieur')}}</label>
                <label class="radio-inline"><input type="radio" name="optradio" value="Madame" @if($contribution->gender=="Madame") checked @endif>{{trans('site.Madame')}}</label>
                @error('nickName')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        {{--2--}}
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ trans('site.Nom:') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $contribution->last_name }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        {{--End add--}}







        <div class="form-group row">
            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ trans('site.Prénom') }}</label>

            <div class="col-md-6">
                <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{  $contribution->first_name  }}" required autocomplete="firstName" autofocus>

                @error('firstName')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="birthDay" class="col-md-4 col-form-label text-md-right">{{ trans('site.Date de naissance') }}</label>

            <div class="col-md-6">
                <input id="birthDay" type="date" class="form-control @error('birthDay') is-invalid @enderror" name="birthDay" value="{{ $contribution->birth_day }}" required >

                @error('birthDay')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="degree" class="col-md-4 col-form-label text-md-right">{{ trans('site.Diplôme') }}</label>

            <div class="col-md-6">
                <input id="degree" type="text" class="form-control @error('degree') is-invalid @enderror" name="degree" value="{{ $contribution->degree }}" required autocomplete="degree">

                @error('degree')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="function" class="col-md-4 col-form-label text-md-right">{{ trans('site.Fonction') }}</label>

            <div class="col-md-6">
                <input id="function" type="text" class="form-control" name="function" value="{{ $contribution->function }}" required autocomplete="function">

                @error('function')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="organization" class="col-md-4 col-form-label text-md-right">{{ trans('site.Organisme') }}</label>

            <div class="col-md-6">
                <input id="organization" type="text" class="form-control" name="organization" value="{{ $contribution->organization }}" required autocomplete="organization">

                @error('organization')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ trans('site.N tel') }}</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="form-control" name="phone" value="{{ $contribution->phone_number }}" required autocomplete="phone">

                @error('phone')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

            </div>
        </div>
        <div class="form-group row">
            <label for="publication-theme" class="col-md-4 col-form-label text-md-right">{{ trans('site.Theme de la publication') }}</label>

            <div class="col-md-6">
                <input id="publication-theme" type="text" class="form-control" name="publication_theme" value="{{ $contribution->publication_theme }}" required autocomplete="publication-theme">

                @error('publication-theme')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        {{--<div class="form-group row">
            <label for="attach-file" class="col-md-4 col-form-label text-md-right">{{ trans('site.Veuillez joindre le document') }}</label>

            <div class="col-md-6">
                <input id="attach-file" type="file" class="form-control" name="file" required autocomplete="attach-file">

                @error('attach-file')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>--}}

        <div class="form-group">
            <label for="comment">Objet (Description) de la publication</label>
            <textarea class="form-control" rows="5" id="comment" name="comment">{{$contribution->description_publication}}</textarea>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ trans('site.Modifier') }}
                </button>
            </div>
        </div>

    </form>

@endsection

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>