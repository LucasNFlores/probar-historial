<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased overflow-hidden">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg ">
 <!-- Video del Fondo
    https://create.vista.com/es/videos/abeja/?page=2
https://cdn.create.vista.com/api/media/medium/314558378/stock-video-bee-close-bees-bee-hive-swarm-bees?token
-->
            <video class="-z-50 min-w-full min-h-full max-w-none" src=
"https://cdn.create.vista.com/api/media/small/398717534/stock-video-bees-defend-themselves-insects-other-colonies-alien-insects-penetrate-hive"
            autoplay="{true}" loop muted>

        </video>



            <div class="absolute z-0 w-full sm:max-w-md mt-6 px-6 py-4 bg-white bg-opacity-75 shadow-md overflow-hidden sm:rounded-lg">
                <div class="flex flex-col sm:justify-center items-center ">
                    <a href="/">
                        <x-application-logo class="z-0 w-20 h-20 fill-current text-gray-500" />
                    </a>
                </div>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
