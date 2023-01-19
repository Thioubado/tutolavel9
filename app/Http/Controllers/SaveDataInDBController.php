<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// call model in controller
use App\Models\user;

class SaveDataInDBController extends Controller
{
    //
    public function getData(Request $req)
    {
        $user = new user;
        $user -> id = $req -> id;
        $user -> nom = $req -> nom;
        $user -> prenom = $req -> prenom;
        $user -> email = $req -> email;
        $user -> adresse = $req ->adresse;
        $user -> save();

        return redirect('save');
    }
}
