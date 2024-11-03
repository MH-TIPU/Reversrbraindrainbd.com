<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="https://example.com/path/to/favicon.ico">

    @vite('resources/css/app.css')

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S719TMG9B1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S719TMG9B1');
</script>
</head>

<body class="mx-auto min-h-screen">

    <header class="bg-green-800 text-white p-4">
        <div class="container mx-auto p-4">
            <div class="flex flex-wrap justify-between items-center">
                <h1 class="text-2xl font-bold text-white">
                    <a href="/">#reversebraindrainbd</a>
                </h1>

                <!-- Search Form with Button -->
                <div class="w-full sm:w-auto mt-4 sm:mt-0 order-last sm:order-none flex items-center">
                    <form action="{{ url('/search') }}" method="GET"
                        class="relative w-full sm:w-64 lg:w-96 flex">
                        @csrf
                        <input
                            class="relative z-10 bg-transparent w-full h-8 pl-8 pr-8 outline-none cursor-text border-b-2 border-red-500"
                            type="search" name="search" id="search" placeholder="নাম..." />
                        <ion-icon class="text-2xl absolute right-2 top-1 cursor-pointer"
                            name="search-outline"></ion-icon>

                            <button class="bg-blue-400 p-2 rounded-md text-sm ml-2" type="submit">
                                Search
                            </button>
                    </form>
                    <!-- Search Button -->

                </div>

                <!-- Share Button -->
                <button class="bg-blue-600 p-2 rounded-md text-sm mt-4 sm:mt-0">
                    <a href="https://forms.gle/goXL4wXnXDR4jvUx7">
                        Share Yours/ Contact Us
                    </a>
                </button>
            </div>
        </div>
    </header>


    <div class="container my-10 mx-auto p-4">

        <main class="mx-auto">
            <div class="grid lg:grid-cols-6 gap-5">
                <div class=" lg:col-span-2">
                    <div class="card card-normal bg-base-100 shadow-xl text-sm p-4">
                        <figure class=" flex items-center justify-center">

                            <img class="w-32 h-32"
                                src="{{ asset('img/profile.png') }}"
                                alt="Avatar" />

                        </figure>
                        <div class="card-body">

                            <h2 class="card-title text-md">{{ $human->name }} ({{ $human->job }})</h2>

                            @if ($human->education)
                                <h1 class="flex items-center my-2">
                                    <svg class="w-5 h-5 mr-2 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M3 22V2h18v20H3zm2-2h2v-2H5v2zm0-4h2v-2H5v2zm0-4h2V6H5v6zm4 8h2v-2H9v2zm0-4h2v-2H9v2zm0-4h2V6H9v6zm4 8h2v-2h-2v2zm0-4h2v-2h-2v2zm0-4h2V6h-2v6zm4 8h2v-2h-2v2zm0-4h2v-2h-2v2zm0-4h2V6h-2v6z" />
                                    </svg>
                                    {{ strip_tags(html_entity_decode($human->education)) }}
                                </h1>
                            @endif

                            @if ($human->organization2)
                                <h1 class="flex items-center my-2">
                                    <svg class="w-5 h-5 mr-2 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M3 22V2h18v20H3zm2-2h2v-2H5v2zm0-4h2v-2H5v2zm0-4h2V6H5v6zm4 8h2v-2H9v2zm0-4h2v-2H9v2zm0-4h2V6H9v6zm4 8h2v-2h-2v2zm0-4h2v-2h-2v2zm0-4h2V6h-2v6zm4 8h2v-2h-2v2zm0-4h2v-2h-2v2zm0-4h2V6h-2v6z" />
                                    </svg>
                                    {{ strip_tags(html_entity_decode($human->organization2)) }}
                                </h1>
                            @endif

                            <h1 class="flex items-center my-2">
                                <svg class="w-5 h-5 mr-2 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C8.134 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.134-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                                </svg>
                                {{ $human->country }}
                            </h1>


                            <div class="flex gap-3">
                                @if (!empty($human->fb_url))
                                    <a href="{{ $human->fb_url }}" aria-label="Facebook">
                                        <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24h11.495v-9.294H9.691V11.41h3.129V8.799c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.462.099 2.794.144v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.762v2.309h3.59l-.467 3.297h-3.123V24h6.116c.732 0 1.325-.593 1.325-1.324V1.325C24 .593 23.407 0 22.675 0z" />
                                        </svg>
                                    </a>
                                @endif

                                @if (!empty($human->linkdin_url))
                                    <a href="{{ $human->linkdin_url }}" aria-label="LinkedIn">
                                        <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M22.23 0H1.77C.791 0 0 .771 0 1.725v20.547C0 23.229.791 24 1.77 24h20.46C23.209 24 24 23.229 24 22.273V1.725C24 .771 23.209 0 22.23 0zM7.06 20.452H3.561V9.184H7.06v11.268zM5.311 7.726c-1.107 0-2.006-.917-2.006-2.047 0-1.13.899-2.047 2.006-2.047s2.006.917 2.006 2.047c0 1.13-.899 2.047-2.006 2.047zM20.452 20.452h-3.499V14.9c0-1.329-.027-3.045-1.855-3.045-1.855 0-2.14 1.448-2.14 2.946v5.652h-3.498V9.184h3.359v1.533h.048c.469-.887 1.615-1.822 3.326-1.822 3.557 0 4.212 2.344 4.212 5.394v6.163z" />
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>

                        <button onclick="window.history.back()"
                            class="btn btn-active font-bold mx-auto p-4 from-fuchsia-300">Back</button>

                    </div>



                </div>

                <div class="lg:col-span-4 mt-10 lg:mt-0 ">

                    <div class="card shadow-xl bg-base-100 p-4">
                        <h1 class="py-2">{{ strip_tags(html_entity_decode($human->motivation)) }}</h1>
                    </div>

                    <div class="card shadow-xl bg-base-100 p-4 my-4">
                        <h1 class="font-bold">কাজ করতে আগ্রহী</h1>
                        <h1 class="py-2">{{ strip_tags(html_entity_decode($human->working_interest)) }}</h1>
                    </div>

                    <div class="card shadow-xl bg-base-100 p-4 my-4">
                        <h1 class="font-bold">দক্ষতার ক্ষেত্র</h1>
                        <h1 class="py-2">{{ strip_tags(html_entity_decode($human->Area_of_experties)) }}</h1>
                    </div>

                    <div class="card shadow-xl bg-base-100 p-4 my-4">
                        <a href="{{$human->fb_post}}">  <button  class="btn btn-accent text-white w-60">  See Original Facebook Post </button> </a>
                    </div>

                </div>


            </div>
        </main>

    </div>


    <footer class="bg-blue-100 p-4 mt-8">
        <div class="container mx-auto">
            <p class="text-center">&copy; #reversebraindrainbd 2024</p>
        </div>
    </footer>

</body>






</html>
