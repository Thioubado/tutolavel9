<?php
namespace App\Http\Controllers;

use App\Models\Membre;

class Gc7TestController extends Controller {
	public function test() {
		$data   = range(1, 3);

		if (in_array(2, $data, true)) {
			$data = 'Match found<br>';
		}
        return view('gc7pages.test', ['data' => $data ?? []]);

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

		return view('gc7pages.test', ['data' => $data ?? []]);
	}
}
