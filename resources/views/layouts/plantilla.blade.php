<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/cascada.css')}}">
    <link rel="stylesheet" href="{{asset('css/kokoro.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet"> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <title> @yield('title') </title>






    <!--<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">-->
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
                <li><a href="" class="activo">INICIO</a>
                <li><a href="{{route('destinos.index')}}" class="activo">DESTINOS</a>
                    
                </li>
                 @isset(auth()->user()->is_admin)
                 @if (auth()->user()->is_admin)
                 <li><a href="{{route('admin.index')}}" class="activo">ADMIN </a></li>
                 @endif
                
                 @endisset
                <li><a href="" class="activo">NOSOTROS</a></li>
                <li><a href="" class="activo">CONTACTO</a></li>
                <li><a href="" class="activo">USER</a>
                <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a >
                                @auth
                                 {{auth()->user()->username}}
                                @endauth
                                </a>

                                <div class="" aria-labelledby="">
                                    <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </li>
            </ul>

        </div>
        
    </div>
    
<!--header -->
<!-- Scripts del Pagina Destinos -->



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Scripts del Pagina Destinos -->

<script src="{{ asset('js/jQuery.js') }}"></script>
<script src="{{ asset('js/mian.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>

@yield('content')
<!--nav  -->
</body>
</html>