<?php

namespace App\Http\Controllers;

use App\Models\User;

//call database
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller

{
    //
    public function index()
    {
        $users = User::all();
        return view('pages.user', compact('users'));
    }
}
