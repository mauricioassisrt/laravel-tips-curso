<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
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
        //altero e renomeio a rota padrão com nomes create e edit e altero para os nomes desejados
        Route::resourceVerbs([
            'create' => 'novo',
            'edit' => 'editar'
        ]);
    }
}
