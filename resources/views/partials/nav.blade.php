<?php
define('URI', substr($_SERVER['PATH_INFO'] ?? '/', 1));
use Barryvdh\Debugbar\Facades\Debugbar as DebugbarGc7;

if (!defined('ROOT')) {
	define('ROOT', './../../');
}

// echo URI;
function isActive($page) {
	DebugBarGc7::addMessage(strtolower(substr(URI, 0, 5)), 'URI: ' . strtolower(substr(URI, 0, 5)));

	return strtolower(substr($page, 0, 5)) == strtolower(substr(URI, 0, 5)) ? ' active' : '';
}
DebugBarGc7::addMessage(URI, 'URI');

$menus = [
	'GC7' => [
		'owner' => 'GC7',
		'color' => 'brown',
		'pages' => [
			'gc7users'  => 'Users',
			'gc7qrcode' => [
				'' => [
					ROOT.'gc7qrcode'          => 'QrCode',
					ROOT.'api/friend/grcote7' => 'GrCOTE7',
				],
				'Generators' => [
					ROOT.'gc7qrfriends' => 'Friends',
				],
				'Scanners' => [
					ROOT.'gc7qrcode/1' => 'Qr1',
					ROOT.'gc7qrcode/2' => 'Qr2',
				],
			],
			'gc7test' => 'Test',
		],
	],
	'Momo' => [
		'owner' => 'Momo',
		'color' => 'yellow',
		'pages' => [
			'about'            => 'About',
			'contact'          => 'Contact',
			'groupemiddleware' => 'Middleware',
			'userswithmodel'   => 'User',
			'httprequest'      => 'HttpRequest',
			'sessionlogin'     => 'Session Login',
			'showlist'         => 'Show list',
			'pagination'       => 'DB Pagination',
			'save'             => 'Save data in DB',
		],
	],
];

?>
@include('partials.nav_blocks', ['menus' => $menus])
