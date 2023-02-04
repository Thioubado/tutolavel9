<?php
namespace App\Http\Controllers;

use App\Http\Tools\Gc7;
use Zxing\QrReader;

class Gc7Qr2Controller extends Controller {
	public function index() {
		$qrs = ['andy', 'grcote7', 'gugu', 'jpb11', 'momo', 'thr59', 'c7fr'];

		foreach ($qrs as $k => $qr) {
			if ($k > 2) {
				$qrcode = new QrReader('./../public/assets/img/qr-' . $qr . '.png');
				$text   = $qrcode->text(); // return decoded text from QR Code
				$data[] = ucfirst($qr) . ' → ' . $text;
			}
		}

		Gc7::aff($data, '$data');

		return view('gc7pages.qr2', ['data' => $data ?? '-']);
	}
}
