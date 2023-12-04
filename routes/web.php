<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MahasiswaController;
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
    return view('homePage');
});

Route::get('/room', function () {
    return view('explorePage');
});

Route::get('/room/room1', function () {
    return view('room/room1');
});

Route::get('/room/room2', function () {
    return view('room/room2');
});

Route::get('/list',[MahasiswaController::class, 'index']);
Route::get('/list/create',[MahasiswaController::class, 'create']);
Route::post('/list/store',[MahasiswaController::class, 'store']);
Route::delete('/list/{id}',[MahasiswaController::class, 'destroy']);