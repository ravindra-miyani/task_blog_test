<?php 

namespace App\ServiceFacades;

use Illuminate\Support\Facades\Facade;

class Agreed extends Facade{
    public static function getFacadeAccessor(){
        return "agreed";
    }
}