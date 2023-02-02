<?php
namespace App\Http\Controllers;

class Gc7TestController extends Controller {
	public function test() {
		$data = [1, 2, 3];

		return view('gc7pages.test', ['data' => $data ?? []]);
	}
}
