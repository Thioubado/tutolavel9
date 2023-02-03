<?php
namespace App\Http\Controllers;

// call the model
use App\Http\Tools\Gc7;
use App\Models\Membre;

class ShowListController extends Controller {
	public function getdata() {
		$data = Membre::orderBy('pseudo')->get();

		// $data = Membre::pluck('id')->get();

		return view('pages.show', ['membres' => $data]);
	}

	public function pairs() {
		// $data = [...Membre::pluck('id')];
		// $data = Membre::orderBy('id')->get('id');
		 //$data = membre::where('id', '=', 4)->get();
		 $data = membre::all();

		if($data->id % 2 == 0)
		{
			$data = $membre;
		}
		
		//data=range(1,6);

		// foreach ($data->id as $n) {
        //     while (0 == $n % 2) {
        //         echo $n++ . '<br>';
		// 	}
		// }
		// ++$n;

    	//Gc7::aff($data, '$data');

		return view('pages.show', ['membres' => $data]);
	}
}
