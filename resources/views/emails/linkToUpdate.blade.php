<x-mail::message>
# Carte N° {{ $carte->numeroZ }}

Nom : {{ $carte->last_name }}
Prenoms : {{ $carte->first_name }}
Ici le lien pour modifier votre carte ZETCHA

<x-mail::button :url="$lien">
Poursuivre
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
