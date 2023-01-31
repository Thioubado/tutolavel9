<?php
namespace App\Http\Controllers;

use App\Http\Tools\Gc7;
use Barryvdh\Debugbar\Facades\Debugbar as DebugbarGc7;

class Gc7TestController extends Controller {
	public function test() {
		$arr = range(1, 10);

		Gc7::aff($arr);

		foreach ($arr as $n) {
			echo (!($n&1)) ? $n : '<br>';
		}

		// Rien ne t'empêche de faire ce genre de tableau, pour ensuite test la valeur et n'afficher que les pairs ;-)...

		// Ici ton code pour ne filter dans ce tableau que les pairs

		$data = 'A data from Gc7TestController<br>See In messages in the Debugbar';

		DebugbarGc7::info('Info');
		DebugbarGc7::error('Error!');
		DebugbarGc7::warning('Watch out…');
		DebugBarGc7::addMessage($data);

		return view('gc7pages.test', ['data' => $data]);
	}
}
