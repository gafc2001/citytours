<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompraController;

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

<<<<<<< HEAD
Route::get('/',HomeController::class );

Route::get('compra', [CompraController::class,'index']);
Route::get('compra/resumen/{compra}', [CompraController::class,'show']);


Route::get('destinos', [DestinoController::class,'index']);

Route::get('destinos/{destino}', [DestinoController::class,'show']);

Route::get('/registrar',[UserController::class,'create']);
=======
Route::get('/', function () {
    return view('welcome');
});

Route::get('/destino', function () {
    return 'welcome';
});
>>>>>>> 8011ddb9b82efccef6977f4f2ef636c1b27d8e51
