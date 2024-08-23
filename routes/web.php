<?php
use App\Http\Controllers\CalculationController;
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



Route::get('/calculate', [CalculationController::class, 'showForm'])->name('calculate.form');
Route::post('/calculate', [CalculationController::class, 'calculate'])->name('calculate.result');

Route::get('/saludo', [App\Http\Controllers\mensajesController::class, 'saludo'])->name('saludo.form');

Route::get('/promedio', [App\Http\Controllers\promedioController::class, 'showForm'])->name('promedio.form');
Route::post('/promedio', [App\Http\Controllers\promedioController::class, 'promedio'])->name('promedio.result');

Route::get('/contacto', [App\Http\Controllers\contactoController::class, 'showForm'])->name('contacto.form');
Route::post('/contacto', [App\Http\Controllers\contactoController::class, 'contacto'])->name('contacto.result');