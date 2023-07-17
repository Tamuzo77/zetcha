<x-mail::message>
# Introduction

Votre demande de réimpression de la carte a été accepté 

{{ $carte->first_name. ' '. $carte->last_name }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
