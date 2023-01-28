<?php
namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facade as DebugBar;
use App\Http\Tools\Gc7;

class Gc7TestController extends Controller {
	public function test() {
		$data = 'A data from Gc7TestController';

        Debugbar::info('Info');
        Debugbar::error('Error!');
        Debugbar::warning('Watch out…');
        DebugBar::addMessage($data);

		return view('gc7pages.test', ['data'=>$data]);
	}
}
