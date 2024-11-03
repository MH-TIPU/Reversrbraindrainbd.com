<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Real-Time Search</title>
    @vite('resources/css/app.css') @livewireStyles
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="mb-8 text-center text-3xl font-bold">Real-Time Product Search</h1>
        @livewire('search-component')
    </div>

    @livewireScripts @vite('resources/js/app.js')
</body>

</html>
