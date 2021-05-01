<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClienteController;
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


Route::get('/', [LoginController::class, 'index']);

Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' => 'check-type-user:cliente'],function(){
        Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente');
    });

    Route::group(['middleware' => 'check-type-user:tienda'],function(){
        Route::get('/tienda', [ClienteController::class, 'index']);
    });

    Route::get('/logout', [LoginController::class, 'logout']);

});

Route::post('/login', [LoginController::class, 'login']);




Route::get('/offline', function () {
    return view('welcome');
});
