<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// call the model
use App\Models\member;

class PaginateController extends Controller
{
    //
    public function pages()
    {
        $data = member::paginate(3);
        return view('pages.paginate', ['members' => $data]);
    }
}
