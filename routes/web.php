<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarstoreController;

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
    return view('welcome');
});
// 

// Route::get('/', [CarstoreController::class, "index"]);
// Route::resource('stock', CarstoreController::class);
Route::resource('carstores', CarstoreController::class);
Route::get('carstores/delete/{id}', [CarstoreController::class, "delete"])->name("carstores.delete");

Route::prefix("studentapp")->group(function () {

    Route::get('/', [CarstoreController::class, "index"]);
    Route::get('carstores/create', [CarstoreController::class, "create"]);
    Route::post('create', [CarstoreController::class, "store"]);
    Route::put('update', [CarstoreController::class, "update"]);
    Route::get('edit/{id}', [CarstoreController::class, "edit"]);
    Route::get('delete/{id}', [CarstoreController::class, "destroy"]);
    Route::get('show/{id}', [CarstoreController::class, "show"]);
});
//Route::get('studentapp', function () {
//     return view('carstores/');
// });