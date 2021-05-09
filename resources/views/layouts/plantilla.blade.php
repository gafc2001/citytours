<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet"> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title> @yield('title') </title>
    <!--favicon -->
    <!--estilos -->
</head>
<body>
    
<!--header -->
<div class="menu">
        <!-- Espacio Logo -->
        <div class="logo-box">
            <a class="logo" href=""><img src="{{ asset('img/logo.png') }}"  alt="Logo-CityTours"></a>
        </div>
        <!-- Espacio menu -->
        <div class="list-container">
            <ul class="list">
                <li><a href="" class="activo">INICIO</a></li>
                <li><a href="" class="activo">DESTINOS</a>
                    
                </li>
                <li><a href="" class="activo">NOSOTROS</a></li>
                <li><a href="" class="activo">CONTACTO</a></li>
                <li><a href="" class="activo">USER</a></li>
            </ul>

        </div>
    </div>
<!--header -->
<script src="{{ asset('js/jQuery.js') }}"></script>
<script src="{{ asset('js/mian.js') }}"></script>

@yield('content')
<!--nav  -->
</body>
</html>