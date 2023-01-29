<?php
namespace App\Models;

use App\Http\Tools\Gc7;
use Faker\Factory;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
	public $timestamps = false;

	/**
	 * Get 1 user randomly.
	 */
	public function getRandom() {
		$users = $this->all();
		$faker = Factory::create();

		// Gc7::aff($users);

		return $faker->randomElements($users);
	}
}
