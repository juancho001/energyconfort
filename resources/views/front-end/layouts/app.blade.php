<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="{{ str_replace('_', '-', app()->getLocale()) }}" />

    <meta name="title" content="Energy Confort SAS">
    <meta name="description"
        content="Energy Confort SAS es una empresa vanguardista, dedicada a proveer servicios de tecnología de la información (TI), Energía renovable y Seguridad Perimetral">
    <meta name="Keywords"
        content="Sistemas, Diseño, Web, Pos, Seguridad, Perimetral, Panel, Solar, Energia, Renovable, Nomina, Contabilidad, Responsibe, Computadores, Mantenimiento, Presupuestos, ERP, Facturación, Electronica, WordPress, PrestaShop, Laravel, Fotovoltaica, Camaras, Soluciones, Tecnologicas, Servicios, Innovador, " />
    <meta property='og:title' content='Energy Confort SAS - Hacemos tus sueños realidad'>
    <meta property='og:type' content='website'>
    <meta property='og:url' content='{{ url('/') }}'>
    <meta property='og:image' content='{{ url('/images/social.png') }}'>
    <meta property="og:image:type" content="image/png" />
    <meta property='og:image:width' content='1200'>
    <meta property='og:image:height' content='680'>
    <meta property="og:image:alt" content="En Energy Confort SAS, Trabajamos para hacer tus proyectos una realidad." />
    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
    <meta property='og:site_name' content='Energy Confort SAS'>
    <meta name="Distribution" content="global" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="Energy Confort SAS">
    <meta property="og:description"
        content="Energy Confort SAS es una empresa vanguardista, dedicada a proveer servicios de tecnología de la información (TI), Energía renovable y Seguridad Perimetral">
    <meta property="og:image" content="{{ url('/images/social.png') }}">
    <meta property="fb:app_id" content="360326071299973" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="Energy Confort SAS">
    <meta property="twitter:description"
        content="Energy Confort SAS es una empresa vanguardista, dedicada a proveer servicios de tecnología de la información (TI), Energía renovable y Seguridad Perimetral">
    <meta property="twitter:image" content="{{ url('/images/social.png') }}">
    <meta name="twitter:site" content="@EnergyConfort_S">
    {{--
    <meta name='google-site-verification' content='YXAg19YOdBURdoVBEojwA9e_tTNnEC2VuRo5EhSlPhg'>
    --}}

    {{-- Icon --}}
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.ico') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{--
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chocolat.css') }}" rel="stylesheet">
</head>

<body>

    <header class="bg-purple">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 my-auto">
                    <img class="logo-header mx-auto pt-3" src="{{ asset('/img/logo2.png') }}" alt="Energy Confort SAS">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 my-auto">
                    <div class="row justify-content-center">
                        <div class="col-12 my-1">
                            <div class="row justify-content-center">
                                <p class="text-white text-center m-0 p-0 lead col-sm-12 col-md-3 my-auto"><i class="fa fa-whatsapp"></i>
                                    +57 (300)-7699485</p>
                                <p class="text-white text-center m-0 p-0 lead col-sm-12 col-md-3 my-auto"><i class="fa fa-whatsapp"></i>
                                    +57 (305)-4124423</p>
                                <p class="text-white text-center m-0 p-0 lead col-sm-12 col-md-3 my-auto"><i class="fa fa-whatsapp"></i>
                                    +57 (031)-7777777</p>
                            </div>
                        </div>
                        <div class="col-12 my-auto">
                            <div class="row justify-content-center">
                                <p class="text-center social-size">
                                    <a href="https://www.facebook.com/EnergyConfortSAS" target="_blank"><i
                                            class="fa fa-facebook text-white"></i></a></p>

                                <p class="text-center social-size">
                                    <a href="https://twitter.com/EnergyConfort_S" target="_blank"><i
                                            class="fa fa-twitter text-white"></i></a></p>

                                <p class="text-center social-size">
                                    <a href="https://www.instagram.com/energy_confort/" target="_blank"><i
                                            class="fa fa-instagram text-white"></i></a></p>

                                <p class="text-center social-size">
                                    <a href="https://www.youtube.com/channel/UCqOriwpfesLIyBHgsL00oeA"
                                        target="_blank"><i class="fa fa-youtube text-white"></i></a></p>

                                <p class="text-center social-size"><a
                                        href="https://www.linkedin.com/in/energyconfortsas" target="_blank"><i
                                            class="fa fa-linkedin text-white"></i></a></p>

                                <p class="text-center social-size"><a
                                        href="https://www.linkedin.com/in/energyconfortsas" target="_blank"><i
                                            class="fa fa-blog text-white"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('front-end.layouts.navbar')
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
