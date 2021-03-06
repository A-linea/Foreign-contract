<?php

use App\Http\Controllers\Contracts\PDF\PDFController;
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

Route::get('/download-pdf-contract', [PDFController::class, 'downLoadContractPDF'])->name('downloadContract');
Route::get('/show-pdf-contract', [PDFController::class, 'showPdf'])->name('showContract');
Route::get('/preview-pdf-contract', [PDFController::class, 'previewContractPDF'])->name('previewContract');
Route::get('/', [HomeController::class, '__invoke'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
