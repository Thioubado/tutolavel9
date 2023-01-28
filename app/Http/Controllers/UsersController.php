<?php
namespace App\Http\Controllers;

use App\Models\User;

// call database

class UsersController extends Controller {
	public function index() {
		$users = (new User())->getRandom();

		return view('pages.user', compact('users'));
	}
}
