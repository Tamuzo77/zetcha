    <footer class=" text-blue-950 mt-20">
        <div class="text-center m-auto w-1/2 mb-24">
            <h1 class="title text-2xl md:text-5xl capitalize mb-10 py-2">Prêt à booster votre networking ? Rejoignez ZETCHA
                dès maintenant !</h1>
            <p class="mb-10">Que vous soyez étudiant, professionnel en herbe ou expert confirmé, ZETCHA est là pour
                vous aider à vous connecter et à réussir dans votre domaine. Laissez votre carte de visite digitale
                parler pour vous !</p>
            <button onclick="startModal.showModal()" class="bg-blue-950 text-white mb-2 p-3">Créer Votre Carte</button>
        </div>
        <div
            class="mb-10 sm:px-20 flex lg:text-xl text-lg place-items-center lg:w-1/2 lg:float-right py-10 md:py-0 md:space-y-0 text-center justify-around">
            <a href=""
                class="hover:underline hover:scale-x-110 hover:opacity-95 transition-all ease-in-duration-200">Home</a>
            <a href=""
                class="hover:underline hover:scale-x-110 hover:opacity-95 transition-all ease-in-duration-200">Pricing</a>
            <a href=""
                class="hover:underline hover:scale-x-110 hover:opacity-95 transition-all ease-in-duration-200">How
                to use</a>
            <a href=""
                class="hover:underline hover:scale-x-110 hover:opacity-95 transition-all ease-in-duration-200">About
                us</a>

        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        let hamburger = document.querySelector('#hamburger');
        let menu = document.querySelector('.menu');
        hamburger.addEventListener("click", () => {
            menu.classList.toggle('hidden');
            menu.style.transition = 'all 2s';

        });
        let show = document.querySelector(".show");
        let card = document.querySelector(".testimonials-card")
        show.addEventListener("click", () => {
            card.style.overflow = "visible";
            card.classList.toggle("max-h-[33rem]");
            show.style.opacity = "0";
        })

        // hlink.forEach(link => {
        //     link.addEventListener("click",()=> {
        //         menu.classList.toggle('hidden');
        //         faSolid.classList.toggle('fa-xmark');
        //     })
        // })


        AOS.init();
    </script>

    </script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script>
        $(document).ready(function() {
            $('.slick-slider').slick({
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 1124,
                        settings: {

                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,

                        }
                    },
                    {
                        breakpoint: 750,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2

                        }
                    },
                    {
                        breakpoint: 550,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,


                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });
    </script>
