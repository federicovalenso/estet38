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
                <form class="form-inline" method="GET" action="{{ route('search') }}">
                    <input name="query" class="form-control mr-sm-2" type="search" placeholder="Найти услугу" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                </form>
                <ul class="navbar-nav">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('auth.login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('auth.register') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('admin.index') }}">Панель управления</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('auth.logout') }}
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
            @include('service.home.top')
        @endif
        <main>
            @yield('content')
        </main>
        <footer>
            @if (Request::is('/'))
                @include('service.home.footer')
            @endif
        </footer>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>

