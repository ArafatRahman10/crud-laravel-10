<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//Importation de la classe qui gère le problème de pagination avec Bootstrap
use Illuminate\pagination\paginator; 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //fonction qui permet de ressoudre le problème de pagination avec Bootstrap
        paginator :: useBootstrap();
    }
}
