## Curso de PHP Framework Laravel


# Canal Node Studio Treinamento

Lista de Aulas

# 01 - Introdução e Ambiente PHP (CONCLUIDO)

# 02 - Sobre o Laragon (CONCLUIDO)

# 03 - Instalando o PHP8 no Laragon (CONCLUIDO)

# 04 - Instalação, Composer e Virtual Host (Laragon) (CONCLUIDO)

# 05 - Estrutura de Pastas (CONCLUIDO)

    Configurações Iniciais importantes
    Iniserindo permissão da pasta Views evita erros futuros nas proximas aulas seguintes
    $ chmod -R 755 resources/views

# 06 - PHP Artisan (CONCLUIDO)

    Iniciando servidor usando artisan
    $ php artisan serve
    
    Mudando porta do servidor
    $ php artisan serve --port=8001

# 07 - MVC (CONCLUIDO)

    MODEL - VIEW - CONTROLLER

# 08 - Introdução as Rotas (CONCLUIDO)

# 09 - Rotas Any e Match (CONCLUIDO)

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

# 10 - Passagem de Parâmetros (CONCLUIDO)

# 11 - Redirect e View (CONCLUIDO)

# 12 - Rotas nomeadas (CONCLUIDO)

# 13 - Grupo de Rotas (CONCLUIDO)

# 14 - Controllers (CONCLUIDO)

    $ php artisan make:controller ProdutoController

# 15 - Passando Parâmetros Para o Controller (CONCLUIDO)


# 16 - Resource (CONCLUIDO)

    $ php artisan make:controller ProdutoController --resource

    <!-- Mostra uma lista com todas rotas -->
    $ php artisan route:list

# 17 - Route list, cache e clear (CONCLUIDO)

    <!-- Mostra uma lista com todas rotas -->
    $ php artisan route:list

    <!-- Cria um cache para todas as toras para melhorar a resposta do request da rata -->
    $ php artisan route:cache

    <!-- Mostra uma lista com todas rotas -->
    $ php artisan route:clear

# 18 - Configurando o Banco de Dados (CONCLUIDO)

# 19 - Entendendo os Migrations (CONCLUIDO)

    <!-- Executa os migrates que existem na pasta de migraations -->
    $ php artisan migrate

    <!-- Executa um retorno para o ultimo migrations executado -->
    $ php artisan migrate:rollback

    <!-- Mostra o status das migrations -->
    $ php artisan migrate:status

# 20 - Criando os Migrations (CONCLUIDO)

    <!-- script para criar uma migrations -->
    <!-- Cria coluna produtos na tabela -->
    $ php artisan make:migration create_produtos_table
    $ php artisan make:migration products --create="nome da tabela"

# 21 - Editando e Excluindo tabelas (CONCLUIDO)

    <!-- alterar nome de uma tabela -->
    Schema::rename('produtos', 'produto');

    <!-- Excluir uma Tabela -->
    Schema::dropIfExists('produtos');

# 22 - Reset, Refresh e Fresh (CONCLUIDO)

    <!-- Executando o reset ele apaga todas migrations do banco de dados -->
    < OBS > nunca faça isso em produção á não ser que saiba exatamente o que esta fazendo
    $ php artisan migrate:reset

    <!-- Executa o Reset e faz o Refresh de todas migrations do banco de dados -->
    $ php artisan migrate:refresh
    
    <!-- Executa o fresh ele é o mais hard core exclui todas tabelas e executa o reset -->
    $ php artisan migrate:fresh

# 23 - Modificando Colunas (CONCLUIDO)

    Existe um pré requisito para executar esta tarefa de modificação de tabelas utilizando o composer

    $ composer require doctrine/dbal

# 24 - Entendendo os Models (CONCLUIDO)

    <!-- Criando Model -->
    $ php artisan make:model Produto

    <OBS> ORM = Object Relacional Model

    Exemplo: $produtos = Product::all();

