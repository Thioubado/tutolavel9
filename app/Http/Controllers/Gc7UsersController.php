<?php
namespace App\Http\Controllers;

use App\Models\User;

// call database

class Gc7UsersController extends Controller {
	public function index() {
		$users = (new User())->getRandom();

		return view('gc7pages.user', compact('users'));
	}
}
