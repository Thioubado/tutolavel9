<?php
namespace App\Http\Controllers;

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
		// './../resources/img/qrcode_mplionel.png');
		$data = $id;

		// return view('gc7pages.qrcode', ['data' => $data]);

		if ($id) {
			$view = 'qrcode' . $id;

			// return $this->{$function}();
			return view('gc7pages.' . $view, ['data' => $data ?? null]);
		}

		return $this->default();
	}

	public function default() {
		return view('gc7pages.qrcode', ['data' => $data ?? null]);
	}

	// public function qrcode1() {
	// 	return view('gc7pages.qrcode1', ['data' => $data ?? null]);
	// }

	// public function qrcode2() {
	// 	$data = [1, 2, 3];

	// 	return view('gc7pages.qrcode2', ['data' => $data ?? null]);
	// }
}
