<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato%3A400%2C700%7CPT+Serif%3A400%2C700%2C400italic%2C700italic">
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="The Beauty Salon">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body style="padding-top: 57px">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand"
            @if (!Request::is('/'))
                href="/"
            @endif
            >
                <img src="{{ asset('img/logo.png') }}" width="50" height="50" alt="Центр эстетической медицины">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Открыть меню навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            О центре
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Услуги</a>
                            <a class="dropdown-item" href="#">Специалисты</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Лицензия</a>
                            <a class="dropdown-item" href="#">Юридическая информация</a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Услуги
                        </a>
                        <ul class="dropdown-menu multi-level" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="#">Эстетика лица</a>
                            <a class="dropdown-item" href="#">Инъекционная косметология</a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Аппаратная косметология
                        </a>
                        <ul class="dropdown-menu multi-level" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="#">Palomar Starlux 500</a>
                            <a class="dropdown-item" href="#">Helios 2</a>
                            <a class="dropdown-item" href="#">Jeet Peel</a>
                            <a class="dropdown-item" href="#">Микторотокая терапия</a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Тело
                        </a>
                        <ul class="dropdown-menu multi-level" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="#">Антицеллюлитный массаж по испанской технологии</a>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Акции</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Пациентам</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Найти услугу" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                </form>
                <ul class="navbar-nav">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
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
        </nav>

        @if (Request::is('/'))
            @include('service.home')
        @endif
        <main>
            @yield('content')
        </main>
        <footer>
            <div class="parallax parallax-main wow fadeIn animated">
                    <div class="footer-text text-center py-5">
                        <h3 class="my-5 text-danger">Это ещё не всё!</h3>
                        <h4 class="my-5 text-warning">Наши странички в соц. сетях:</h4>
                        <div class="btn-group" role="group">
                            <a class="btn btn-danger my-4" href="https://www.instagram.com/esteticheskaiameditsina/">Instagram</a>
                        </div>
                    </div>
            </div>
            <div class="map wow slideInUp animated">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2291.682790678493!2d103.8428225589307!3d52.516184079199114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc530e37323fb2f77!2z0KbQtdC90YLRgCDRjdGB0YLQtdGC0LjRh9C10YHQutC-0Lkg0LzQtdC00LjRhtC40L3Riw!5e0!3m2!1sru!2sru!4v1540359294158" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </footer>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>

