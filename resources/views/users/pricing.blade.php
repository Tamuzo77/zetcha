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
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <title>Document</title>
</head>

<body class="text-xl sm:text-xl">
    <div class="bg-blue-950 text-white pb-10">
        <header class="bg-blue-950 text-blue-100 font-bold h-auto pb-10 mb-16">
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
            </nav>
            <section class="hero mt-24 text-center md:text-start px-16 items-center justify-between">
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
            <section class="price text-white mb-20">
                <div
                    class=" grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 lg:mx-20 mx-5 md:mx-10 sm:mx-20  md:gap-x-10 gap-x-0 lg:gap-y-0 gap-y-10">
                    <div
                        class="bg-blue-950 rounded-2xl p-10 space-y-10 shadow-lg shadow-blue-950 hover:scale-95 transition-all duration-200 bordure">
                        <h1 class="text-xl md:text-3xl title w-24">BASIC</h1>
                        <p class="opacity-95">Conçu pour ceux qui cherchent une solution simple et efficace pour
                            leur carte</p>
                        <p class="text-3xl md:text-5xl">700 fcfa</p>
                        <button
                            class="text-blue-950 bg-white w-full transition-all duration-100 hover:bordure hover:bg-inherit hover:text-white "><a
                                href="">Lancez-vous</a></button>
                        <ul class=" space-y-5 opacity-95">
                            <div class="flex items-center">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none">
                                    <circle cx="16" cy="16" r="12" fill="blue"></circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                                <li class=" ms-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                            </div>
                            <div class="flex items-center">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none">
                                    <circle cx="16" cy="16" r="12" fill="blue"></circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                                <li class=" ms-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                            </div>
                            <div class="flex items-center">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none">
                                    <circle cx="16" cy="16" r="12" fill="blue"></circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                                <li class=" ms-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                            </div>
                        </ul>
                    </div>

                    <div
                        class="bg-blue-950 rounded-2xl p-10 space-y-10 shadow-lg shadow-blue-950 hover:scale-95 transition-all duration-200 bordure">
                        <h1 class="text-xl md:text-3xl title w-24">BASIC</h1>
                        <p class="opacity-95">Conçu pour ceux qui cherchent une solution simple et efficace pour
                            leur carte</p>
                        <p class="text-3xl md:text-5xl">700 fcfa</p>
                        <button
                            class="text-blue-950 bg-white w-full transition-all duration-100 hover:bordure hover:bg-inherit hover:text-white "><a
                                href="/inscription">Lancez-vous</a></button>
                        <ul class=" space-y-5 opacity-95">
                            <div class="flex items-center">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none">
                                    <circle cx="16" cy="16" r="12" fill="blue">
                                    </circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                                <li class=" ms-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                            </div>
                            <div class="flex items-center">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none">
                                    <circle cx="16" cy="16" r="12" fill="blue">
                                    </circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                                <li class=" ms-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                            </div>
                            <div class="flex items-center">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none">
                                    <circle cx="16" cy="16" r="12" fill="blue">
                                    </circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                                <li class=" ms-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                            </div>
                        </ul>
                    </div>

                    <div
                        class="bg-blue-950 rounded-2xl p-10 space-y-10 shadow-lg shadow-blue-950 hover:scale-95 transition-all duration-200 bordure">
                        <h1 class="text-xl md:text-3xl title w-24">BASIC</h1>
                        <p class="opacity-95">Conçu pour ceux qui cherchent une solution simple et efficace pour
                            leur carte</p>
                        <p class="text-3xl md:text-5xl">700 fcfa</p>
                        <button
                            class="text-blue-950 bg-white w-full hover:bordure hover:bg-inherit hover:text-white transition-all duration-100"><a
                                href="">Lancez-vous</a></button>
                        <ul class=" space-y-5 opacity-95">
                            <div class="flex items-center">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none">
                                    <circle cx="16" cy="16" r="12" fill="blue">
                                    </circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                                <li class=" ms-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                            </div>
                            <div class="flex items-center">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none">
                                    <circle cx="16" cy="16" r="12" fill="blue">
                                    </circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                                <li class=" ms-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                            </div>
                            <div class="flex items-center">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none">
                                    <circle cx="16" cy="16" r="12" fill="blue">
                                    </circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                                <li class=" ms-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </section>
        </header>
        <section class="partenaire z-20">
            <div class=" container grid grid-cols-5 items-center gap-10 justify-center">
                <img class="" src="image/IMG-20210113-WA0017.jpg" alt="">
                <img class="" src="image/logo color black.png" alt="">
                <img class="" src="image/Logo Kubuni@4x.png" alt="">
                <img class="" src="image/LOGO SWIITCH DESIGN@2000x.png" alt="">
                <img class="" src="image/LOGO SWIITCH DESIGN@2000x.png" alt="">
            </div>
        </section>
        <section class="compare mt-20">
            <div class="text-center md:px-20 mb-10">
                <h1 class="title text-2xl md:text-5xl capitalize mb-10">Compare plans & features</h1>
                <table class="table-fixed border-collapse w-full border-spacing-y-20">
                    <thead class="border-b border-b-slate-500">
                        <tr class="title">
                            <th class="py-2">Features</th>
                            <th>Basic</th>
                            <th>Premium</th>
                            <th>Entreprise</th>
                        </tr>
                    </thead>
                    <tbody class="align-baseline">
                        <tr class="border-b border-b-slate-500">
                            <td class="py-2">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                            <td class="py-2">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none m-auto">
                                    <circle cx="16" cy="16" r="12" fill="purple"></circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                            </td>
                            <td class="py-2">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none m-auto">
                                    <circle cx="16" cy="16" r="12" fill="purple"></circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                            </td>
                            <td class="py-2">12</td>
                        </tr>
                        <tr class="border-b border-b-slate-500">
                            <td class="py-2">Witchy Woman</td>
                            <td class="py-2">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none m-auto">
                                    <circle cx="16" cy="16" r="12" fill="purple"></circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                            </td>
                            <td class="py-2">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none m-auto">
                                    <circle cx="16" cy="16" r="12" fill="purple"></circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                            </td>
                            <td class="py-2">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none m-auto">
                                    <circle cx="16" cy="16" r="12" fill="purple"></circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr class="border-b border-b-slate-500">
                            <td class="py-2">Witchy Woman</td>
                            <td class="py-2">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none m-auto">
                                    <circle cx="16" cy="16" r="12" fill="purple"></circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                            </td>
                            <td class="py-2">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none m-auto">
                                    <circle cx="16" cy="16" r="12" fill="purple"></circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                            </td>
                            <td class="py-2">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none m-auto">
                                    <circle cx="16" cy="16" r="12" fill="purple"></circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr class="border-b border-b-slate-500">
                            <td class="py-2">Witchy Woman</td>
                            <td class="py-2">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none m-auto">
                                    <circle cx="16" cy="16" r="12" fill="purple"></circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                            </td>
                            <td class="py-2">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none m-auto">
                                    <circle cx="16" cy="16" r="12" fill="purple"></circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                            </td>
                            <td class="py-2">
                                <svg viewBox="0 0 32 32" fill="none" class="h-8 w-8 flex-none m-auto">
                                    <circle cx="16" cy="16" r="12" fill="purple"></circle>
                                    <path
                                        d="M11.375 16.626a1 1 0 0 0-1.414 1.414l1.414-1.414Zm9.844-3.876a1 1 0 1 0-1.324-1.5l1.324 1.5Zm-6.754 8.38-.707.707a1 1 0 0 0 1.654-.385l-.947-.322Zm.947.322a20.359 20.359 0 0 1 5.807-8.702l-1.324-1.5a22.359 22.359 0 0 0-6.377 9.558l1.894.644ZM9.96 18.04l3.797 3.797 1.414-1.414-3.797-3.797-1.414 1.414Z"
                                        fill="white"></path>
                                </svg>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>
        <section class="testimonials mt-24 p-20 md:px-16 lg:px-28 text-center md:text-start">
            <div
                class="w-80 h-80 bg-gradient-to-r from-blue-600 to-purple-600 absolute top-auto right-0 blur-3xl opacity-30 overflow-hidden rounded-full">
            </div>
            <h1 class="capitalize title text-2xl md:text-5xl text-center"> ce que la communauté en dit</h1>
            <div
                class="testimonials-card grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-16 gap-x-5 lg:gap-x-10 sm:mx-10 lg:mx-20 max-h-[33rem] overflow-hidden">
                <ul>
                    <div class="bordure rounded-xl mt-5">
                        <div class="text-center p-5">
                            <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque perferendis, corporis
                                pariatur magnam quas distinctio similique, quam temporibus non tempore neque aspernatur
                                assumenda atque fuga delectus voluptatibus voluptates consequuntur nihil!</q>
                        </div>
                        <div class="flex items-center justify-between bg-blue-50 text-blue-950 p-3 rounded-b-xl">
                            <div>
                                <span href="" class="font-bold">bai AHOUISSOU</span>
                                <p>Developpeur</p>
                            </div>
                            <img class=" h-18 w-18 rounded-lg " src="image/Image-60.png" alt="">
                        </div>
                    </div>
                    <div class=" bordure rounded-xl mt-5">
                        <div class="text-center p-5">
                            <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto voluptates modi
                                consectetur. Reprehenderit laborum consequatur corporis? Ut quod corporis, obcaecati
                                tempora modi odio quia harum, aliquam natus cum veniam saepe.</q>
                        </div>
                        <div class="flex items-center justify-between bg-blue-50 text-blue-950 p-3 rounded-b-xl">
                            <div>
                                <span href="" class="font-bold">bai AHOUISSOU</span>
                                <p>Developpeur</p>
                            </div>
                            <img class=" h-18 w-18 rounded-lg " src="image/Image-60.png" alt="">
                        </div>
                    </div>
                    <div class=" bordure rounded-xl mt-5">
                        <div class="text-center p-5">
                            <q>fdsgsdgdg</q>
                        </div>
                        <div class="flex items-center justify-between bg-blue-50 text-blue-950 p-3 rounded-b-xl">
                            <div>
                                <span href="" class="font-bold">bai AHOUISSOU</span>
                                <p>Developpeur</p>
                            </div>
                            <img class=" h-18 w-18 rounded-lg " src="image/Image-60.png" alt="">
                        </div>
                    </div>
                    <div class=" bordure rounded-xl mt-5">
                        <div class="text-center p-5">
                            <q>fdsgsdgdg</q>
                        </div>
                        <div class="flex items-center justify-between bg-blue-50 text-blue-950 p-3 rounded-b-xl">
                            <div>
                                <span href="" class="font-bold">bai AHOUISSOU</span>
                                <p>Developpeur</p>
                            </div>
                            <img class=" h-18 w-18 rounded-lg " src="image/Image-60.png" alt="">
                        </div>
                    </div>
                </ul>
                <ul>
                    <div class="bordure rounded-xl mt-5">
                        <div class="text-center p-5">
                            <q>fdsgsdgdg</q>
                        </div>
                        <div class="flex items-center justify-between bg-blue-50 text-blue-950 p-3 rounded-b-xl">
                            <div>
                                <span href="" class="font-bold">bai AHOUISSOU</span>
                                <p>Developpeur</p>
                            </div>
                            <img class=" h-18 w-18 rounded-lg " src="image/Image-60.png" alt="">
                        </div>
                    </div>
                    <div class=" bordure rounded-xl mt-5">
                        <div class="text-center p-5">
                            <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto voluptates modi
                                consectetur. Reprehenderit laborum consequatur corporis? Ut quod corporis, obcaecati
                                tempora modi odio quia harum, aliquam natus cum veniam saepe.</q>
                        </div>
                        <div class="flex items-center justify-between bg-blue-50 text-blue-950 p-3 rounded-b-xl">
                            <div>
                                <span href="" class="font-bold">bai AHOUISSOU</span>
                                <p>Developpeur</p>
                            </div>
                            <img class=" h-18 w-18 rounded-lg " src="image/Image-60.png" alt="">
                        </div>
                    </div>
                    <div class=" bordure rounded-xl mt-5">
                        <div class="text-center p-5">
                            <q>fdsgsdgdg</q>
                        </div>
                        <div class="flex items-center justify-between bg-blue-50 text-blue-950 p-3 rounded-b-xl">
                            <div>
                                <span href="" class="font-bold">bai AHOUISSOU</span>
                                <p>Developpeur</p>
                            </div>
                            <img class=" h-18 w-18 rounded-lg " src="image/Image-60.png" alt="">
                        </div>
                    </div>
                    <div class=" bordure rounded-xl mt-5">
                        <div class="text-center p-5">
                            <q>fdsgsdgdg</q>
                        </div>
                        <div class="flex items-center justify-between bg-blue-50 text-blue-950 p-3 rounded-b-xl">
                            <div>
                                <span href="" class="font-bold">bai AHOUISSOU</span>
                                <p>Developpeur</p>
                            </div>
                            <img class=" h-18 w-18 rounded-lg " src="image/Image-60.png" alt="">
                        </div>
                    </div>
                </ul>
                <ul>
                    <div class="bordure rounded-xl mt-5">
                        <div class="text-center p-5">
                            <q>fdsgsdgdg</q>
                        </div>
                        <div class="flex items-center justify-between bg-blue-50 text-blue-950 p-3 rounded-b-xl">
                            <div>
                                <span href="" class="font-bold">bai AHOUISSOU</span>
                                <p>Developpeur</p>
                            </div>
                            <img class=" h-18 w-18 rounded-lg " src="image/Image-60.png" alt="">
                        </div>
                    </div>
                    <div class=" bordure rounded-xl mt-5">
                        <div class="text-center p-5">
                            <q>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto voluptates modi
                                consectetur. Reprehenderit laborum consequatur corporis? Ut quod corporis, obcaecati
                                tempora modi odio quia harum, aliquam natus cum veniam saepe.</q>
                        </div>
                        <div class="flex items-center justify-between bg-blue-50 text-blue-950 p-3 rounded-b-xl">
                            <div>
                                <span href="" class="font-bold">bai AHOUISSOU</span>
                                <p>Developpeur</p>
                            </div>
                            <img class=" h-18 w-18 rounded-lg " src="image/Image-60.png" alt="">
                        </div>
                    </div>
                    <div class=" bordure rounded-xl mt-5">
                        <div class="text-center p-5">
                            <q>fdsgsdgdg</q>
                        </div>
                        <div class="flex items-center justify-between bg-blue-50 text-blue-950 p-3 rounded-b-xl">
                            <div>
                                <span href="" class="font-bold">bai AHOUISSOU</span>
                                <p>Developpeur</p>
                            </div>
                            <img class=" h-18 w-18 rounded-lg " src="image/Image-60.png" alt="">
                        </div>
                    </div>
                    <div class=" bordure rounded-xl mt-5">
                        <div class="text-center p-5">
                            <q>fdsgsdgdg</q>
                        </div>
                        <div class="flex items-center justify-between bg-blue-50 text-blue-950 p-3 rounded-b-xl">
                            <div>
                                <span href="" class="font-bold">bai AHOUISSOU</span>
                                <p>Developpeur</p>
                            </div>
                            <img class=" h-18 w-18 rounded-lg " src="image/Image-60.png" alt="">
                        </div>
                    </div>
                </ul>
            </div>
            <div
                class=" show inset-x-0 bottom-auto -translate-y-32 flex justify-center bg-gradient-to-t from-white pt-32 pb-8 pointer-events-none dark:from-slate-900 absolute">
                <button type="button"
                    class="relative bg-slate-900 hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-offset-2 text-sm text-white font-semibold h-12 px-6 rounded-lg flex items-center dark:bg-slate-700 dark:hover:bg-slate-600 pointer-events-auto">Show
                    more...</button>
            </div>
        </section>
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

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum
                                                    ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum
                                                    ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum
                                                    ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum
                                                    ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500 " fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>

                                        <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                            <a href="#" class="flex items-center justify-between"
                                                @click.prevent="isOpen = true">
                                                <h4 :class="{ 'text-violet-400 font-medium': isOpen == true }">Lorem
                                                    Ipsum ?</h4>
                                                <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                    class="w-5 h-5 text-gray-500" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </a>
                                            <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                                :class="{ 'text-white ': isOpen == true }">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </article>




        </section>
        <div id="alpine-devtools" x-data="devtools()" x-show="alpines.length" x-init="start()"></div>
    </div>
    <div class="mt-8">
        <h2
          class=" mb-4 text-2xl font-bold text-center text-gray-800 lg:text-3xl md:mb-6">
          Get in touch
        </h2>

        <p class="max-w-screen-md mx-auto text-center text-gray-500 md:text-lg">
          Please fill in the details below so that we can get in contact with you.
        </p>
      </div>

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
