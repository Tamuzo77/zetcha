<x-mail::message>
# Carte N° {{ $carte->numeroZ }}

Votre demande de réimpression de la carte a été accepté 

Nom & Prénoms : {{ $carte->first_name. ' '. $carte->last_name }}
<p>
    <strong>Numero Z:</strong> {{ $carte->numeroZ }}
</p>
Nous vous recontacterons bientôt !
Merci,<br>
{{ config('app.name') }}
</x-mail::message>
