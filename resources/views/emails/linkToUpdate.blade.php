<x-mail::message>
# Carte N° {{ $carte->numeroZ }}

Nom : {{ $carte->last_name }} <br>
Prenoms : {{ $carte->first_name }} <br>
Votre requête de modification de la carte de numero <strong>{{ $carte->numeroZ }}</strong> a été validée. Poursuivez pour effectuer les modifications de votre carte ZETCHA. Ce lien s’expirera dans 1h. 

<x-mail::button :url="$lien">
Poursuivre
</x-mail::button>

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
