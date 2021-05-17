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
use App\Http\Controllers\MailController;
use App\Mail\BoletasMailController;
use Illuminate\Support\Facades\Mail;

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


//Route::get('destinos/comprar', [CompraController::class,'index'])->name('compra.index');
Route::get('destinos/{destino}', [MostrarSubdestinoController::class,'show'])->name('subdestinos.show');
Route::get('destinos/comprar/{idlugarTuristico}', [CompraController::class,'show'])->middleware(['auth'])->name('compra.show');
Route::post('destinos/compra',[CompraController::class,'store'])->middleware(['auth'])->name('compra.store');
// Verificación de cuenta para poder entrar
//  ->middleware(['auth'])->name('/');


Route::get('boleta/{ultima}',[MailController::class,'index'])->name('boleta.build');
/*Route::get('boleta/{ultima}',function(){
$correo= new BoletasMailController();
Mail::to('davidalexd1234@gmail.com')->send($correo);
return 'sadfasd';
});
*/



//Dashboard
Route::get('admin',[AdminController::class,'index'])->name('admin.index')->middleware(['auth']);
Route::resource('admin/departamento', DepartamentoController::class)->middleware(['auth']);
Route::resource('admin/lugares', LugaresTuristicoController::class)->middleware(['auth']);
Route::resource('admin/tour', TourController::class)->middleware(['auth']);
Route::resource('admin/viaje', ViajeController::class)->middleware(['auth']);




Route::get('/registrar',[UserController::class,'create']);


Auth::routes(['verify' => true]);
