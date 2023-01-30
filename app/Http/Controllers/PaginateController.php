<?php

namespace App\Http\Controllers;

use App\Models\member;

// call the model
use App\Models\Membre;
use Illuminate\Http\Request;

class PaginateController extends Controller
{
    //
    public function pages()
    {
        $data = Membre::paginate(3);
        return view('pages.paginate', ['members' => $data]);
    }
}
