<x-layout title="">
    <x-slot name="header">
        <div class="w-full h-full md:h-screen {{-- bg-black --}} bg-opacity-70 pt-20">
            <i class="fa-regular fa-circle w-20 h-20 md:w-40 md:h-40 fa-beat-fade text-violet-500 -z-10"></i>
            <div class=" md:flex md:space-x-10 space-x-0 md:space-y-0 space-y-10 px-6 md:px-0  sm:w-4/5 lg:w-3/5 m-auto">
                <div class="md:w-1/2">
                    <h3 class="border-l-4 text-3xl md:text-4xl p-5 border-s-blue-500 font-bold">Our Services</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, nisi officia repellendus
                        recusandae
                        omnis eveniet totam vero, id rerum voluptates fugit numquam necessitatibus modi at aperiam illo
                        delectus impedit. Inventore!</p>
                    <button class="btn"><a href="{{ route('pricing') }}">create your card</a></button>
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-3xl md:text-4xl text-blue-500 p-5">What we do</h3>
                    <div class="flex items-center space-x-10">
                        <i class="fa-solid fa-fax fa-2x text-blue-500"></i>
                        <div class="mb-5">
                            <h3 class="text-2xl md:text-3xl mb-2">Creating</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae autem dolor eum aut
                                voluptatibus quaerat blanditiis quibusdam quae excepturi expedita. Ad dolor adipisci
                                incidunt illum, maxime quam a quod animi.</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-10">
                        <i class="fa-solid fa-fax fa-2x text-blue-500"></i>
                        <div class="mb-5">
                            <h3 class="text-2xl md:text-3xl mb-2">Creating</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae autem dolor eum aut
                                voluptatibus quaerat blanditiis quibusdam quae excepturi expedita. Ad dolor adipisci
                                incidunt illum, maxime quam a quod animi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="mockup-phone">
        <div class="camera"></div>
        <div class="display">
            <div class="artboard artboard-demo phone-1 bg-blue-950">
                <div class=" justify-center items-center w-auto -mt-64 flex flex-col space-y-1">

                    <div class="avatar">
                        <div class="w-16 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                            <img src="{{ asset('admin/images/Logo 2.png') }}" />
                        </div>
                    </div>
                    <div class="">
                        <h4 class="font-bold text-lg "> FullName</h4>
                    </div>

                    <div class="">
                        <h4 class="font-extralight text-sm italic "> Fonctions</h4>
                    </div>
                </div>
                <div class="card glass mt-5">

                </div>
            </div>
        </div>
    </div>

</x-layout>
