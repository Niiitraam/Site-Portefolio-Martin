<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Martin Manderveld</title>

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
        

        <div class="loader d-flex flex-column">
            <div class="reveal-1">
                <span class="lettre">C</span>
                <span class="lettre">L</span>
                <span class="lettre">I</span>
                <span class="lettre">C</span>
                <span class="lettre">K</span>
            </div>
            
            <div class="reveal-2">
                <span class="lettre">F</span>
                <span class="lettre">O</span>
                <span class="lettre">R</span>
            </div>
            
            <div class="reveal-3">
                <span class="lettre">E</span>
                <span class="lettre">N</span>
                <span class="lettre">T</span>
                <span class="lettre">E</span>
                <span class="lettre">R</span>
            </div>
           
        </div>
       
        <div class="scrollbar"></div>
        <div class="clickScrollbar"></div>
        <div class="accueil d-none">
            @include('partial.bloc-presentation')
            @include('partial.presentation')
            @include('partial.parcours')
            @include('partial.portfolio')
            @include('partial.contact')
            @include('partial.footer')
        </div>
        
      


        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset("js/app.js")}}"></script>
    </body>
</html>
