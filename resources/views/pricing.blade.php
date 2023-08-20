<x-layout title="">
    <x-slot name="header">
        <section class="hero mt-24  text-center md:text-start px-16 items-center justify-between">
            <div
                class=" w-80 h-80 bg-gradient-to-r from-blue-600 to-purple-600 absolute top-0 right-0 blur-2xl opacity-30 overflow-hidden rounded-full">
            </div>
            <div
                class="w-80 h-80 bg-gradient-to-r from-blue-600 to-purple-600 absolute -bottom-96 left-0 blur-2xl opacity-30 overflow-hidden rounded-full">
            </div>
            <div class="text-center md:px-20">
                <h1 class="title text-2xl md:text-5xl capitalize mb-10">Prêt à booster votre networking ? Rejoignez
                    ZETCHA dès maintenant !</h1>
                <p class="mb-10">Que vous soyez étudiant, professionnel en herbe ou expert confirmé, ZETCHA est là
                    pour vous aider à vous connecter et à réussir dans votre domaine. Laissez votre carte de visite
                    digitale parler pour vous !</p>
            </div>
        </section>
        <livewire:pricing />
        <section class="partenaire z-20">
            <div class=" container grid grid-cols-5 items-center gap-10 justify-center">
                <img class="" src="{{ asset('admin/images/Logo 2.png') }}" alt="">
                <img class="" src="{{ asset('image/zetcha-logo.png') }}" alt="">
            </div>
        </section>
        <livewire:features />

        <livewire:avis />
        <livewire:faq-list />
    </x-slot>
</x-layout>
