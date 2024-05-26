<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categoryMenu = Category::all(); // Mostra todos resultados

        // inicia a view compartilhando o conteudo da variavel
        view()->share("categoryMenu", $categoryMenu); 
    }
}
