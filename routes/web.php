<?php

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/backOffice', function(){
    return view('backOffice/index');
})->name('admin');

//CRUD -> Create/Store
//Blog
Route::get('/backOffice/article/create', [BlogController::class, 'create'])->name('articles.create');
Route::post('/backOffice/article/store', [BlogController::class, 'store'])->name('articles.store');

//Portfolio
Route::get('/backOffice/card/create', [BlogController::class, 'create'])->name('cards.create');
Route::post('/backOffice/card/store', [BlogController::class, 'store'])->name('cards.store');