# 25 - Criando tabelas Users, Categorias e Produtos (CONCLUIDO)

    <!-- Criando model and migration -->
    $ php artisan make:model category --migration

    <!-- Criando model and migration  com controller e opção resource -->
    php artisan make:model Category --migration --controller --resource

    <!-- Criando model and migration  com controller e opção resource simplificado-->
    php artisan make:model Category -m -cr
    OU
    php artisan make:model Category -mcr
    
    php artisan migrate:fresh

# 26 - Seeder (CONCLUIDO)

    <!-- Criando Seeder para agilizar no processo de popular a tabela do banco de dados -->
    $ php artisan make:seeder  UsersSeeder

    <!-- Para executar o seeder -->
    $ php artisan db:seed

# 27 - Factory (CONCLUIDO)

    <!-- Criando Factory para automatizar a criação de categorias -->
    $ php artisan make:factory CategoryFactory

# 28 - mfscr (CONCLUIDO)

    <!-- Utilizando metodos simplificados de criar as estruturas -->
    $ php artisan make:teste --migration --factory --seed --controller --resource
    OU
    $ php artisan make:teste -m -f -s -cr
    OU
    $ php artisan make:teste -mfscr

# 29 - Factory Produtos e StrSlug (CONCLUIDO)

# 30 - Relacionamentos (CONCLUIDO)

# 31 - Introdução as views (CONCLUIDO)

# 32 - Section, Yield e Extends (CONCLUIDO)

# 33 - Laravel Snippers (CONCLUIDO)

# 34 - Comentários e Operador Ternário (CONCLUIDO)

# 35 - Customizando views de erro (CONCLUIDO)

# 36 - Estruturas de controle (CONCLUIDO)

# 37 - Estruturas de repetição (CONCLUIDO)

# 38 - Include e Component (CONCLUIDO)

# 39 - Stacks e Push (CONCLUIDO)

    Materialize https://materializecss.com/
    
    A modern responsive front-end framework based on Material Design

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
# 40 - Viewcache e Viewclear (CONCLUIDO)

    <!-- Coloca todas views em cache -->
    $php artisan view:cache
    
    <!-- Limpa todas views da cache -->
    $php artisan view:clear

# 41 - Implementando Materialize CSS and ICON (CONCLUIDO)

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled ICON -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

# 42 - Listagem de produtos na home (CONCLUIDO)

# 43 - Paginação de Resultados (CONCLUIDO)

    OBS: Professor não disponibilizou o codigo utilizado na paginação

# 44 - Criando o SiteController (CONCLUIDO)

    OBS: Nesta aula encontrei um erro complicado, no erro ele não deixava alterar a rota da view
    forçando usar welcome.blade.php. ao invez de usar view/site/home.blade.php

    Limpe o Cache das Views
    Às vezes, o Laravel pode armazenar em cache informações sobre views e rotas. Para garantir que isso não está causando o problema, você pode limpar o cache das views e das rotas:

    Corrigido efetuando a limpeza de cache
    $ php artisan cache:clear    
    $ php artisan view:clear
    $ php artisan route:clear

    As permissões da pasta resources/views e seus arquivos devem permitir leitura pelo servidor web. No Linux, você pode ajustar as permissões usando:
    Adicionando permissão de edição a pasta View
    $ chmod -R 755 resources/views

    Certifique-se de que a rota está corretamente configurada e não há nenhum conflito. O seu arquivo web.php deve estar configurado corretamente:
    Route::get('/', [SiteController::class, 'index'])->name('site.index');

# 45 - Listagem de único produto (CONCLUIDO)
 
# 46 - OneToMany Inverse / belongsTo (CONCLUIDO)
    
