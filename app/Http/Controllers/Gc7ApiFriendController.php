<?php
namespace App\Http\Controllers;

use App\Http\Tools\Gc7;
use App\Models\Gc7Friend;

class Gc7ApiFriendController extends Controller {
	public function friend($username = null) {

        // echo json_encode('grcote7');

        $data = Gc7Friend::where('username', $username)->first();
		// Gc7::aff($data);
		
		$data->country = strtolower($data->country);

		return view('gc7pages.friend', ['friend' => $data]);
	}
}
