@component('mail::message',['showDate'=>$showDate,'publicationTheme'=>$publicationTheme])
    # Contribution

    Félicitations, votre contribution "{{$publicationTheme}}" a été acceptée et sera affichée le {{$showDate}};


@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
