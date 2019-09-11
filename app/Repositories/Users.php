<?php 

namespace App\Repositories;
use App\User;

class Users{
    protected $user;
    public function __construct(){
        $this->user = new User();
    }

    public function publish($post){
       return $this->user->publish($post);
    }

    public function add(){
        return $user = User::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'agreed'=>(request('agreed') !='')?request('agreed'):0,
            'password'=>bcrypt(request('password')),
         ])  ;
    }

}