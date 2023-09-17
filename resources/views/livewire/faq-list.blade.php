        <section class="faqs">
            <article id="the-article">

                <div>
                    <div class="mx-auto max-w-6xl">
                        <div class="p-2 rounded">
                            <div class="flex flex-col md:flex-row">
                                <div class="md:w-1/3 p-4">

                                    <div class="sticky inset-x-0 top-0 left-0 py-12">

                                        <div class="text-2xl font-bold md:text-4xl text-violet-400 mb-8">Frequently
                                            asked questions.</div>
                                        <div class="mb-2 text-xl">Lorem Ipsum ?</div>
                                        <div class="text-lg text-white ">See our FAQ for more details</div>
                                    </div>
                                </div>
                                <div class="md:w-2/3 py-12 ">
                                    <div class="p-4">
                                        @forelse ($faqs as $faq)
                                            <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                                <a href="#" class="flex items-center justify-between"
                                                    @click.prevent="isOpen = true">
                                                    <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">
                                                        {{ $faq->question }}</h4>
                                                    <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                        class="w-5 h-5 text-gray-500" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path d="M19 9l-7 7-7-7"></path>
                                                    </svg>
                                                </a>
                                                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                    :class="{ 'text-white ': isOpen == true }">
                                                    <p>{{ $faq->answer }}</p>
                                                </div>
                                            </div>
                                        @empty
                                        @endforelse
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </article>




        </section>
