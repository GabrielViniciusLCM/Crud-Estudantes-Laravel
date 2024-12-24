<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'welcome']);


Route::get('/home', [HomeController::class, 'home']);
Route::post('/upload', [HomeController::class, 'upload']);
Route::get('/view', [HomeController::class, 'view']);
Route::get('/excluir/{id}', [HomeController::class, 'excluir']);
Route::get('/buscar',[HomeController::class, 'buscar']);
Route::get('/editar_view/{id}', [HomeController::class, 'editar_view']);
Route::post('/editar/{id}',[HomeController::class, 'editar']);




