<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="{{ str_replace('_', '-', app()->getLocale()) }}"/>

    <meta name="title" content="Energy Confort SAS">
    <meta name="description" content="Energy Confort SAS es una empresa vanguardista, dedicada a proveer servicios de tecnología de la información (TI), Energía renovable y Seguridad Perimetral">
    <meta name="Keywords" content="Sistemas, Diseño, Web, Pos, Seguridad, Perimetral, Panel, Solar, Energia, Renovable, Nomina, Contabilidad, Responsibe, Computadores, Mantenimiento, Presupuestos, ERP, Facturación, Electronica, WordPress, PrestaShop, Laravel, Fotovoltaica, Camaras, Soluciones, Tecnologicas, Servicios, Innovador, "/>
    <meta property='og:title' content='Energy Confort SAS - Hacemos tus sueños realidad'>
    <meta property='og:type' content='website'>
    <meta property='og:url' content='{{ url('/') }}' >
    <meta property='og:image' content='{{ url('/images/social.png') }}'>
    <meta property="og:image:type" content="image/png" />
    <meta property='og:image:width' content='1200'>
    <meta property='og:image:height' content='680'>
    <meta property="og:image:alt" content="En Energy Confort SAS, Trabajamos para hacer tus proyectos una realidad." />
    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
    <meta property='og:site_name' content='Energy Confort SAS'>
    <meta name="Distribution" content="global"/>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="Energy Confort SAS">
    <meta property="og:description" content="Energy Confort SAS es una empresa vanguardista, dedicada a proveer servicios de tecnología de la información (TI), Energía renovable y Seguridad Perimetral">
    <meta property="og:image" content="{{ url('/images/social.png') }}">
    <meta property="fb:app_id" content="360326071299973" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="Energy Confort SAS">
    <meta property="twitter:description" content="Energy Confort SAS es una empresa vanguardista, dedicada a proveer servicios de tecnología de la información (TI), Energía renovable y Seguridad Perimetral">
    <meta property="twitter:image" content="{{ url('/images/social.png') }}">
    <meta name="twitter:site" content="@EnergyConfort_S">  
    {{-- <meta name='google-site-verification' content='YXAg19YOdBURdoVBEojwA9e_tTNnEC2VuRo5EhSlPhg'> --}}

    {{-- Icon --}}
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.ico') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
