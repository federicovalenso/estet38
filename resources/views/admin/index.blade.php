<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Центр эстетической медицины</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    </head>
    <body>
        <div class="wrapper">
            <ul class="nav flex-column nav-pills wow fadeInLeft" id="adminSidebar" aria-orientation="vertical">
                <div class="sidebar-header">
                    <img src="{{ asset('img/logo.png') }}" width="50" height="50" alt="Центр эстетической медицины">
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="/">Главная</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#productsSubmenu" role="button" aria-haspopup="true" aria-expanded="false">Услуги</a>
                    <div id="productsSubmenu" class="collapse">
                        <a class="dropdown-item" href="{{ route('productcategory.index') }}">Категории</a>
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('product.index') }}">Редактор услуг</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#articlesSubmenu" role="button" aria-haspopup="true" aria-expanded="false">Статьи</a>
                    <div id="articlesSubmenu" class="collapse">
                        <a class="dropdown-item" href="#">Категории</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Редактор статей</a>
                    </div>
                </li>
            </ul>
            <main id="content">
                <div>
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                @yield('content')
            </main>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
