<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\LibreriaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//libros
Route::get('/davidalvear/libros', [LibroController::class,'index']
);

//libros
Route::get('/davidalvear/areas', [AreaController::class,'index']
);

Route::get('/marlonburbano/presentacion',[LibreriaController::class,'index']);
