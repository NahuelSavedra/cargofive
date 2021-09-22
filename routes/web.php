<?php

use App\Http\Controllers\RatesController;
use Illuminate\Support\Facades\Route;

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
//mostrar vista de formulario
Route::get('/import',[RatesController::class, 'create'])->name('rates.create');
//Ruta importacion de archivo excel
Route::post('/import', [RatesController::class, 'store'])->name('rates.store');
