## Curso de PHP Framework Laravel

# Canal Node Studio Treinamento
Lista de Aulas
01 - Curso de Laravel - #01 Introdução e Ambiente PHP
    https://www.youtube.com/watch?v=SnOlhaJTMTA&list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb&index=1&pp=iAQB

02 - Curso de Laravel - #02 Sobre o Laragon
    https://www.youtube.com/watch?v=iHlbDtHDAYM&list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb&index=2

03 - Curso de Laravel - #03 Instalando o PHP8 no Laragon
    https://www.youtube.com/watch?v=XbgzvUL14mY&list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb&index=3

04 - Curso de Laravel - #04 Instalação, Composer e Virtual Host (Laragon)
    https://www.youtube.com/watch?v=HFnn0DXQgWA&list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb&index=4

05 - Curso de Laravel - #05 Estrutura de Pastas
    https://www.youtube.com/watch?v=QU9ygaoz5jQ&list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb&index=5

06 - Curso de Laravel - #06 PHP Artisan
    https://www.youtube.com/watch?v=3HKsp5cjqus&list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb&index=6

    Iniciando servidor usando artisan
    $ php artisan serve
    
    Mudando porta do servidor
    $ php artisan serve --port=8001


07 - Curso de Laravel - #07 MVC
    https://www.youtube.com/watch?v=7aObw53oKls&list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb&index=7

    MODEL 

    VIEW

    CONTROLLER

08 - Curso de Laravel - #08 Introdução as Rotas
    https://www.youtube.com/watch?v=RPUmwrlxUw0&list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb&index=8

09 - Curso de Laravel - #09 Rotas Any e Match
    https://www.youtube.com/watch?v=A9UE58vxqNg&list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb&index=9

    Route::get('/company', function() {
        return view('site/company');
    }); 

    Route::any('/any', function() {
        return "Permite todo tipo de acesso http (GET, POST, PUT, DELETE)";
    });

    /**
     * [Pode ser utilizado para alguma forma de segurança ou forçar sua utilização de modo correto]
     */
    Route::match(['put', 'delete'], '/match', function() {
        return "Permite apenas acessos definidos";
    });

10 - Curso de Laravel - #10 Passagem de Parâmetros
    https://www.youtube.com/watch?v=-AzmobPrYpo&list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb&index=10

11 - Curso de Laravel - #11 Redirect e View
    https://www.youtube.com/watch?v=BMjsvHfz-ZE&list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb&index=11

12 - 









<!-- LARAVEL README -->

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
