<?php

/**
 * (ɔ) GrCOTE7 - 2022-2023
 */

namespace App\Http\Controllers;

use App\Http\Classes\PointGeo;

class Gc7TestController extends Controller
{
	public function test()
	{
		$sseb  = new PointGeo(47.11863327026367, 5.363165855407715);
		$losne = new PointGeo(47.098099500000004, 5.2642337);

		$data = round($this->distance($sseb, $losne), 1) . ' kms';

		return view('gc7pages.test', ['data' => $data ?? []]);
	}

	public function distance(PointGeo $pt1, PointGeo $pt2)
	{
		$earth_radius = 6371; // Rayon moyen de la Terre en kilomètres
		$lat1         = deg2rad($pt1->lat);
		$lng1         = deg2rad($pt1->lng);
		$lat2         = deg2rad($pt2->lat);
		$lng2         = deg2rad($pt2->lng);
		$delta_lat    = $lat2 - $lat1;
		$delta_lng    = $lng2 - $lng1;
		$a            = sin($delta_lat / 2) * sin($delta_lat / 2) + cos($lat1) * cos($lat2) * sin($delta_lng / 2) * sin($delta_lng / 2);
		$c            = 2 * atan2(sqrt($a), sqrt(1 - $a));

		return $earth_radius * $c;
	}
}
