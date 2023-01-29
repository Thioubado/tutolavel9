<?php
namespace App\Http\Controllers;

/**
 * IMPORTANT:.QR Code Reader:
 * https://github.com/mebjas/html5-qrcode.
 *
 * Generate QRCode : https://www.qrcode-monkey.com/fr.
 *
 * Script pour generer QR Code
 * https://codepen.io/davidshimjs/pen/NdBYrg
 *
 * IMG:
 * http://127.0.0.1:8000/storage/img/Andrew2022.png
 * http://127.0.0.1:8000/storage/img/Lionel2022.png
 */
class Gc7QrcodeController extends Controller {
	public function index() {
		// './../resources/img/qrcode_mplionel.png');
		$data = 789;

		return view('gc7pages.qrcode', ['data' => $data]);
	}
}
