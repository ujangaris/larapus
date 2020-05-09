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

## Install laravel debugbar

    composer require barryvdh/laravel-debugbar --dev

## Admin LTE

    untuk Admin LTE menggunakan versi 2

## Laravel ui Auth

    - composer require laravel/ui
    - php artisan ui bootstrap --auth

    - npm install && npm run dev

    - php artisan migrate

## Reset passwor menggunakan mail trap

    isikan pada file .env username dan password mailtrapnya contoh:
        Username:cc8137f676818a
        Password:4dbea91f13a49b
    lalu :
        APP_URL=http://larapus.test/ #jika menggunakan laragon
        APP_URL=http://localhost:8000 # jika menggunakan artisan serve saja

        MAIL_FROM_ADDRESS="admin@perpus.com"
        MAIL_FROM_NAME="${APP_NAME}"


    jika terjadi bug gunakan code dibawah ini:
        php artisan config:cache
        php artisan cache:clear

## Email veryfication dengan mail trap

    -

## Memberikan role untuk user

    - php artisan make:seeder RolesTableSeeder
    - php artisan db:seed

## Memberikan role untuk Admin

    - php artisan make:seeder AdminUserSeeder
    - php artisan db:seed --class=AdminUserSeeder

## Membuat halaman admin
    - php artisan make:controller Admin\\HomeController

## Membuat data author
    - membuat data dummy penulis 
        php artisan make:factory AuthorFactory --model=author

        php artisan make:model Author

        php artisan tinker
            factory(App\Author::class, 10)->create();

## Membuat data buku
    - menambah fild quantity pada buku
        php artisan make:migration add_qty_on_books_table --table=books
         yang diatas jgn lupa di migrate
    
    - membuat model book beserta faktorynya
        php artisan make:model Book -f

        https://picsum.photos/
        
        php artisan tinker
            factory(App\Book::class, 50)->create();

## Menyingkat generate data
    - buat seeder author
        php artisan make:seeder AuthorsTableSeeder
    - buat seeder Books
        php artisan make:seeder BooksTableSeeder

        selanjutnya:
    - buat kosong dataya dengan :
        php artisan migrate:fresh
    
    -untuk menghindari error dengan printah berikut:
        composer dump-autoload

        lalu jalan kan perintah berikut:
            php artisan migrate:fresh --seed

## Menyiapkan table data penulis
    https://github.com/yajra/laravel-datatables

    composer require yajra/laravel-datatables-oracle:"~9.0"

    - menyiapkan contoller:
        php artisan make:controller Admin\\AuthorController 
--resource    

## Implementasi Dengan Laravel DataTable 
     php artisan make:controller Admin\\DataController 

     -jika terjadi error lakukan langkah berikut:
        php artisan vendor:publish --tag=datatables --force 

        php artisan config:cache

## Membuat funsi edit penulis
    - sumber refrensi:
        https://yajrabox.com/docs/laravel-datatables/master/index-column
    - gunakan add collumn with closure :
        https://yajrabox.com/docs/laravel-datatables/master/add-column


## Membuat funsi hapus penulis
    - sumber refrensi:
        
        - gunakan add collumn with view :
            https://yajrabox.com/docs/laravel-datatables/master/add-colu

## Menambahkan user experience

    - menggunakan sweet alert:
        https://sweetalert2.github.io/#download

## Menambahkan Bootstrap notify
    - untuk linknya: 
        https://mdbootstrap.com/docs/jquery/javascript/notifications/
        atau 
        https://github.com/mouse0270/bootstrap-notify/blob/master/bootstrap-notify.min.js

## laravel-breadcrumbs
    https://github.com/davejamesmiller/laravel-breadcrumbs
       1. install package : composer require davejamesmiller/laravel-breadcrumbs:5.x
       2. Create a file called routes/breadcrumbs
       3. Choose a template :
            php artisan vendor:publish --tag=breadcrumbs-config

## Menampilkan data Books
    membuat controller books
        php artisan make:controller Admin\\BookCOntroller --resource

## Menangani aset gambar
    php artisan migrate:fresh --seed

    https://placeholder.com/
        So this URL… https://via.placeholder.com/728x90.png?text=No+Image
    - jika terjadi error gambar tidak tampil lakukan :
             php artisan cache:clear php artisan config:clear php artisan view:clear

## Menggunakan Materialize
    https://materializecss.com/getting-started.html
