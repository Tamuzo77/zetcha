<x-layout>
    <x-slot name="header">
        <div class="hero min-h-screen ">
            <div class="hero-content text-center flex flex-col">
                <div class="max-w-full">
                    <h1 class="text-5xl font-bold">Hello there</h1>
                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                        exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                </div>
                <livewire:carte-z-form :planTarifaireId="$planTarifaireId"  />
            </div>
        </div>
    </x-slot>
</x-layout>
