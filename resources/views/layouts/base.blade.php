<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{page_title($pageTitle ?? null)}}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
        

    </head>
    <body class="antialiased flex flex-col justify-between min-h-screen items-center py-6" >
        <main role="main" class="flex flex-col justify-center items-center" >
            @yield('content')
        </main>

        @include('layouts.partials._footer')
        
    </body>
</html>
