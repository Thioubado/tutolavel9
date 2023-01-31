<?php
namespace App\Http\Controllers;

use App\Http\Tools\Gc7;
// call the model

use App\Models\User;

class UsersWithModel extends Controller {
	public function getData() {
		Gc7::aff(User::all());
	}
}
