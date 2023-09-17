<div
    class=" text-white grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 lg:mx-20 mx-5 md:mx-10 sm:mx-20  md:gap-x-10 gap-x-0 lg:gap-y-0 gap-y-10">
    @foreach ($pricings as $pricing)
        <div
            class="bg-blue-950 rounded-2xl p-10 space-y-10 shadow-lg shadow-blue-950 hover:scale-95 transition-all duration-200 bordure">
            <h1 class="text-xl md:text-3xl title w-auto">{{ $pricing->name }}</h1>
            @if ($loop->iteration == 1)
                <p class="opacity-95">Conçu pour ceux qui cherchent une solution simple et efficace pour leur
                    carte
                </p>
            @elseif ($loop->iteration == 2)
                <p class="opacity-95">Idéal pour ceux qui souhaitent tirer le meilleur parti de leur carte de
                    visite numérique.
                </p>
            @else
                <p class="opacity-95">Conçu pour les professionnels ambitieux qui souhaitent une présence numérique
                    remarquable
                </p>
            @endif
            <p class="text-3xl md:text-5xl">{{ $pricing->price }} FCFA</p>
            <form action="{{ route('createCarteZ') }}" method="GET">
                <button name="planTarifaire_id" value="{{ $pricing->id }}"
                    class="text-blue-950 py-4 rounded-xl bg-white w-full transition-all duration-100 hover:bordure hover:bg-inherit hover:text-white ">Lancez-vous</button>

            </form>
            <ul class=" space-y-5 opacity-95">
                @foreach ($pricing->fonctionnalites as $fonctionnalite)
                    <div class="flex items-center">
                        <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none">
                            <circle cx="16" cy="16" r="12" fill="blue"></circle>
                            <path
                                d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                fill="white"></path>
                        </svg>
                        <li class=" ms-3">{{ $fonctionnalite->name }}</li>
                    </div>
                @endforeach

            </ul>
        </div>
    @endforeach


</div>
