<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

        {{-- Google Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
        

    </head>
    <body x-data="{ darkMode: false }" 
     x-bind:class="{'dark': darkMode === true}" 
     x-init="
       if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
         localStorage.setItem('darkMode', JSON.stringify(true));
       }
       darkMode = JSON.parse(localStorage.getItem('darkMode'));
       $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))
     " 
     x-cloak
     class="transition-colors duration-500 antialiased bg-white dark:bg-[#020617] text-gray-900 dark:text-gray-100">

    {{-- Fondo animado global detrás de todo --}}
    {{-- <div class="fixed inset-0 -z-10 bg-gradient-to-br from-black/50 to-gray-900/50 pointer-events-none"></div> --}}

    {{-- Contenido de la vista --}}
    <div>
        @yield('content')
    </div>
       
    </body>

</html>