<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>{{config('app.name', 'Laravel')}}</title>
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        @stack('inline-css')
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body class="antialiased font-sans bg-gray-200">
            {{$slot}}
        @stack('inline-js')
    </body>
</html>
