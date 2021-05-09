<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
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


// Route::get('destinos', [DestinoController::class,'index']);
// Route::get('destinos/{destino}', [DestinoController::class,'show']);


Route::get('registrar',[UserController::class,'create']);

Route::get('login', [LoginController::class,'index']);
Route::post('login', [LoginController::class,'login'])->name('login');


Route::get('admin',[AdminController::class,'index'])->name('index');

Route::get('destino','App\Http\Controllers\DestinoController@index')->name('destinos.index');
Route::post('destino','App\Http\Controllers\DestinoController@store')->name('destinos.store');
Route::get('destino/create','App\Http\Controllers\DestinoController@create')->name('destinos.create');
Route::get('destino/{destino}','App\Http\Controllers\DestinoController@show')->name('destinos.show');
Route::put('destino/{destino}','App\Http\Controllers\DestinoController@update')->name('destinos.update');
Route::delete('destino/{destino}','App\Http\Controllers\DestinoController@destroy')->name('destinos.destroy');
Route::get('destino/{destino}/edit','App\Http\Controllers\DestinoController@edit')->name('destinos.edit');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
