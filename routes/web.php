<?php

use App\Http\Controllers\MatelasController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MatelasController::class, 'index']);
Route::get('/matelas/{id}/edit', [MatelasController::class, 'edit']);
Route::put('/matelas/{id}', [MatelasController::class, 'update']);
Route::get('/matelas/create', [MatelasController::class, 'create']);
Route::post('/matelas', [MatelasController::class, 'store']);
Route::delete('/matelas/{id}', [MatelasController::class, 'destroy']);
Route::post('/matelas', 'MatelasController@store')->name('matelas.store');
