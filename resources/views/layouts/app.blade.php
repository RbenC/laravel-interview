<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="HTML, CSS, JavaScript laravel routes PHP">
        <meta name="author" content="José Rubén Cerrada 2022">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title>Solucionesonline.demo @yield('titulo')</title>               
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    Academia <span class="block">Aprende a tocar </span>
                </h1>
                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-gray-600 text-sm" href="/aprende-a-tocar-guitarra">Guitarra </a>
                    <a class="font-bold uppercase text-gray-600 text-sm" href="/aprende-a-tocar-el-piano">Piano</a>
                </nav>  
            </div>       
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-left text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        
        </main>
        
    </body>
</html>
