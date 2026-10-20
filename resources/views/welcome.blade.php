<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Catalogo A</title>
</head>
<body>
    <x-header />
    <div class="main-slide">
        <h3>Catálogo de Productos</h3>
    </div>
    <div class="slide">
        <h2>Holaa</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, qui iste rerum atque, ratione harum laboriosam cumque modi, itaque perspiciatis cupiditate in temporibus saepe aperiam unde autem sint eveniet numquam!</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi quis eum nisi incidunt minima! Alias?
        </p>
    </div>
    <div class="info">
        <div class="texto">
            <H3>Texto Aqui</H3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam quo asperiores atque, quod iure consectetur ratione eligendi cum libero possimus quam natus culpa quasi accusantium eaque nisi facere repudiandae architecto deleniti consequuntur numquam cumque ipsa exercitationem! Officiis illum ipsum consequuntur!</p>
        </div>
        <div class="img-lat">
            <img src="{{ asset('img/pulsera.webp') }}" alt="Pulsera">
        </div>
    </div>
    <div class="discount">
        <div class="recursos">
            <img src="{{asset('img/tw.webp')}}" alt="Logo 1">
            <h4>Texto 1</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, mollitia. Aut iste eveniet nobis modi.</p>
        </div>
        <div class="recursos">
            <img src="{{asset('img/ist.png')}}" alt="Logo 2">
            <h4>Texto 1</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta corrupti at fuga modi nulla quaerat corporis eveniet eos. Quod dolor aspernatur cumque sed!</p>
        </div>
        <div class="recursos">
            <img src="{{asset('img/face.webp')}}" alt="Logo 3">
            <h4>Texto 1</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum ex saepe quam!</p>
        </div>
    </div>
    <x-footer/>
</body>
</html>
