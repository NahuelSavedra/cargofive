<?php

use App\Http\Controllers\ContractController;
use Illuminate\Support\Facades\Route;


//listado de contratos y rutas
Route::get('/', [ContractController::class, 'index'])->name('contract.index');
//mostrar vista de formulario
Route::get('/import',[ContractController::class, 'create'])->name('contract.create');
//Ruta importacion de archivo excel
Route::post('/import', [ContractController::class, 'store'])->name('contract.store');
