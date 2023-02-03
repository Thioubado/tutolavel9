<?php
namespace App\Http\Controllers;

use App\Models\Membre;

class Gc7TestController extends Controller
{
    public function test()
    {
        $me = pairs();
        $data = [1, 2, 3]-> pairs();

        return view('gc7pages.test', ['data' => $data ?? []]);
    }

	public function pairs()
	{
		$data = [... Membre::pluck('id')];
		//$data = Membre::orderBy('id')->get('id');
		foreach ($data as $n) {
			while ($n % 2 == 0) {
				echo $n++.'<br>';
			}
		}
		$n++;
		return view('gc7pages.test', ['data' => $data ?? []]);
	}
}