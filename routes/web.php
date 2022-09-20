<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChipController;
use App\Http\Controllers\CarrierController;
use App\Models\Chip;
use App\Models\Carrier;

use Illuminate\Http\Request;
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
	$chips = Chip::all(); //fetch all products from DB
  return view('layouts.main', ['chips' => $chips]);
});

Route::resource('chip', ChipController::class);
Route::resource('carrier', CarrierController::class);

Route::get('/admin', function () {
  return view('layouts.admin');
});

Route::post('/test', function (Request $request) {

	$test = 0;
  if ($request->submit == "add") {
		$carrier = Carrier::where('name', $request->newcarrier)->get();
		if (count($carrier) > 0) {
			return json_encode(['r'=> $test]); // 0 ya existe
		}
		$newCarrier = Carrier::create([
			'name' => $request->newcarrier,
			'enabled' => true,
			'operator' => 1//$request->operator
		]);
		$test = 1;

	} elseif ($request->submit == "update") {
		Carrier::where('name', $request->carrier)->update(['name' => $request->newname]);
		$test = 2;

	} else {
		$carrier = Carrier::where('name', $request->carrier);
		Carrier::where('name', $request->carrier)->update(['enabled' => $request->submit == 'enable' ? 1:0]);
		$test = 3;
	}

	return json_encode(['r'=> $test]); //"{'r' '1'}"; // cargado
});

Route::get('/add', function() {
	return view('pages.chipForm');
});
