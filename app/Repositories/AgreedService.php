<?php
namespace App\Repositories;
use App\User;


class AgreedService{

    public function checkAgree(){
       $user = User::find(auth()->id());
       if($user->agreed == 1){
           return true;
       }
       return false;
    }

}