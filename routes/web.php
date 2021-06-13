<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactFormController;

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

Route::get('/', [PagesController::class, 'index']);
Route::resource('/blog', PostsController::class);
Route::resource('/LastPost', PostsController::class);
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
// Route::resource('/contact', ContactFormController::class);
Route::get('/contact', [\App\Http\Controllers\ContactFormController::class, 'create'])->name('contact.create');
Route::post('/contact', [\App\Http\Controllers\ContactFormController::class, 'store'])->name('contact.store');
// Route::get('contact', 'ContactFormController@create')->name('contact.create');
//Route::post('contact', 'ContactFormController@store')->name('contact.store');