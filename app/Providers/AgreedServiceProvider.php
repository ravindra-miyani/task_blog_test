<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\AgreedService;
class AgreedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    
        \App::bind('agreed'::class,function(){
            return new AgreedService();
        });
    }
}
