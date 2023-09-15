<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colmenas Inteligentes</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="shortcut icon"   href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
    @stack ('tabla_css')
    @stack ('tabla_script')
    <title>@yield('title')</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class=" bg-gradient-to-r from-gray-800 to-purple-300 font-sans leading-normal tracking-normal mt-12">
    <!--Se incluye la barra de navegacion -->
    <header >
        @include('base._navbar')
    </header>

    <main>
        <div class="flex flex-col md:flex-row ">
            @include('base._sidebar')

            <!--Pizzarron-->
            <div id="main" class=" main-content flex-1 bg-white mt-12 md:mt-2 pb-24 md:pb-5">

                <!--Encabezado de pizarron-->
               <div class="  pt-3 bg-orange-500">
                   <div
                       class="rounded-tl-3xl bg-gradient-to-r from-organge-300 to-orange-500 p-4 shadow text-2xl text-white">
                       <h1 class="font-bold pl-2">@yield('title')</h1>
                   </div>
               </div>
               <!--Fin Encabezado de pizarron-->

              @yield('content')
           </div>
           <!--Fin Pizzarron-->

        </div>
    </main>
    <footer>

    </footer>

</body>

<script>
    /*Toggle dropdown list*/
    function toggleDD(myDropMenu) {
        document.getElementById(myDropMenu).classList.toggle("invisible");
    }
    /*Filter dropdown options*/
    function filterDD(myDropMenu, myDropMenuSearch) {
        var input, filter, ul, li, a, i;
        input = document.getElementById(myDropMenuSearch);
        filter = input.value.toUpperCase();
        div = document.getElementById(myDropMenu);
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
            var dropdowns = document.getElementsByClassName("dropdownlist");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('invisible')) {
                    openDropdown.classList.add('invisible');
                }
            }
        }
    }
</script>


</html>

