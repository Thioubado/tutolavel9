<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class UsesrHttpController extends Controller
{
    //
    public function index()
    {
        $collection = Http::get('https://reqres.in/api/users?page=2');
        return view('usershttp', ['collection'=>$collection['data']]);
    }
}
