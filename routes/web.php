<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MostrarDestinoController;
use App\Http\Controllers\MostrarSubdestinoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
//Dashboard
use App\Http\Controllers\Admin\DepartamentoController;
use App\Http\Controllers\Admin\LugaresTuristicoController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\ViajeController;


use Illuminate\Support\Facades\Auth;

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

Route::get('/',HomeController::class);



Route::get('destinos', [MostrarDestinoController::class,'index'])->name('destinos.index');


Route::get('destinos/comprar', [CompraController::class,'index'])->name('compra.index');
Route::get('destinos/{destino}', [MostrarSubdestinoController::class,'show'])->name('destinos.show');
Route::get('destinos/comprar/{idlugarTuristico}', [CompraController::class,'show'])->name('compra.show');

// Verificación de cuenta para poder entrar
//  ->middleware(['auth'])->name('/');

Route::post('destinos/compra',[CompraController::class,'store'])->middleware(['auth'])->name('compra.store');




Route::get('admin',[AdminController::class,'index'])->name('index');

//Dashboard
Route::resource('admin/departamento', DepartamentoController::class);
Route::resource('admin/lugares', LugaresTuristicoController::class);
Route::resource('admin/tour', TourController::class);
Route::resource('admin/viaje', ViajeController::class);




Route::get('/registrar',[UserController::class,'create']);


Auth::routes(['verify' => true]);
