<script src="https://cdn.tailwindcss.com"></script>


<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
        <h3 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-green-900">Codes-Z : {{ $carte->numeroZ }} </h3>

        <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded">
        {!! QrCode::gradient(0, 0, 75, 0, 0, 100, 'vertical')->size(200)->generate($carte->codeQR) !!}

        <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
                {{ $carte->last_name . ' ' . $carte->first_name }}</h1>
            <p class="mb-8 leading-relaxed">
                Carte ZETCHA {{ $carte->planTarifaire->name . '(' . $carte->planTarifaire->price . ')' }}
            </p>
        </div>
    </div>
</section>
