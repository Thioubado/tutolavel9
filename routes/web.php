<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //echo $name;
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about');
// });
Route::view("about", "about");
Route::view("contact", "contact");

Route::get("createcontroller/{user}",[CreateController::class, "index"]);

// view lesson
//Route::view('view', 'view');
Route::get('/view/{name}', function ($name) {
    //echo $name;
    return view('view', ['name'=> $name]);
});