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
		$data = [...Membre::pluck('id')];
		// $data = Membre::orderBy('id')->get('id');


		foreach ($data as $n) {
            while (0 == $n % 2) {
                echo $n++ . '<br>';
			}
		}
		++$n;

        Gc7::aff($data, '$data');

		// return view('pages.show', ['membres' => $data]);
	}
}
