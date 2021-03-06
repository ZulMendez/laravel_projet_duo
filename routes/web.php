<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
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
// FRONTEND
Route::get('/', [AllController::class, 'home'])->name('home');

Route::get('/blog', [AllController::class, 'blog'])->name('blog');

Route::get('/portfolio', [AllController::class, 'portfolio'])->name('portfolio');

Route::get('/contact', [AllController::class, 'contact'])->name('contact');

// BACKEND
Route::get('/backOffice/index', function(){
    return view('backOffice.index');
})->name('admin');

//CRUD -> Create/Store
//Blog
// read
Route::get('backOffice/article', [BlogController::class, 'index'])->name('articles.index');
// create
Route::get('/backOffice/article/create', [BlogController::class, 'create'])->name('articles.create');
// store
Route::post('/backOffice/article/store', [BlogController::class, 'store'])->name('articles.store');
// delete
Route::delete('/backOffice/article/{id}/delete', [BlogController::class, 'destroy'])->name('articles.destroy');
// show
Route::get('/backOffice/article/{id}', [BlogController::class, 'show'])->name('articles.show');
// edit || update
Route::get('/backOffice/article/{id}/edit', [BlogController::class, 'edit'])->name('articles.edit');
Route::put('/backOffice/article/{id}/update', [BlogController::class, 'update'])->name('articles.update');


//Portfolio
// read
Route::get('backOffice/card', [PortfolioController::class, 'index'])->name('cards.index');
// create
Route::get('/backOffice/card/create', [PortfolioController::class, 'create'])->name('cards.create');
// store
Route::post('/backOffice/card/store', [PortfolioController::class, 'store'])->name('cards.store');
// delete
Route::delete('/backOffice/card/{id}/delete', [PortfolioController::class, 'destroy'])->name('cards.destroy');
// show
Route::get('/backOffice/card/{id}', [PortfolioController::class, 'show'])->name('cards.show');
// edit || update
Route::get('/backOffice/card/{id}/edit', [PortfolioController::class, 'edit'])->name('cards.edit');
Route::put('/backOffice/card/{id}/update', [PortfolioController::class, 'update'])->name('cards.update');






