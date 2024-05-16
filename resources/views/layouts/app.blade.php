<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        <title>dashboard charge clientele</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <script>
        function getLocation() {
    fetch('https://ipinfo.io/json')
        .then(response => response.json())
        .then(data => {
            console.log("IP Address: " + data.ip);
            console.log("Location: " + data.city + ", " + data.region + ", " + data.country);
            getDetailedAddress(data.loc);
            console.log("Coordinates: " + data.loc);
            console.log("Postal Code: " + data.postal);
            console.log("Timezone: " + data.timezone);
            console.log("Organization: " + data.org);
        })
        .catch(error => {
            console.error('Error fetching IP data:', error);
        });
}

function getDetailedAddress(loc) {
    const [latitude, longitude] = loc.split(',');
    fetch(`https://nominatim.openstreetmap.org/reverse?lat=${latitude}&lon=${longitude}&format=json`)
        .then(response => response.json())
        .then(data => {
            console.log("Detailed Address: " + data.display_name);
        })
        .catch(error => {
            console.error('Error fetching detailed address data:', error);
        });
}
    </script>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
