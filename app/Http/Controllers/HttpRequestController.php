<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpRequestController extends Controller
{
    //
    public function index(Request $req)
    {
        return $req -> input();
    }
}
