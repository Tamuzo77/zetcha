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
<body class="text-lg md:text-xl">
    <section id="how-it-works" class="bg-blue-950 text-white pt-10 pb-24">
        <div class="p-20 md:text-start text-center">
            <h4 class="font-bold text-white mb-4 md:text-4xl text-3xl">How It Works</h4>
            <h1 class="title mb-4 md:text-3xl text-2xl">Grow Up Your Money Saving</h1>
        </div>
        <div class="flex flex-col items-center px-10 justify-between space-y-6 md:flex-row md:space-y-0 md:space-x-6">
                <!-- card 1 -->
            <div class="text-center cursor-pointer">
                <div class="relative bg-black inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-blue-900 ease-in">
                    <p class="text-6xl text-white">1</p>
                </div>
                <h3 class="md:text-3xl text-2xl font-bold py-4">Install The App</h3>
                <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
            </div>
            <img class="hidden lg:block" src="/image/dots.png" alt="">
            <div class="text-center cursor-pointer">
                <div class="relative inline-block px-6 py-3 rounded-lg cursor-pointer bg-blue-900">
                    <p class="text-6xl text-white">2</p>
                </div>
                <h3 class="md:text-3xl text-2xl font-bold py-4">Setup Your Profile</h3>
                <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
            </div>
            <img class="hidden lg:block" src="/image/dots.png" alt="">
            <div class="text-center cursor-pointer">
                <div class="relative bg-black inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-blue-900 ease-in">
                    <p class="text-6xl text-white">3</p>
                </div>
                <h3 class="md:text-3xl text-2xl font-bold py-4">Enjoy The Features!</h3>
                <p class="leading-relaxed">We use an application designed a testing gnose to keep away</p>
            </div>
        </div>
    </section>
    <footer class=" text-blue-950 mt-20">
        <div class="text-center m-auto w-1/2 mb-24">
            <h1 class="title text-2xl md:text-5xl capitalize mb-10">Prêt à booster votre networking ? Rejoignez ZETCHA
                dès maintenant !</h1>
            <p class="mb-10">Que vous soyez étudiant, professionnel en herbe ou expert confirmé, ZETCHA est là pour
                vous aider à vous connecter et à réussir dans votre domaine. Laissez votre carte de visite digitale
                parler pour vous !</p>
            <button class="bg-blue-950 text-white p-3">Créer Votre Carte</button>
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
        AOS.init();
    </script>

</body>

</html>
