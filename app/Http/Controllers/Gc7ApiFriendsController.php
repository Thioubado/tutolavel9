<?php
namespace App\Http\Controllers;

use App\Http\Tools\Gc7;
use App\Models\Gc7Friend;

class Gc7ApiFriendsController extends Controller {
	public function friend($id = null) {



        $data = Gc7Friend::where('username', $id)->first();
		Gc7::aff($data);

		return view('gc7pages.friend', ['data' => $data]);
	}
}
