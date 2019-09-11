<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        view()->composer('includes.sidebar',function($view){
                $view->with('archieve',\App\Post::archieve());
        });
    }

    /**
     * Register any application services.
     *  
     * @return void
     */
    public function register()
    {
        //
    }
}
