<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Illuminate\Foundation\Console\AboutCommand;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ArtikelModelController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

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



//1
// Route::get('/hobi', [HobiController::class, 'index']);
//Route::get('/keluarga', [KeluargaController::class, 'index']);
//Route::get('/matakuliah', [App\Http\Controllers\MatakuliahController::class, 'index']);

//Route::put('/', [ArtikelModelController::class, 'index']);




Auth::routes();

Route::middleware(['auth'])->group(function () {

    // Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

});
