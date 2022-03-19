<?php function activeMenu($url)
{
    return request()->is($url) ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/mdbootstrap-4.20/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mdbootstrap-4.20/css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mdbootstrap-4.20/css/style.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @yield('css')

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

</head>

<body>
    <div id="app">
        <!--Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light blue-grey lighten-5 fixed-top" id="navbar-example">
            <a class="navbar-brand" href="/">
                <img src="{{ '/img/logo2.png' }}" height="45" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><h6>ABC CASAS PREFABRICADAS</h6></li>
                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons smooth-scroll">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    @if (isset($projects))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Proyectos
                            </a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                                @foreach ($projects as $item)
                                    @if (count($item->galleries) > 0)
                                        <a class="dropdown-item" href="/project/{{$item->id}}">{{$item->name_project}}</a>
                                    @endif
                                @endforeach
                            </div>
                        </li>
                    @endif
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">Administrador</a>
                        </li>
                    @endauth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-default"
                            aria-labelledby="navbarDropdownMenuLink-333">
                            @guest
                                <a class="dropdown-item" href="{{ route('login') }}">Iniciar sesión</a>
                            @endguest
                            @auth
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            @endauth
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--/.Navbar -->
        <br>
        <br>
        <br>
        @yield('content')

        @include('layouts.modals.change_password')

        @include('layouts.footer')
    </div>
    <script type="text/javascript" src="{{ asset('assets/mdbootstrap-4.20/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mdbootstrap-4.20/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mdbootstrap-4.20/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/mdbootstrap-4.20/js/mdb.min.js') }}"></script>
    @yield('js')
</body>

</html>
