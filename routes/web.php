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

Auth::routes();

//Dashboard
Route::resource('admin/destinos', DepartamentoController::class);
Route::resource('admin/subdestinos', LugaresTuristicoController::class);
Route::resource('admin/lugars', TourController::class);
Route::resource('admin/viajes', ViajeController::class);


<<<<<<< HEAD
Route::get('destinos/seleccioncompra/{lugarid}',[CompraController::class,'show'])->name('compra.show');

Route::get('/registrar',[UserController::class,'create']);
=======


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> afbf4776eaf1632681ef0811c0c5fea09c43030b
