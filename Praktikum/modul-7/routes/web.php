<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/add_mhs', [MahasiswaController::class, 'add_mhs']);
Route::get('/mahasiswa/{nrp}/update', [MahasiswaController::class, 'update']);
Route::post('/mahasiswa/{nrp}/update_mhs', [MahasiswaController::class, 'update_mhs']);
Route::delete('/mahasiswa/{nrp}', [MahasiswaController::class, 'delete']);
