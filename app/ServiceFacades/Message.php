<?php 

namespace App\ServiceFacades;

use Illuminate\Support\Facades\Facade;

class Message extends Facade{
    public static function getFacadeAccessor(){
        return "message";
    }
}