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
        <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css') }}">
        

        <style>
            body {
                font-family: 'Nunito';
            }
            
        </style>
    </head>
    <body class="antialiased img pb-5">
        <div class="cursor"></div>
        <div class="cursor2"></div>
        

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


        <div class="ouverture" style="display: none">
            <div class="position-box-1">
            <p class="fermeture-modal">fermer</p>
            <img src="{{asset('image/photo-web-isabel.png')}}" class="image-1" alt="">
                <p class="text-box color-white" style="text-align: center;"><span class="color">Nom -></span> Isabel Gomez Interiors <br> <span class="color">Description du projet -></span>Blablabla<br> <span class="color">Durée -></span> 2 Mois<br><span class="color">Lien -></span><a href=" https://github.com/Niiitraam/isabel-gomez" style="text-decoration: none" class="a-lien-box" target="_blank"> https://github.com/Niiitraam/isabel-gomez</a></p>
            </div>
            <div class="position-box-3">
                <p class="fermeture-modal-2">fermer</p>
                <img src="{{asset('image/photo-web-thelabs.png')}}" class="image-1" alt="">
                    <p class="text-box color-white" style="text-align: center;"><span class="color">Nom -></span> The Labs <br> <span class="color">Description du projet -></span>Blablabla<br> <span class="color">Durée -></span> 1 Mois<br><span class="color">Lien -></span><a href="https://github.com/Niiitraam/thelabs_coding13_martin" style="text-decoration: none" class="a-lien-box" target="_blank"> https://github.com/Niiitraam/thelabs_coding13_martin</a></p>
            </div>
            <div class="position-box-2">
                <p class="fermeture-modal-1">fermer</p>
                <img src="{{asset('image/photo-web-martin.png')}}" class="image-1" alt="">
                    <p class="text-box color-white" style="text-align: center;"><span class="color">Nom -></span> Martin Manderveld <br> <span class="color">Description du projet -></span>Blablabla<br> <span class="color">Durée -></span> 1 Mois<br><span class="color">Lien -></span><a href="https://github.com/Niiitraam/Site-Portefolio-Martin" style="text-decoration: none" class="a-lien-box" target="_blank"> https://github.com/Niiitraam/Site-Portefolio-Martin</a></p>
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
