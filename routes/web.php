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

Route::get('/',HomeController::class );

Route::get('compra', [CompraController::class,'index']);
Route::get('compra/resumen/{compra}', [CompraController::class,'show']);
Route::get('destinos', [MostrarDestinoController::class,'index'])->name('Mostrardestinos.index');
Route::get('destinos/{destino}', [MostrarSubdestinoController::class,'show'])->name('MostrarSubdestino.show');
// Route::get('destinos', [DestinoController::class,'index']);
// Route::get('destinos/{destino}', [DestinoController::class,'show']);



Route::get('admin',[AdminController::class,'index'])->name('index');

//Dashboard
Route::resource('admin/departamento', DepartamentoController::class);
Route::resource('admin/lugares', LugaresTuristicoController::class);
Route::resource('admin/tour', TourController::class);
Route::resource('admin/viaje', ViajeController::class);

Auth::routes();