# 47 - Categorias dinâmicas com viewShare (CONCLUIDO)

    OBS: Script correto, no site esta faltando declarar a variavel "options"
    <script>
        // Modo 001
            // document.addEventListener('DOMContentLoaded', function() {
            //     var elems = document.querySelectorAll('.dropdown-trigger');

            //     // Definindo a variável options
            //     var options = {
            //         // Adicione as opções desejadas aqui
            //         // Por exemplo: alignment: 'right', coverTrigger: false, etc.
            //         alignment: 'left',  // Exemplo de opção
            //         coverTrigger: false // Outro exemplo de opção
            //     };
            //     var instances = M.Dropdown.init(elems, options);
            // });

        // Modo 02 (Disponibilizado por outro estudante)
            var elemDrop = document.querySelectorAll('.dropdown-trigger');
            var instanceDrop = M.Dropdown.init(elemDrop, {
                    coverTrigger:false,
                    constrainWidth:false 
            });
    </script>
   
# 48 - Listar produtos de uma categoria (CONCLUIDO)
    
# 49 - Mostrar nome da categoria e preço numberFormat (CONCLUIDO)
    
# 50 - Carrinho de compras com darryldecode/cart (CONCLUIDO)
    https://github.com/darryldecode/laravelshoppingcart

    INSTALLATION
    Install the package through Composer.

    $ php composer require darryldecode/cart

    CONFIGURATION
        Open config/app.php and add this line to your Service Providers Array.
            Darryldecode\Cart\CartServiceProvider::class
        Open config/app.php and add this line to your Aliases
            'Cart' => Darryldecode\Cart\Facades\CartFacade::class
        Optional configuration file (useful if you plan to have full control)
            php artisan vendor:publish --provider="Darryldecode\Cart\CartServiceProvider" --tag="config"

# 51 - Adicionando itens no carrinho (CONCLUIDO)

# 52 - Estilizando carrinho e exibindo itens (CONCLUIDO)

# 53 - RedirectWith (CONCLUIDO)

# 54 - Removendo itens do carrinho (CONCLUIDO)

# 55 - Atualizando itens do carrinho (CONCLUIDO)

# 56 - Limpando carrinho (CONCLUIDO)

# 57 - Ajustes finais no carrinho de compras (CONCLUIDO)

# 58 - Autenticação simples ()

    $ php artisan make:controller LoginController

# 59 - Validações (CONCLUIDO)
    OBS: Nesta aula foi necessario excluir o usuario e executar o seeder novamente
    $ php artisan db:seed

# 60 - Redirecionando para o dashboard (CONCLUIDO)

# 61 - Exibindo dados do usuário logado (CONCLUIDO)

# 62 - Logout ()











# 63 - ()
# 64 - ()
# 65 - ()
# 66 - ()
# 67 - ()
# 68 - ()
# 69 - ()

# 70 - ()
# 71 - ()
# 72 - ()
# 73 - ()
# 74 - ()
# 75 - ()
# 76 - ()
# 77 - ()
# 78 - ()
# 79 - ()

# 80 - ()
# 81 - ()
# 82 - ()
# 83 - ()
# 84 - ()
# 85 - ()
# 86 - ()
# 87 - ()
# 88 - ()
# 89 - ()

# 90 - ()
# 91 - ()
# 92 - ()
# 93 - ()
# 94 - ()
# 95 - ()
# 96 - ()
# 97 - ()
# 98 - ()
# 99 - ()
    








## Lista todos comandos artisan
$ php artisan
Laravel Framework 8.83.27

