@props(['title'])
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
    <title>{{ env('APP_NAME') | $title ?? '' }}</title>
    @livewireStyles()
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
        @include('partials._navbar')
        @if (request()->is('/'))
            @include('partials._hero')
        @endif

    </header>
    {{ $slot }}
@include('partials._footer')
@livewireScripts()
</body>

</html>
