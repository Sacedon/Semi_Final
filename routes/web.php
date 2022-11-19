<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Html\FormFacade;

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
    return view('landing');
});

Route::get('/cars',[CarController::class, 'index']);
Route::post('/cars',[CarController::class, 'store']);

Route::get('/edit-car/{cars}',[CarController::class, 'edit']);
Route::put('/edit-car/{cars}',[CarController::class, 'update']);
Route::get('/delete-car/{cars}',[CarController::class, 'delete']);
Route::delete('/confirmdelete-car/{cars}',[CarController::class, 'destroy']);
