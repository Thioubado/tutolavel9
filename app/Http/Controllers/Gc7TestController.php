<?php
namespace App\Http\Controllers;

class Gc7TestController extends Controller {
	public function test() {
		$menus = [
			'GC7' => [
				'owner' => 'GC7',
				'color' => 'brown',
				'pages' => [
					'gc7users'           => 'Users',
					'gc7friends'         => 'Friends',
					'gc7qrcode'          => 'QrCode',
					'api/friend/grcote7' => 'GrCOTE7',
					'gc7test'            => 'Test',
				],
			],
			'Momo' => [
				'owner' => 'Momo',
				'color' => 'yellow',
				'pages' => [
					'about'            => 'About',
					'contact'          => 'Contact',
					'groupemiddleware' => 'Goupe Middleware',
					'userswithmodel'   => 'Users with model',
					'httprequest'      => 'Http request Method',
					'sessionlogin'     => 'Session Login',
					'showlist'         => 'Show list',
					'pagination'       => 'Pagination with DB',
					'save'             => 'Save data in DB',
				],
			],
		];

		$data = $menus;

		return view('gc7pages.test', ['data' => $data ?? []]);
	}
}
