<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Larapus

## Tahap Perancangan Database

    - php artisan make:migration create_authors_table
    - php artisan make:migration create_books_table
    - php artisan make:migration create_borrow_history_table --create=borrow_history
    -php artisan migrate
     note: jika terjadi error pada saat migrate, file yang error di migrate belakangan

## Install laravel permision dari spatie

    - https://github.com/spatie/laravel-permission
        https://docs.spatie.be/laravel-permission/v3/installation-laravel/
        : composer require spatie/laravel-permission

    - lalu publish dengan code berikut pada terminal:
        php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

        untuk publish confignya:
        php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"

## using middleware laravel dari spatie

        https://docs.spatie.be/laravel-permission/v3/basic-usage/middleware/
        tempel kode dibawah ini ke  folder Http/Kernel.php dan paste kode di bawah verified

         'role' => \Spatie\Permission\Middlewares\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middlewares\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middlewares\RoleOrPermissionMiddleware::class,
