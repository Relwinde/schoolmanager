<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PupilsController extends Controller
{
    public function createPupil  () {
         
   $pupil = User::Create([
       'firstName'=>request()->firstName,
       'lastName'=>request()->lastName,
       'email'=>request()->email,
       'role'=>'pupil',
   ]);
   $pupil->verificationCode= sha1(time());
   $pupil->class = Auth::user()->class;
   $pupil->save();
   $data = [
       'firstName'=>$pupil->fristName,
       'lastName'=>$pupil->lastName,
       'verificationCode'=>$pupil->verificationCode,
   ];

   //Mail::to($prof->email)->send(new ActivationMail($data));
    
   return redirect()->route('home');

    }
}