Usage:
  command [options] [arguments]

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
      --env[=ENV]       The environment the command should run under
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  clear-compiled         Remove the compiled class file
  completion             Dump the shell completion script
  db                     Start a new database CLI session
  down                   Put the application into maintenance / demo mode
  env                    Display the current framework environment
  help                   Display help for a command
  inspire                Display an inspiring quote
  list                   List commands
  migrate                Run the database migrations
  optimize               Cache the framework bootstrap files
  serve                  Serve the application on the PHP development server
  test                   Run the application tests
  tinker                 Interact with your application
  up                     Bring the application out of maintenance mode
 auth
  auth:clear-resets      Flush expired password reset tokens
 cache
  cache:clear            Flush the application cache
  cache:forget           Remove an item from the cache
  cache:table            Create a migration for the cache database table
 config
  config:cache           Create a cache file for faster configuration loading
  config:clear           Remove the configuration cache file
 db
  db:seed                Seed the database with records
  db:wipe                Drop all tables, views, and types
 event
  event:cache            Discover and cache the application's events and listeners
  event:clear            Clear all cached events and listeners
  event:generate         Generate the missing events and listeners based on registration
  event:list             List the application's events and listeners
 key
  key:generate           Set the application key
 make
  make:cast              Create a new custom Eloquent cast class
  make:channel           Create a new channel class
  make:command           Create a new Artisan command
  make:component         Create a new view component class
  make:controller        Create a new controller class
  make:event             Create a new event class
  make:exception         Create a new custom exception class
  make:factory           Create a new model factory
  make:job               Create a new job class
  make:listener          Create a new event listener class
  make:mail              Create a new email class
  make:middleware        Create a new middleware class
  make:migration         Create a new migration file
  make:model             Create a new Eloquent model class
  make:notification      Create a new notification class
  make:observer          Create a new observer class
  make:policy            Create a new policy class
  make:provider          Create a new service provider class
  make:request           Create a new form request class
  make:resource          Create a new resource
  make:rule              Create a new validation rule
  make:seeder            Create a new seeder class
  make:test              Create a new test class
 migrate
  migrate:fresh          Drop all tables and re-run all migrations
  migrate:install        Create the migration repository
  migrate:refresh        Reset and re-run all migrations
  migrate:reset          Rollback all database migrations
  migrate:rollback       Rollback the last database migration
  migrate:status         Show the status of each migration
 model
  model:prune            Prune models that are no longer needed
 notifications
  notifications:table    Create a migration for the notifications table
 optimize
  optimize:clear         Remove the cached bootstrap files
 package
  package:discover       Rebuild the cached package manifest
 queue
  queue:batches-table    Create a migration for the batches database table
  queue:clear            Delete all of the jobs from the specified queue
  queue:failed           List all of the failed queue jobs
  queue:failed-table     Create a migration for the failed queue jobs database table
  queue:flush            Flush all of the failed queue jobs
  queue:forget           Delete a failed queue job
  queue:listen           Listen to a given queue
  queue:monitor          Monitor the size of the specified queues
  queue:prune-batches    Prune stale entries from the batches database
  queue:prune-failed     Prune stale entries from the failed jobs table
  queue:restart          Restart queue worker daemons after their current job
  queue:retry            Retry a failed queue job
  queue:retry-batch      Retry the failed jobs for a batch
  queue:table            Create a migration for the queue jobs database table
  queue:work             Start processing jobs on the queue as a daemon
 route
  route:cache            Create a route cache file for faster route registration
  route:clear            Remove the route cache file
  route:list             List all registered routes
 sail
  sail:install           Install Laravel Sail's default Docker Compose file
  sail:publish           Publish the Laravel Sail Docker files
 sanctum
  sanctum:prune-expired  Prune tokens expired for more than specified number of hours.
 schedule
  schedule:clear-cache   Delete the cached mutex files created by scheduler
  schedule:list          List the scheduled commands
  schedule:run           Run the scheduled commands
  schedule:test          Run a scheduled command
  schedule:work          Start the schedule worker
 schema
  schema:dump            Dump the given database schema
 session
  session:table          Create a migration for the session database table
 storage
  storage:link           Create the symbolic links configured for the application
 stub
  stub:publish           Publish all stubs that are available for customization
 vendor
  vendor:publish         Publish any publishable assets from vendor packages
 view
  view:cache             Compile all of the application's Blade templates
  view:clear             Clear all compiled view files


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
