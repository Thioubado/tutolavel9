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
        
        // $data = Membre::pluck('id')->get();
        
         return view('pages.show', ['membres' => $data]);


    }

    public function pairs()
	{
		$data = [... Membre::all()];
		//$data = Membre::orderBy('id')->get('id');
		foreach ($data as $n) {
			while ($n % 2 == 0) {
				echo $n++.'<br>';
			}
		}
		$n++;
        return view('pages.show', ['membres' => $data]);
	}

}


