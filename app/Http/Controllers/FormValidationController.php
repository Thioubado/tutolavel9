<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidationController extends Controller
{
    //
    public function index(Request $req)
    {
        $req -> validate(
            [
                'username' => 'required',
                'name' => 'required',
                'email' => 'required'
            ]
        );
        return $req -> input();
    }
}
