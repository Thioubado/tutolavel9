<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionWithLoginController extends Controller
{
    //
    public function userLoginSession(Request $req)
    {
        $data = $req -> input();
        $req -> session()->put('first_name', $data['first_name']);
        return redirect('profilesession');
    }
}
