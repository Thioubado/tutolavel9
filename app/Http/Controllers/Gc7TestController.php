<?php
namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facades\Debugbar as DebugbarGc7;

class Gc7TestController extends Controller {
	public function test() {
		$data = 'A data from Gc7TestController<br>See In messages in the Debugbar';

		DebugbarGc7::info('Info');
		DebugbarGc7::error('Error!');
		DebugbarGc7::warning('Watch out…');
		DebugBarGc7::addMessage($data);

		return view('gc7pages.test', ['data' => $data]);
	}
}
