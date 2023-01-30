<?php

namespace App\Http\Controllers;

use App\Models\user;

// call the model

use App\Http\Tools\Gc7;
use Illuminate\Http\Request;

class UsersWithModel extends Controller
{
    //

   public function getData()
   {
        Gc7::aff(User::all());
   }
}
