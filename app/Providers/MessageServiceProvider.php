<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Message;
class MessageServiceProvider extends ServiceProvider
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
    
        \App::bind('message'::class,function(){
            return new Message();
        });
    }
}
