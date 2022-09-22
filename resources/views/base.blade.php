<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title',config('app.name'))</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
        

    </head>
    <body class="antialiased flex flex-col justify-between min-h-screen items-center py-6" >
        <main role="main" class="flex flex-col justify-center items-center" >
            @yield('content')
        </main>

        <footer>
            <p class="text-gray-400">
                &copy; Copyright {{ date('Y') }} &middot; 
                @if(! Route::is('about'))
                    <a href="{{route('about')}}" class="text-indigo-400 hover:text-indigo-600 underline">About us</a>
                @endif
            </p>
        </footer>
    </body>
</html>
