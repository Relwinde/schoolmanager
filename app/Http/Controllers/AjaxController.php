<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function classCreationView () {
        return view('ajax.create-class') ;
    }

    public function pupilCreationView () {
        return view ('ajax.create-pupil') ;
    }
}
