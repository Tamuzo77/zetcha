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

<body class="py-20 text-white  text-xl md:text-2xl">
    <div class="heroPattern xl:w-2/4 sm:w-3/4 m-auto rounded-3xl p-10 bg-blue-950"
        {{-- style="background-image: url('image/fond-ecran-fumee-abstraite-pour-ordinateur-bureau.jpg'); --}}">
        <div class=" header-nav">
            <div class=" flex items center justify-between">
                <div></div>
                <div id="hamburger" class="mb-10 z-50">
                    <i class="fa-solid fa-bars-staggered fa-2x cursor-pointer"></i>
                </div>
            </div>
            <div
                class="mb-10 menu absolute md:relative inset-0  hidden z-40 bg-indigo-950 py-24 transition-all duration-200">
                <div class="grid lg:text-xl text-lg place-items-center  py-10 space-y-5 text-center">
                    <a href="/index"
                        class="hover:underline hover:scale-x-110 hover:text-white transition-all ease-in-duration-200">Home</a>
                    <a href="/pricing"
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
        </div>
        <div class="text-center">
            <div>
                <img class=" border-solid border-2 border-white mb-10 m-auto rounded-full md:w-60 md:h-60 w-32 h-32"
                    src="image/fond-ecran-fumee-abstraite-pour-ordinateur-bureau.jpg" alt="">
                <div class="space-y-3">
                    <h3 class="text-3xl">Nom Prenom</h3>
                    <p class="text-xl">Fonctions</p>
                    <p>Entreprises</p>
                </div>
            </div>
            <div class="space-x-10 my-10">
                <i class="fa-solid fa-phone w-11 h-11"></i>
                <i class="fa-regular fa-comment w-11 h-11"></i>
                <i class="fa-regular fa-envelope w-11 h-11"></i>
                <i class="fa-brands fa-whatsapp w-11 h-11"></i>
            </div>
            <div class="space-x-7">
                <i class="fa-regular fa-circle"></i>
                <i class="fa-regular fa-circle"></i>
                <i class="fa-regular fa-circle"></i>
            </div>
        </div>
        <div class="my-16 space-y-5 bg-white text-blue-950 mx-10 p-5 rounded-lg">
            <div>
                <h3>Telephone</h3>
                <p>53435475</p>
            </div>
            <div>
                <h3>Telephone</h3>
                <p>53435475</p>
            </div>
            <div>
                <h3>Telephone</h3>
                <p>53435475</p>
            </div>

        </div>
        <div class="text-center border-l-2 border-r-2 rounded-full p-5 items-center flex justify-between">
            <i class="fa-solid fa-share-nodes w-12 h-12"></i>
            <i class="fa-solid fa-cloud-arrow-down w-12 h-12"></i>
        </div>
    </div>
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
    </script>
</body>

</html>
