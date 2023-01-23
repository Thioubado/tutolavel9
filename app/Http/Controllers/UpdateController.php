<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// call the BDD
use App\Models\user;

class UpdateController extends Controller
{
    //
    public function editerData()
    {
        $data = user::all();
        return view('pages.edit', ["users" => $data]);
    }

    public function deleteForUpdate($id)
    {
        $data = user::find($id);
        $data -> delete();
        return redirect ('editer');
    }

    public function editforDB($id)
    {
       // return user::find($id);
        $data = user::find($id);
        return  view('pages.showEditPage',['users' => $data]);

    }

    public function showMeData(Request $req)
    {
        //return $req -> input();
        $data = user::find($req -> id);
        $data -> nom = $req ->nom;
        $data -> prenom = $req ->prenom;
        $data -> email = $req ->email;
        $data -> adresse = $req ->adresse;
        $data -> save();
        return redirect('edit');
    }
}
