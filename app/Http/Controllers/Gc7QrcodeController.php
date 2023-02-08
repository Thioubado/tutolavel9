<?php
namespace App\Http\Controllers;

use App\Models\Gc7Friend;

/**
 * IMPORTANT:.QR Code Reader:
 * https://github.com/mebjas/html5-qrcode.
 *
 * Capturing image: https://web.dev/media-capturing-images
 *
 * Generate QRCode : https://www.qrcode-monkey.com/fr.
 *
 *
 * Script pour generer QR Code
 *
 * https://davidshimjs.github.io/qrcodejs
 *
 * https://codepen.io/davidshimjs/pen/NdBYrg
 *
 * IMG:
 * http://127.0.0.1:8000/storage/img/Andrew2022.png
 * http://127.0.0.1:8000/storage/img/Lionel2022.png
 */
class Gc7QrcodeController extends Controller {
	public function index($id = null) {
		$data = $id;

		$view = 'qrcode';
		if ($id) {
			$view .= $id;
		}

		return view('gc7pages.' . $view, ['data' => $data ?? null]);
	}

	public function list() {
		// Gc7::aff($friends);
		$data = Gc7Friend::all();

		return view('gc7pages.friends', ['data' => $data]);
	}

	public function scanner1() {
		$qrs = ['andy', 'grcote7', 'gugu', 'jpb11', 'momo', 'thr59', 'c7fr'];

		foreach ($qrs as $k => $qr) {
			if ($k > 2) {
				$qrcode = new QrReader('./../public/assets/img/qr-' . $qr . '.png');
				$text   = $qrcode->text(); // return decoded text from QR Code
				$data[] = ucfirst($qr) . ' → ' . $text;
			}
		}

		Gc7::aff($data, '$data');

		return view('gc7pages.qrcode2', ['data' => $data ?? '-']);
	}
}
