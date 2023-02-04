<?php

use App\Http\Controllers\view;
use Illuminate\Support\Facades\Route;
// call the submit form controller
use App\Http\Controllers\UsersWithModel;
// call the form validation

use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\Gc7Qr2Controller;
use App\Http\Controllers\SubmitController;
// call the controller userwithmodel;
use App\Http\Controllers\UpdateController;
// call the usesrHttpController
use App\Http\Controllers\Gc7TestController;
// call HttpRequestController
use App\Http\Controllers\Gc7UsersController;
// call the SessionWithLoginController
use App\Http\Controllers\PaginateController;
// call the showlistcontroller
use App\Http\Controllers\ShowListController;
// call the paginatecontroller
use App\Http\Controllers\Gc7QrcodeController;
// call the SaveDataInDBController
use App\Http\Controllers\usesrHttpController;
// call the deleController
use App\Http\Controllers\Gc7FriendsController;
// call the UpdateController
use App\Http\Controllers\SubmitFormController;
use App\Http\Controllers\HttpRequestController;
use App\Http\Controllers\Gc7ApiFriendController;
use App\Http\Controllers\SaveDataInDBController;
use App\Http\Controllers\FormValidationController;
use App\Http\Controllers\SessionWithLoginController;


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

Route::view('/', 'welcome');
Route::view('about', 'pages.about');
Route::view('contact', 'pages.contact');

Route::get('createcontroller/{user}', [CreateController::class, 'index']);

// view lesson
// Route::view('view', 'view');
// Route::get('/view/{name}', function ($name) {
//     //echo $name;
//     return view('view', ['name'=> $name]);
// });
// view route
Route::get('view/{name}', [view::class, 'loadView']);

// Laravel 9 tutorial: Submit form
// Route::view('login', 'login');
Route::post('submit', [SubmitFormController::class, 'index']);

// exercice du submit
Route::view('loginpage', 'LoginBis');
Route::post('submitbis', [SubmitController::class, 'getData']);

// form validation
Route::post('formavalid', [FormValidationController::class, 'index']);
Route::view('formvalid', 'formValidation');

// what is middleware
Route::view('groupemiddleware', 'pages.groupemiddleware');
Route::view('noaccess', 'noaccess');

// group middleware
Route::group(['middleware' => ['protectedPage']], function () {
	Route::view('login', 'login');
});

// Database with model
Route::get('userswithmodel', [UsersWithModel::class, 'getData']);

// http method
Route::get('usershttp', [UsesrHttpController::class, 'index']);

// http request
Route::view('httprequest', 'pages.httprequest');
Route::post('loginrequest', [HttpRequestController::class, 'index']);
// Session Login
Route::view('sessionlogin', 'pages.sessionLogin');
Route::post('sessionwithlogin', [SessionWithLoginController::class, 'userLoginSession']);
Route::view('profilesession', 'pages.profileSession');
// Login

// logout
Route::get('/logout', function () {
	if (session()->has('first_name')) {
		session()->pull('first_name');
	}

	return redirect('sessionlogin');
});

// showlist from db
Route::get('showlist', [ShowListController::class, 'pairs']);

// paginate page
Route::get('pagination', [PaginateController::class, 'pages']);

// route for save data in DB
Route::view('save', 'pages.save');
Route::post('save', [SaveDataInDBController::class, 'getData']);

// route for delete
Route::get('montrer', [DeleteController::class, 'montrerData']);
Route::get('delete/{id}', [DeleteController::class, 'supprimerData']);

// route for update
Route::get('editer', [UpdateController::class, 'editerData']);
Route::get('delete/{id}', [UpdateController::class, 'deleteForUpdate']);
Route::get('editpage/{id}', [UpdateController::class, 'editforDB']);
Route::post('editpage', [UpdateController::class, 'showMeData']);

// ///////////////////////////////////////// GC7 ////////////////////////////////////////////

Route::get('gc7users', [Gc7UsersController::class, 'index']);
Route::get('gc7friends', [Gc7FriendsController::class, 'list']);
Route::get('gc7qrcode', [Gc7QrcodeController::class, 'index']);
Route::get('gc7qr2', [Gc7Qr2Controller::class, 'index']);
Route::get('api/friend/{username}', [Gc7ApiFriendController::class, 'friend']);
Route::get('gc7test', [Gc7TestController::class, 'pairs']);
