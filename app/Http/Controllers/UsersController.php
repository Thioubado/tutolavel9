<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//call database
use Illuminate\Support\Facades\DB;

class UsersController extends Controller

{
    //
    public function index()
    {
        return DB::SELECT("select * from users");
    }
}
