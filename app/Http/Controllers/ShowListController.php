<?php

namespace App\Http\Controllers;

// call the model
use App\Models\Membre;
use Illuminate\Http\Request;

class ShowListController extends Controller
{
    //
    public function getdata()
    {
        $data = Membre::orderBy('pseudo')->get();
        return view('pages.show', ['membres' => $data]);
    }
}
