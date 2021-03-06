<?php

use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class,'Index'])->name('home');
Route::get('/book/favorit_books', [BookController::class,'ShowFavoritBooksList'])->name('book.favorit_list');
Route::get('/book/pupulaire_books', [BookController::class,'ShowPupulaireBooksList'])->name('book.pupulare_list');
Route::get('/book/detailes/{id}', [BookController::class,'ShowBookDetailes'])->name('book.detailes');
Route::get('/book/comments/{id}', [BookController::class,'ShowBookComments'])->name('book.comments');
Route::get('/book/cherch', [BookController::class,'BooksCherch'])->name('book.cherch');
