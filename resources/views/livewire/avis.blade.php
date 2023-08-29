    <section class=" bg-blue-950 text-white testimonials mt-24 p-20 md:px-16 lg:px-28 text-center md:text-start">
        <div
            class="w-80 h-80 bg-gradient-to-r from-blue-600 to-purple-600 absolute top-auto right-0 blur-3xl opacity-30 overflow-hidden rounded-full">
        </div>
        <h1 class="capitalize title text-2xl md:text-5xl text-center"> ce que la communauté en dit</h1>
        <div
            class="testimonials-card grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-16 gap-x-5 lg:gap-x-10 sm:mx-10 lg:mx-20 max-h-[33rem] overflow-hidden">
                <ul>
                                @forelse ($avis as $avi)
                    <div class="bordure rounded-xl mt-5">
                        <div class="text-center p-5">{{ $avi->content }}</q>
                        </div>
                        <div class="flex items-center justify-between bg-blue-50 text-blue-950 p-3 rounded-b-xl">
                            <div>
                                <span href="" class="font-bold">{{ $avi->author->name }}</span>
                                <p>{{ $avi->author->email }}</p>
                            </div>
                            <img class=" h-18 w-18 rounded-lg " src="image/Image-60.png" alt="">
                        </div>
                    </div>
                    @if ($loop->iteration % 4 == 0)
                    </ul>
                    <ul>
                    <div class="bordure rounded-xl mt-5">
                        <div class="text-center p-5">
                            <q>{{$avi->content}}</q>
                        </div>
                        <div class="flex items-center justify-between bg-blue-50 text-blue-950 p-3 rounded-b-xl">
                            <div>
                                <span href="" class="font-bold">{{ $avi->author->name }}</span>
                                <p>{{ $avi->author->email }}</p>
                            </div>
                            <img class=" h-18 w-18 rounded-lg " src="image/Image-60.png" alt="">
                        </div>
                    </div>
                    @endif
            @empty
            @endforelse
        </div>
        <div
            class=" show inset-x-0 bottom-auto -translate-y-32 flex justify-center bg-gradient-to-t from-white pt-32 pb-8 pointer-events-none dark:from-slate-900 absolute">
            <button type="button"
                class="relative bg-slate-900 hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-offset-2 text-sm text-white font-semibold h-12 px-6 rounded-lg flex items-center dark:bg-slate-700 dark:hover:bg-slate-600 pointer-events-auto">Show
                more...</button>
        </div>
    </section>
