<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="https://example.com/path/to/favicon.ico">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="./map.js"></script>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S719TMG9B1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-S719TMG9B1');
    </script>

</head>

<body class="min-h-screen">

    <header class="bg-green-800 text-white p-4">
        <div class="container mx-auto p-4">
            <div class="flex flex-wrap justify-between items-center">
                <h1 class="text-2xl font-bold text-white">
                    <a href="/">#reversebraindrainbd</a>
                </h1>

                <!-- Search Form with Button -->
                

                <!-- Share Button -->
                <button class="bg-blue-600 p-2 rounded-md text-sm mt-4 sm:mt-0">
                    <a href="https://forms.gle/goXL4wXnXDR4jvUx7">
                        Share Yours/ Contact Us
                    </a>
                </button>
            </div>
        </div>
    </header>



    <main class="container mx-auto mt-8 p-4">
        <div class="md:flex justify-between items-center gap-5">
            <section class="md:w-2/3">
                <h1 class="text-5xl font-bold">Rebuild Bangladesh 🇧🇩 <br>Lead the Change</h1>
                <p class="text-xm md:w-2/3 my-4 md:my-6">Use your global skills to fuel local growth. Reconnect with
                    your roots,
                    drive innovation, and build a legacy. Your return shapes the future and empowers national progress.
                </p>

                <p class="text-xm md:w-2/3 my-4 md:my-6"> For people and organizations in Bangladesh: find successful
                    Bangladeshis abroad to extend offers to mentor, collaborate, and work</p>
                <button class="bg-blue-600 p-2 text-white rounded-md text-sm">
                    <a href="https://forms.gle/goXL4wXnXDR4jvUx7">
                        Share Yours/ Contact Us
                    </a>
                </button>
                <div class="flex items-center mt-4 md:mt-6 gap-6">
                    <p class="font-bold">🔗 Bridging the Gap</p>
                    <p class="font-bold">😎 Community Contribution</p>
                    <p class="font-bold">🚀 Innovation Hub</p>
                </div>
            </section>

            <section class=" md:w-1/3">
                <img src="<?php echo e(asset('img/map.png')); ?>" alt="bdMap">
            </section>
        </div>

        <section class="my-10">
            <div class="md:grid grid-cols-3  gap-8">

                <div class="sm:col-span-3 md:col-span-2 my-5 md:my-0 bg-blue-100 rounded p-2 w-auto h-full"
                    id="regions_div"></div>


                <script>
                    google.charts.load('current', {
                        packages: ['geochart']
                    });
                    google.charts.setOnLoadCallback(drawRegionsMap);

                    function drawRegionsMap() {
                        // Prepare data for Google Charts
                        var data = google.visualization.arrayToDataTable([
                            ['Country', '#tags'],
                            <?php $__currentLoopData = $countryData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                ['<?php echo e($item[0]); ?>', <?php echo e($item[1]); ?>],
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        ]);

                        var options = {
                            width: '100%', // Ensure chart width is 100%
                            height: '100%' // Ensure chart height is 100%
                        };

                        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

                        chart.draw(data, options);

                        // Redraw chart on window resize
                        window.addEventListener('resize', function() {
                            chart.draw(data, options);
                        });
                    }
                </script>

                <div class="md:col-span-1 my-5 md:my-0 md:block grid grid-cols-2 ">
                    <div class="px-4 m-5 md:m-0 py-10 rounded text-center" style="background-color: #eaeaf6;">
                        <h1 class="text-6xl font-bold"><?php echo e($humanAll->count()); ?> </h1>
                        <p class="text-Xl font-bold">Total #Hashtags</p>
                    </div>
                    <div class="px-4 m-5 md:m-0 py-10 rounded md:mt-4 text-center" style="background-color: #EAF6F2;">
                        <h1 class="text-6xl font-bold"><?php echo e($humanAll->pluck('country')->filter()->unique()->count()); ?>

                        </h1>
                        <p class="text-Xl font-bold">Countries</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class=" container my-10 text-center mx-auto p-4">

        <h1 class="text-4xl font-bold">
            Experts who want to help </br> rebuild Bangladesh
        </h1>

    </div>


    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('search-people');

$__html = app('livewire')->mount($__name, $__params, 'lw-3754868424-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    

    <footer class="bg-blue-100 p-4 mt-8">
        <div class="container mx-auto">
            <p class="text-center">&copy; #reversebraindrainbd 2024</p>
        </div>
    </footer>
</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/final codes/ReverseBrainDrain.com/resources/views/home.blade.php ENDPATH**/ ?>