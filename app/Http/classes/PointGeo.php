<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Http\Classes;

class PointGeo {
	public $lat;
	public $lng;

	public function __construct($lat, $lng) {
		$this->lat = $lat;
		$this->lng = $lng;
	}
}
