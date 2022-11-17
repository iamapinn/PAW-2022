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

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/create', [MahasiswaController::class, 'create']);
Route::post('/add_mhs', [MahasiswaController::class, 'add_mhs']);
Route::get('/update/{id}', [MahasiswaController::class, 'update']);
Route::post('/update_mhs/{id}', [MahasiswaController::class, 'update_mhs']);
Route::delete('/delete_mhs/{id}', [MahasiswaController::class, 'delete']);
Route::get('/about', [MahasiswaController::class, 'about']);
