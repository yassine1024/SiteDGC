@component('mail::message', ['userName' => $userName])
# Nouvelle doléance

Bonjour {{$userName}}.
Veuillez consulter le site,vous avez une doléance à traiter.
<br>
<br>
<br>
<br>
Merci.


Cordialement,<br>
{{ config('app.name') }}
@endcomponent
