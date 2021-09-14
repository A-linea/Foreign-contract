<?php

use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/generateContract', [\App\Http\Controllers\Contracts\PDF\PDFController::class, 'showPdf'])->name('showContract');
Route::get('/', [HomeController::class, '__invoke'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
