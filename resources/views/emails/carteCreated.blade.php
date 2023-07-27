
    # Nouvelle carte crée !!


    <h3>Codes-Z : {{ $carte->numeroZ }}
    </h3>
    <br>
    {!! QrCode::gradient(0, 0, 75, 0, 0, 100, 'vertical')->size(200)->generate($carte->codeQR) !!}

    <h1>
        {{ $carte->last_name . ' ' . $carte->first_name }}</h1> <br>
    <p>
        Carte ZETCHA {{ $carte->planTarifaire->name . '(' . $carte->planTarifaire->price . ')' }}
    </p>
    <br>
    <p>
        Nous vous remercions pour votre confiance aux cartes ZETCHA
    </p>


    {{ config('app.name') }}