<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// call the model

use App\Models\user;

class UsersWithModel extends Controller
{
    //

   public function getData()
   {
        return User::all(); //user peut aussi etre en minuscule
   }
}
