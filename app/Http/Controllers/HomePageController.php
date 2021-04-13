<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classe;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function homeProvider (){
        // switch (Auth::user()->role)
        // {
        //     case 'admin':{
        //         view ('pages.admin-home');
        //         break;}
            
        //     case 'instructor':{
        //         $this->instructorHomeProvider();
        //         break;}
        // }

        if (Auth::user()->role=='admin'){

            return view ('pages.admin-home')->with(['classes'=> Classe::All()]);
        }

        if (Auth::user()->role=='instructor'){
            $classId = Auth::user()->class;
            session()->put('classId', $classId);
            $classe = Classe::find($classId);

            return view ('pages.instructor-home')->with(['classe'=>$classe->name]);
        }

    }

    private function adminHomeProvider (){
        return view ('pages.admin-home');

    }

    private function instructorHomeProvider (){

    }


}
