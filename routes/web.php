<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacheController;


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

Route::get('/tache',[TacheController::class, 'getListeTache']);
Route::get('/tache/nouveau',[TacheController::class, 'create']);
Route::post('/tache/nouveau',[TacheController::class, 'save']);
Route::get('/tache/{id}/details',[TacheController::class, 'show']);
Route::get('/tache/terminer/{id_tache}',[TacheController::class, 'terminer']);
