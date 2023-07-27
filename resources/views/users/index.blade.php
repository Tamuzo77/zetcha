<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<style>
    .caroussel h1,
    .caroussel p,
    .caroussel a {
        color: white;
    }

    .slick-dots,
    .slick-prev,
    .slick-next {
        color: rgb(1, 1, 61);
    }
</style>

<body class="text-xl sm:text-xl">
    <header class=" bg-blue-950 text-blue-100 font-bold h-auto pb-10 mb-16">
        <nav class="flex justify-around pt-3 pb-3 items-center md:h-24 ">
            <div class="z-50 md:z-0 md:w-1/5">
                <a href=""><img class="h-16" src="image/zetcha-logo.png" alt=""></a>
            </div>
            <div id="hamburger" class="z-50">
                <i class="fa-solid fa-bars-staggered md:hidden fa-2x cursor-pointer"></i>
            </div>
            <div
                class=" menu absolute md:relative inset-0 md:block hidden z-40 bg-blue-950 md:bg-inherit py-24 transition-all duration-200">
                <div
                    class="grid md:flex lg:text-xl text-lg place-items-center  py-10 md:py-0 md:space-y-0 md:space-x-12 text-center md:justify-between">
                    <a href=""
                        class="hover:underline hover:scale-x-110 hover:text-white transition-all ease-in-duration-200">Home</a>
                    <a href=""
                        class="hover:underline hover:scale-x-110 hover:text-white transition-all ease-in-duration-200">Pricing</a>
                    <a href=""
                        class="hover:underline hover:scale-x-110 hover:text-white transition-all ease-in-duration-200">How
                        to use</a>
                    <a href=""
                        class="hover:underline hover:scale-x-110 hover:text-white transition-all ease-in-duration-200">About
                        us</a>
                    <a class="rounded-sm text-blue-950 p-2 bg-blue-200 hover:text-white  bordure transition-all hover:bg-inherit ease-in-duration-300"
                        href="">Commencez</a>
                </div>
            </div>
        </nav>
        <section class="hero mt-16 text-center md:text-start px-16 md:flex items-center justify-between mb-10">
            <div
                class=" w-80 h-80 bg-gradient-to-r from-blue-600 to-purple-600 absolute top-0 right-0 blur-2xl opacity-30 overflow-hidden rounded-full">
            </div>
            <div
                class="w-80 h-80 bg-gradient-to-r from-blue-600 to-purple-600 absolute bottom-5 left-0 blur-2xl opacity-30 overflow-hidden rounded-full">
            </div>
            <div class="md:w-1/2 z-20">
                <h1 class=" text-5xl md:text-8xl uppercase title w-48 sm:w-96 m-auto md:m-0">zetcha</h1>
                <h3 class="text-2xl md:text-4xl font-bold mt-3 mb-3" data-aos="fade-right" data-aos-offset="300"
                    data-aos-duration="1000">Partagez, Connectez, Reussissez</h3>
                <p data-aos="fade-right" data-aos-offset="300" data-aos-duration="2000">Bienvenue sur ZETCHA, l'outil
                    incontournable pour partager vos informations professionnelles facilement. Fini les cartes de visite
                    papier que l'on perd ou que l'on oublie. Avec ZETCHA, créez votre carte de visite digitale en un
                    clin d'œil et partagez-la instantanément.</p>
                <button class="btn"><a href="">Créer votre carte</a></button>
            </div>
            <div class="md:w-1/2" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
                data-aos-duration="1500">
                <img src="image/white_business_card_collection.png" alt="">
            </div>
        </section>
        <section class="partenaire z-20">
            <div class=" container grid grid-cols-5 items-center gap-10 justify-center">
                <img class="" src="image/IMG-20210113-WA0017.jpg" alt="">
                <img class="" src="image/logo color black.png" alt="">
                <img class="" src="image/Logo Kubuni@4x.png" alt="">
                <img class="" src="image/LOGO SWIITCH DESIGN@2000x.png" alt="">
                <img class="" src="image/LOGO SWIITCH DESIGN@2000x.png" alt="">
            </div>
        </section>
    </header>
    <section class="description">
        <div class="w-1/2 m-auto mb-10">
            <h1 class="title text-2xl mb-5 md:text-5xl text-center capitalize"><span class="uppercase">ZETCHA</span> :
                La puissance
                de la simplicité</h1>
            <p class="text-center">Notre approche simplifiée vous permet de gérer votre image professionnelle en toute
                simplicité, sans tracas inutiles. Avec ZETCHA, profitez d'une expérience utilisateur sans pareille et
                faites forte impression en quelques clics seuleme</p>
        </div>
        <div class="mx-20">
            <div class="caroussel slick-slider drop-shadow-2xl">
                <div
                    class="bg-blue-950 item p-5 border-solid border-violet-700 border-2 rounded-xl mx-5 drop-shadow-lg hover:scale-95 transition-all duration-500 h-80">
                    <div class=" h-60">
                        <h1 class="font-bold">Créer votre carte digitale</h1>
                        <p class="pb-5 pt-5 text-lg">Créez votre carte de visite digitale en quelques instants
                            seulement. </p>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="h-9 w-9 rounded-lg bg-gradient-to-r from-blue-600 to-purple-600"></button>
                        <a href="" class="">Commencer > </a>
                    </div>
                </div>
                <div
                    class="bg-blue-950 item p-5 border-solid border-green-400 border-2 rounded-xl mx-5 drop-shadow-lg hover:scale-95 transition-all duration-500 h-80">
                    <div class=" h-60">
                        <h1 class="font-bold">Créer votre carte digitale</h1>
                        <p class="pb-5 pt-5 text-lg">Créez votre carte de visite digitale en quelques instants
                            seulement. </p>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="h-10 w-10 rounded-lg bg-green-400"></button>
                        <a href="" class="">Commencer > </a>
                    </div>
                </div>
                <div
                    class="bg-blue-950 item p-5 border-solid border-red-400 border-2 rounded-xl mx-5 drop-shadow-lg hover:scale-95 transition-all duration-500 h-80">
                    <div class=" h-60">
                        <h1 class="font-bold">Créer votre carte digitale</h1>
                        <p class="pb-5 pt-5 text-lg">Créez votre carte de visite digitale en quelques instants
                            seulement. </p>
                    </div>
                    <div class="flex items-center justify-between ">
                        <button class="h-10 w-10 rounded-lg bg-red-500"></button>
                        <a href="" class="">Commencer > </a>
                    </div>
                </div>
                <div
                    class="bg-blue-950 item p-5 border-solid border-violet-700 border-2 rounded-xl mx-5 drop-shadow-lg hover:scale-95 transition-all duration-500 h-80">
                    <div class=" h-60">
                        <h1 class="font-bold">Créer votre carte digitale</h1>
                        <p class="pb-5 pt-5 text-lg">Créez votre carte de visite digitale en quelques instants
                            seulement. </p>
                    </div>
                    <div class="flex items-center justify-between ">
                        <button class="h-10 w-10 rounded-lg bg-gradient-to-r from-blue-600 to-purple-600"></button>
                        <a href="" class="">Commencer > </a>
                    </div>
                </div>
                <div
                    class="bg-blue-950 item p-5 border-solid border-violet-700 border-2 rounded-xl mx-5 drop-shadow-lg hover:scale-95 transition-all duration-500 h-80">
                    <div class=" h-60">
                        <h1 class="font-bold">Créer votre carte digitale</h1>
                        <p class="pb-5 pt-5 text-lg">Créez votre carte de visite digitale en quelques instants
                            seulement. </p>
                    </div>
                    <div class="flex items-center justify-between ">
                        <button class="h-10 w-10 rounded-lg bg-gradient-to-r from-blue-600 to-purple-600"></button>
                        <a href="" class="">Commencer > </a>
                    </div>
                </div>
                <div
                    class="bg-blue-950 item p-5 border-solid border-violet-700 border-2 rounded-xl mx-5 drop-shadow-lg hover:scale-95 transition-all duration-500 h-80">
                    <div class=" h-60">
                        <h1 class="font-bold">Créer votre carte digitale</h1>
                        <p class="pb-5 pt-5 text-lg">Créez votre carte de visite digitale en quelques instants
                            seulement. </p>
                    </div>
                    <div class="flex items-center justify-between ">
                        <button class="h-10 w-10 rounded-lg bg-gradient-to-r from-blue-600 to-purple-600"></button>
                        <a href="" class="">Commencer > </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="processus bg-blue-950 text-white mt-24 p-20 md:px-16 lg:px-28 text-center md:text-start">
        <div
            class="w-80 h-80 bg-gradient-to-r from-blue-600 to-purple-600 absolute top-auto right-0 blur-3xl opacity-30 overflow-hidden rounded-full">
        </div>
        <h1 class="title capitalize w-auto text-2xl mb-24 md:text-5xl text-center">Découvrez le Processus <span
                class=" uppercase">ZETCHA</span></h1>
        <div class="grid md:grid-cols-2 items-center gap-10 mx-10 sm:mx-20 md:mx-0">
            <div class="m-auto md:m-0">
                <img src="image/Circle Chart.png" alt="">
            </div>
            <div>
                <h2 class="font-bold text-2xl mb-5">Le Processus</h2>
                <p>Chez ZETCHA, notre plateforme simplifie la gestion de vos cartes de visite professionnelles grâce à
                    notre processus en trois étapes, combiné à des e-mails astucieux pour vous tenir informé à chaque
                    étape. Voici comment cela fonctionne :</p>
                <div class="grid lg:grid-cols-3 sm:grid-cols-2 m-auto mt-10 lg:gap-5 md:gap-3 gap-1">
                    <div class="rounded-xl bordure mx-3 text-center sm: my-2 py-3 px-1 h-44 hover:scale-95 duration-300">
                        <img class="m-auto" src="image/uil_chart-growth.png" alt="">
                        <h3 class=" h-24 pt-3">Plan Tarifaire</h3>
                        <h3 class="text-4xl md:text-5xl -translate-y-7 title w-8 m-auto">1</h3>
                    </div>
                    <div class="mx-3 bordure rounded-xl text-center sm: my-2 py-3 px-1 h-44 hover:scale-95 duration-300">
                        <img class="m-auto" src="image/uil_arrow-growth.png" alt="">
                        <h3 class=" h-24 pt-3">Action sur Carte</h3>
                        <h3 class="text-4xl md:text-5xl -translate-y-7 title w-8 m-auto">2</h3>
                    </div>
                    <div class="mx-3 bordure rounded-xl text-center sm: my-2 py-3 px-1 h-44 hover:scale-95 duration-300">
                        <img class="m-auto" src="image/fluent_money-20-regular.png" alt="">
                        <h3 class=" h-24 pt-3">Partager</h3>
                        <h3 class="text-4xl md:text-5xl -translate-y-7 title w-8 m-auto">3</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-20">
        <div class="w-1/2 m-auto mb-10">
            <h1 class="title text-2xl mb-5 md:text-5xl text-center capitalize">Découvrez Instantanément les Coordonnées
                Professionnelles </h1>
            <p class="text-center">ZETCHA révolutionne la façon dont vous partagez et recevez les coordonnées
                professionnelles. En un simple scan du code QR sur la carte de visite numérique, accédez instantanément
                aux informations professionnelles de la personne. </p>
        </div>
        <div class="text-white lg:flex place-items-center px-10 lg:px-24">
            <div class="bg-blue-950 flex rounded-xl lg:w-1/2 p-20">
                <div class=" lg:w-3/6 w-auto">
                    <h1 class="text-2xl font-bold">QRCode & NFC</h1>
                    <p class="mt-8 mb-8">Plus besoin de saisir manuellement les données ou de s'encombrer de cartes papier. Découvrez le
                        pouvoir de l'instantané avec ZETCHA !</p>
                    <button class="btn"><a href="">read more about this client</a></button>
                </div>
                <div class=" w-3/6 rotate-90 m-auto">
                    <img class="opacity-70" src="image/zetcha-logo.png" alt="">
                </div>
            </div>
            <div class="lg:-translate-x-10 sm:flex place-items-center">
                <div class=" z-10">
                    <img class="h-96" src="image/Group 24.png" alt="">
                </div>
                <div class="-translate-x-16">
                    <div class="bordure bg-blue-950 py-2 pe-10 ps-24 rounded-xl text-center my-7">Accéder aux Informations</div>
                    <div class="bordure bg-blue-950 py-2 pe-10 ps-24 rounded-xl text-center my-7">Interaction avec la Carte de Visite</div>
                    <div class="bordure bg-blue-950 py-2 pe-10 ps-24 rounded-xl text-center my-7">Enregistrer les Coordonnées</div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        let hamburger = document.querySelector('#hamburger');
        let menu = document.querySelector('.menu');
        hamburger.addEventListener("click", () => {
            menu.classList.toggle('hidden');
            menu.style.transition = 'all 2s';

        });
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

</body>

</html>
