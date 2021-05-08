<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\LoginController;

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


Route::get('destinos', [DestinoController::class,'index']);
Route::get('destinos/{destino}', [DestinoController::class,'show']);


Route::get('registrar',[UserController::class,'create']);

Route::get('login', [LoginController::class,'index']);
Route::post('login', [LoginController::class,'login'])->name('login');
