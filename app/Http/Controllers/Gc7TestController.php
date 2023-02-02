<?php
namespace App\Http\Controllers;

class Gc7TestController extends Controller {
	public function test() {
		return view('gc7pages.test', ['data' => $data ?? []]);
	}
}
