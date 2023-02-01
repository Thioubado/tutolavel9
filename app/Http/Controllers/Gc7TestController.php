<?php
namespace App\Http\Controllers;

use App\Http\Tools\Gc7;
use Barryvdh\Debugbar\Facades\Debugbar as DebugbarGc7;
use App\Models\Membre;

class Gc7TestController extends Controller {
	public function test() {
		function modulo(){
			$a % 2 == 0;
		}
		$data =Membre::all('id');
		if($data % 2 == 0){
			return ok;
		}
		// $data =Membre::array_map(modulo)->orderBy('pseudo')->get('id');
		// if($data['id'] % 2 == 0){
		// 	Gc7::aff('ok');
		// }
		// //$dat = $data['id'];
		return $data;

		// $arr = range(1, 10);

		// Gc7::aff($arr);

		// foreach ($arr as $n) {
		// 	echo (!($n&1)) ? $n : '<br>';
		// }

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
