<?php

use App\Http\Controllers\EntidadController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TransaccionController;
use App\Http\Controllers\UserController;
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

Route::resource('/proyecto',ProyectoController::class);
Route::resource('/entidad',EntidadController::class);
Route::resource('/transaccion',TransaccionController::class);
Route::resource('/user',UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
