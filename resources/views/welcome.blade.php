<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset("css/app.css")}}"/>
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        

        <style>
            body {
                font-family: 'Nunito';
            }
            
        </style>
    </head>
    <body class="antialiased img pb-5">
        <div class="cursor"></div>

        @include('partial.navbar')
        @include('partial.bloc-presentation')
        @include('partial.presentation')
        @include('partial.parcours')
        @include('partial.portfolio')
        @include('partial.contact')
        @include('partial.footer')


        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset("js/app.js")}}"></script>
    </body>
</html>
