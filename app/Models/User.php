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

    /**
     * Get 1 user randomly
     */
	public function getRandom() {
		$users = $this->all();
		$faker = Factory::create();

		// Gc7::aff($users);

		return $faker->randomElements($users);
	}
}
