<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Gc7Friend;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		// \App\Models\User::factory(10)->create();

		User::create([
			'name'  => 'Momo',
			'email' => 'Momo@example.com',
		]);

		User::create([
			'name'  => 'GrCOTE7',
			'email' => 'Grcote7@gmail.com',
		]);

		$friends = [
			['GrCOTE7', 'Lionel', 'CÔTE', 'GrCOTE7@cote7.fr', 'grcote7.png', 'SSeB'],
			['JPB11', 'JP', 'B', 'JPB11@cote7.fr', 'jpb11.jpg', 'Castel'],
			['Thr59', 'Thierry', 'ElRitalo', 'ThR59@cote7.fr', 'thr59.jpg', 'Maubeuge'],
			['Momo', 'Mohamed', 'Th', 'Momo@cote7.fr', 'momo.png', 'Marocco'],
			['Andy', 'Andrew', 'Hson', 'Andrew@cote7.fr', 'andy.png', 'Vers Dijon'],
			['Gugu', 'Augustin', 'E.', 'Augustin@cote7.fr', 'gugu_malin.jpg', 'À la ferme'],
		];

		foreach ($friends as $friend) {
			Gc7Friend::create([
				'username' => $friend[0],
				'name'     => $friend[1],
				'lastname' => $friend[2],
				'email'    => $friend[3],
				'picture'  => $friend[4],
			]);
		}
	}
}
