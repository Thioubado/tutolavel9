<?php
namespace App\Http\Controllers;

use App\Models\Membre;
use App\Http\Tools\Gc7;

class Gc7TestController extends Controller {
	public function test() {

        // 1 - Pour récupérer les id de tous les 'Membre'

        $realArrToTest = [... Membre::pluck('id')];
        // Gc7::aff(implode(', ', $realArrToTest));
		//$me = Gc7::aff(implode(', ', $realArrToTest));
		

        // 2 - Pour sélectionner que les 'pairs'
		// 1 2 3 4 5 6 7
		foreach($realArrToTest as $n)
		{
			$phrase = 'Id ';
			while($n % 2 == 0){
				
				Gc7::aff($n++, $phrase) ;
			}
			


			// if($n  % 2 == 0){
			// 	//return $nArr[] = $n;
			// 	return 'ok';
			// }else{
			// 	return $n;
			// }

			//return $n;
			// if (!($n & 1)) {
			// 	$nArr[] = $n;
			// }
		}

		//Gc7::aff('moi '.$moi);
		$arr = range(1, 10);
		// Façon 1
		foreach ($arr as $n) {
			if (!($n & 1)) {
				$nArr[] = $n;
			}
		}
		// Façon 2

		$nArrKeys=array_map(fn ($v): int => ($v & 1 ? 0 : $v), $arr);
        $nArrKeys = array_flip($nArrKeys);
        unset($nArrKeys[0]);
        $nArrKeys = array_flip($nArrKeys);

		$data = [[$arr, $nArr],[$arr, $nArrKeys], implode(', ', $realArrToTest)];

		// $data = $arr;
		// Rien ne t'empêche de faire ce genre de tableau, pour ensuite test la valeur et n'afficher que les pairs ;-)...

		// Ici ton code pour ne filter dans ce tableau que les pairs

		return view('gc7pages.test', ['data' => $data ?? 'Néant']);
	}
}
