<?php
namespace App\Http\Controllers;

class TestController extends Controller {
	public function test() {
		$data = 123;

		return view('pages.test', ['data' => $data]);
	}
}
