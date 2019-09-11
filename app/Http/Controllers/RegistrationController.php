<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Registration;
use App\Repositories\Users; //Services
class RegistrationController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest',['except'=>'store']);
    }

    public function create(){
    	return view('registration.create');
    }

    public function store(Registration $request,Users $users)
    {
       
    
        $user = $users->add();
    	auth()->login($user);
        session()->flash('message','Welcome Abroad.');
    	return redirect('/');

    }


}
