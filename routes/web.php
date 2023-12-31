<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'pag1'])->name('homepage');

Route::get('/list',[PageController::class, 'pagList'])->name('list');

Route::get('/show/{id}',[PageController::class, 'pagShow'])->name('show');

Route::post('/invio', [PageController::class, 'send'])->name('send');

Route::get('/thank', [PageController::class, 'thank'])->name('thank');