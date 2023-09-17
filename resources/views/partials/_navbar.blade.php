<nav class="flex justify-around pt-3 pb-3 items-center md:h-24">
    <div class="z-50 md:z-0 md:w-1/5">
        <a href="">
            <img class="h-16" src="image/zetcha-logo.png" alt="">
        </a>
    </div>
    <div id="hamburger" class="z-50">
        <i class="fa-solid fa-bars-staggered md:hidden fa-2x cursor-pointer"></i>
    </div>
    <div
        class=" menu absolute md:relative inset-0 md:block hidden z-40 bg-blue-950 md:bg-inherit py-24 transition-all duration-200">
        <div
            class="grid md:flex lg:text-xl text-lg place-items-center  py-10 md:py-0 md:space-y-0 md:space-x-12 text-center md:justify-between">
            <a href="/"
                class="hover:underline hover:scale-x-110 hover:text-white transition-all ease-in-duration-200">Home</a>
            <a href="{{ route('pricing') }}"
                class="hover:underline hover:scale-x-110 hover:text-white transition-all ease-in-duration-200">Pricing</a>
            <a href="{{ route('how-to-use') }}"
                class="hover:underline hover:scale-x-110 hover:text-white transition-all ease-in-duration-200">How
                to use</a>
            <a href="{{ route('about') }}"
                class="hover:underline hover:scale-x-110 hover:text-white transition-all ease-in-duration-200">About
                us</a>
            <button
                class="rounded-sm text-blue-950 p-2 bg-blue-200 hover:text-white  bordure transition-all hover:bg-inherit ease-in-duration-300"
                onclick="startModal.showModal()" >Commencez</button>
            <dialog id="startModal" class="modal modal-bottom sm:modal-middle">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Choisissez votre plan!</h3>
                    <form action="{{ route('createCarteZ') }}" method="GET" class="flex flex-row space-x-3 justify-center items-center">
                        @forelse (\App\Models\PlanTarifaire::where('is_active', true)->get() as $plan)
                            <button type="submit" name="planTarifaire_id" value="{{ $plan->id }}" class="card btn glass">
                                <div class="card-body">
                                    <h2 class="card-title">{{ $plan->name }}</h2>
                                </div>
                            </button>

                        @empty
                            <p>Aucun Plan Disponible pour le moment...</p>
                        @endforelse
                    </form>
                    <a class=" pt-7 link link-hover text-sm" href="{{ route('pricing') }}">Details sur les plans</a>

                </div>
                <form method="dialog" class="modal-backdrop">
                    <button>close</button>
                </form>
            </dialog>
        </div>
    </div>
</nav>
