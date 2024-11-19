<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Buseco') }}</title>
        <!-- Primary Meta Tags -->
            <title>Buseco Official Website</title>
            <meta name="title" content="Buseco Official Website" />
            <meta name="description" content="BUSECO: Powering Bukidnon with Sustainable Energy

            BUSECO (Bukidnon Second Electric Cooperative, Inc.) is an electric cooperative dedicated to providing reliable and sustainable energy solutions to the communities of Bukidnon. Committed to innovation and environmental responsibility, BUSECO ensures access to affordable electricity while supporting the province’s growth and development." />

            <!-- Open Graph / Facebook -->
            <meta property="og:type" content="website" />
            <meta property="og:url" content="http://buseco.coop/" />
            <meta property="og:title" content="Buseco Official Website" />
            <meta property="og:description" content="BUSECO: Powering Bukidnon with Sustainable Energy

            BUSECO (Bukidnon Second Electric Cooperative, Inc.) is an electric cooperative dedicated to providing reliable and sustainable energy solutions to the communities of Bukidnon. Committed to innovation and environmental responsibility, BUSECO ensures access to affordable electricity while supporting the province’s growth and development." />
            <meta property="og:image" content="https://metatags.io/images/meta-tags.png" />

            <!-- Twitter -->
            <meta property="twitter:card" content="summary_large_image" />
            <meta property="twitter:url" content="http://buseco.coop/" />
            <meta property="twitter:title" content="Buseco Official Website" />
            <meta property="twitter:description" content="BUSECO: Powering Bukidnon with Sustainable Energy

            BUSECO (Bukidnon Second Electric Cooperative, Inc.) is an electric cooperative dedicated to providing reliable and sustainable energy solutions to the communities of Bukidnon. Committed to innovation and environmental responsibility, BUSECO ensures access to affordable electricity while supporting the province’s growth and development." />
            <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" />

            <!-- Meta Tags-->

        <link rel="icon" href="{{ url('images/buseco.png') }}">
        
        <!-- Fonts -->
        <!--link rel="preconnect" href="https://fonts.bunny.net"> -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/homepage.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- header -->
        @include('layouts.header')
        <!-- header -->
        
        <!-- main -->
        <div class="w-full">
            {{ $slot }}
        </div>
        <!-- end main -->

        <!--footer -->
        @include('layouts.footer')
        <!--end footer-->
    </body>
</html>
