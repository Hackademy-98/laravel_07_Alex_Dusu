<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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


// ROTTE PUBBLICHE
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/chisiamo', [PublicController::class, 'chisiamo'])->name('chisiamo');
Route::get('/servizioclienti', [PublicController::class, 'servizioclienti'])->name('servizioclienti');


// ROTTE INDEX/DETTAGLIO
Route::get('/marketplace', [ArticleController::class, 'index'])->name('index');
Route::get('/article/detail/{article}' , [ArticleController::class, 'show'])->name('show');


// ROTTE INSERIMENTO FORM (CREATE)
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

// ROTTE UPDATE
Route::get('/article/edit/{article}', [ArticleController::class,'edit'])->name('article.edit');
Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update');

// ROTTE DELETE
Route::delete('/article/delete/{article}', [ArticleController::class,'destroy'])->name('article.destroy');
