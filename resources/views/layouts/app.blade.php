<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html" />

    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Add Select2 CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>Reversrbraindrainbd</title>

    <link rel="icon" type="image/png" href="#" sizes="16x16">

    <!-- Add your other stylesheets -->

    <!-- Add your JavaScript and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>



    {{-- <style> and other style declarations --}}

    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-[#FAFAFA] max-w-screen-2xl mx-auto">

    <header class="bg-white h-auto sticky top-0 z-10">

    </header>


    <div class="container mx-auto">

        <p> hi </p>
        @yield('content')
    </div>



    {{-- Footer  --}}

    <footer>


    </footer>


    @vite('resources/js/app.js')


    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    @livewireScripts
</body>

</html>
