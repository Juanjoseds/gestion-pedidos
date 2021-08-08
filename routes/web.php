<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [LoginController::class, 'index'])->name('home.login');

Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' => 'check-type-user:cliente'],function(){
        Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente');
    });

    Route::group(['middleware' => 'check-type-user:tienda'],function(){
        Route::get('/tienda', [TiendaController::class, 'index']);
        Route::get('/pedido/{id}', [TiendaController::class, 'getPedido']);
        Route::delete('/pedido/delete/{id}', [TiendaController::class, 'destroy']);

    });

    Route::get('/logout', [LoginController::class, 'logout']);

});

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);




Route::get('/offline', function () {
    return view('welcome');
});
