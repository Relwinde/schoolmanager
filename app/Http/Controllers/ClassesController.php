<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classe;
use App\User;
use Illuminate\Support\Facades\Validator;

class ClassesController extends Controller
{
    public function createClass (){
    
       $prof = User::Create([
           'firstName'=>request()->firstName,
           'lastName'=>request()->lastName,
           'email'=>request()->email,
           'role'=>'instructor',
       ]);
       $prof->verificationCode= sha1(time());
       

        $classe = Classe::Create([
        'name'=> request()->className
         ]);

        $prof->class = $classe->id;
        $prof->save();

       $data = [
           'firstName'=>$prof->fristName,
           'lastName'=>$prof->lastName,
           'verificationCode'=>$prof->verificationCode,
       ];

       //Mail::to($prof->email)->send(new ActivationMail($data));
        
       return redirect()->route('home');
    }
}
