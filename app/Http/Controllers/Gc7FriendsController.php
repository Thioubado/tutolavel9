<?php
namespace App\Http\Controllers;

use App\Http\Tools\Gc7;
use App\Models\Gc7Friend;

class Gc7FriendsController extends Controller {
	public function list() {
		// Gc7::aff($friends);
		$data = Gc7Friend::all();

		return view('gc7pages.friends', ['data' => $data]);
	}
}
