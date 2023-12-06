<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContaController;
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

Route::get('/index-conta', [ContaController::class, 'index'])->name('conta.index');
Route::get('/create-conta', [ContaController::class, 'create'])->name('conta.create');
Route::post('/store-conta', [ContaController::class, 'store'])->name('conta.store');
Route::get('/show-conta', [ContaController::class, 'show'])->name('conta.show');
Route::get('/edit-conta', [ContaController::class, 'edit'])->name('conta.edit');
Route::put('/update-conta', [ContaController::class, 'update'])->name('conta.update');
Route::delete('/destroy-conta', [ContaController::class, 'destroy'])->name('conta.destroy');