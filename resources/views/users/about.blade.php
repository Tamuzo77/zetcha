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

<body class="text-white text-lg sm:text-xl bg-blue-950 pb-40" {{-- style="background-image: url('image/Rectangle 2.png');" --}}>
    <div class="w-full h-full md:h-screen {{-- bg-black --}} bg-opacity-70 pt-20">
        <i class="fa-regular fa-circle w-20 h-20 md:w-40 md:h-40 fa-beat-fade text-violet-500 -z-10"></i>
        <div class=" md:flex md:space-x-10 space-x-0 md:space-y-0 space-y-10 px-6 md:px-0  sm:w-4/5 lg:w-3/5 m-auto">
            <div class="md:w-1/2">
                <h3 class="border-l-4 text-3xl md:text-4xl p-5 border-s-blue-500 font-bold">Our Services</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, nisi officia repellendus recusandae
                    omnis eveniet totam vero, id rerum voluptates fugit numquam necessitatibus modi at aperiam illo
                    delectus impedit. Inventore!</p>
                <button class="btn"><a href="">create your card</a></button>
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
</body>

</html>
