<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Gc7Friend;
use App\Models\Membre;
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
			['GrCOTE7', 'Lionel', 'CÔTE', 'GrCOTE7@cote7.fr', 'grcote7.png', 'fr', 'SSeB'],
			['JPB11', 'JP', 'B', 'JPB11@cote7.fr', 'jpb11.jpg', 'fr', 'Castel'],
			['Thr59', 'Thierry', 'ElRitalo', 'ThR59@cote7.fr', 'thr59.jpg', 'fr', 'Maubeuge'],
			['Momo', 'Mohamed', 'Th', 'Momo@cote7.fr', 'momo.png', 'ma', 'Marocco'],
			['Andy', 'Andrew', 'Hson', 'Andrew@cote7.fr', 'andy.png', 'fr', 'Vers Dijon'],
			['Gugu', 'Augustin', 'E.', 'Augustin@cote7.fr', 'gugu_malin.jpg', 'fr', 'À la ferme'],
		];

		foreach ($friends as $friend) {
			Gc7Friend::create([
				'username' => $friend[0],
				'name'     => $friend[1],
				'lastname' => $friend[2],
				'email'    => $friend[3],
				'picture'  => $friend[4],
				'country'  => $friend[5],
				'location' => $friend[6],
			]);
		}
		foreach ($friends as $membre) {
			Membre::create([
				'pseudo'  => $membre[0],
				'prenom'  => $membre[1],
				'nom'     => $membre[2],
				'email'   => $membre[3],
				'photo'   => $membre[4],
				'pays'    => $membre[5],
				'adresse' => $membre[6],
			]);
		}
	}
}
