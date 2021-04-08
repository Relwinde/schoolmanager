<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MainController extends Controller
{
    public function usersCheck (){
        if (User::all()->count()>0){
            return view('pages.login');
        }
        else {
            return view ('pages.register');
        }
    }
}
