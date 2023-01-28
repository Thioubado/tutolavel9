<?php
namespace App\Models;

use App\Http\Tools\Gc7;
use Faker\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model {
	use HasFactory;
	/*
		si la table de la base de donnees ne porte pas le mm nom alors on cree une variable publique et on y met le nom de la table comme ci-dessous:
		public $table = "le nom de la table";
	 */

	public $timestamps = false;

	public function getAll() {
		return User::all();
	}

	public function getRandom() {
		$users = $this->getAll();
		$faker = Factory::create();
		Gc7::aff($users);

		return $this->getAll();
	}
}
