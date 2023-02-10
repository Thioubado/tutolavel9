<?php
namespace App\Http\Controllers;

use App\Http\Tools\Gc7;
use App\Models\Gc7Friend;
use chillerlan\QRCode\QRCode;
use Zxing\QrReader;

/**
 * IMPORTANT:.QR Code Reader:.
 *
 * Last solution: Seems to read all
 *
 * @! https://github.com/nimiq/qr-scanner
 * https://nimiq.github.io/qr-scanner/demo/
 *
 * https://github.com/zxing/zxing
 * Trouble: In chinese
 * 1st solution - https://www.tabnine.com/code/java/packages/com.king.zxing
 * Langage: Java
 *
 * Android Studio Tutorial
 * https://www.youtube.com/playlist?list=PLaoF-xhnnrRWHtmb8ZGmu8N4Wl2Zr26V7
 *
 * Android Development Tutorial - Read QR Code with ZXing
 *
 * https://www.google.com/search?q=tuto+zxing&oq=tuto+zxing&aqs=chrome..69i57.5825j0j1&sourceid=chrome&ie=UTF-8
 *
 * https://www.youtube.com/watch?v=MegowI4T_L8
 *
 * 1/ https://github.com/mebjas/html5-qrcode.
 *
 * Other resources:
 * https://packagist.org/?query=qrcode%20reader
 *
 * Capturing image: https://web.dev/media-capturing-images
 *
 * Generate QRCode : https://www.qrcode-monkey.com/fr.
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
		$nbScanners = 5;

		if (in_array($id, range(1, $nbScanners))) {
			$view         = 'qrcode';
			$methodToCall = 'scanner' . $id;
			$data         = $this->{$methodToCall}();
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
		// $qrs = ['andy', 'grcote7', 'gugu', 'jpb11', 'momo', 'thr59', 'c7fr'];

		// foreach ($qrs as $k => $qr) {
		// 	if ($k > 2) {
		// 		$qrcode = new QrReader('./../public/assets/img/qr-' . $qr . '.png');
		// 		$text   = $qrcode->text(); // return decoded text from QR Code
		// 		$data[] = ucfirst($qr) . ' → ' . $text;
		// 	}
		// }

		// Gc7::aff($data, '$data');
		return 1;
	}

	public function scanner2() {
		$data = 'otpauth://totp/test?secret=B3JX4VCVJDVNXNZ5&issuer=chillerlan.net';

		// quick and simple:
		$data = '1/ Generate QR Code<br><img src="' . (new QRCode())->render($data) . '" alt="QR Code" width="200" />';

		// Gc7::aff($data, '$data');

		// // Very bad decoder
		// $qrc = new QRCode();
		// $qrc->readFromFile('./../public/assets/img/qr-andy.png');
		// Gc7::aff($qrc);

		$qrcode = new QrReader('./../public/assets/img/qr-andy.png');
		$data   = $qrcode->text(); // return decoded text from QR Code

		return 'QR Code decoder:<br>' . $data;
	}

	public function scanner3() {
		$data = 'Third QR Reader';

		return 'QR Code decoder:<br>' . $data;
	}

	public function scanner4() {
		$data = 'Here name of the librairy';

		return 'Barcode decoder:<br>' . $data;
	}

	public function scanner5() {
		return 1;
	}
}
