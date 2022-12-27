<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view extends Controller
{
    //
    function loadView($name){
        return view("view", ['name'=>$name]);
    }
}
