<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// call the model
use App\Models\member;

class ShowListController extends Controller
{
    //
    public function getdata()
    {
        $data = member::all();
        return view('pages.show', ['members' => $data]);
    }
}
