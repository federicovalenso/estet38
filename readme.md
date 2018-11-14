<p align="center">
    <a href="https://packagist.org/packages/laravel/framework"><img src="http://estet.center/img/logo.png" alt="License"></a>
</p>

<h1>Сайт ООО "ЦЭМ"</h1>

## Установка
С помощью Laravel Envoy:
1. composer global require laravel/envoy
2. Создать файл Envoy.blade.php, скопировать в него содержимое Envoy.blade.php.example, поправить в файле пути, имя пользователя, сервер, группу.
3. envoy run deploy
4. На сервере на одном уровне с каталогом releases создать файл .env, скопировать в него содержимое .env.example, поправить данные подключения к БД и к Algolia.

## Лицензия

[MIT license](https://opensource.org/licenses/MIT).
