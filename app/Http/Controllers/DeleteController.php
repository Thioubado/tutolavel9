<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// call the model
use App\Models\member;

class DeleteController extends Controller
{
    //
    public function montrerData()
    {
        $data = member::all();
        return view('pages.montrer',  ['members' => $data]);
    }
    
    public function supprimerData($id)
    {
        $data = member::find($id);
        $data -> delete();
        return redirect ('montrer');
    }
}
