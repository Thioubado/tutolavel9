<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    //
    public function index($user){
        echo $user."<br>";
        echo "<br>";
        echo "Hello from controller";
    }
}
