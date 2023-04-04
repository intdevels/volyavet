<?php

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



Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/about-us', [\App\Http\Controllers\AboutUsController::class,'index'])->name('about-us');
Route::get('/offer', [\App\Http\Controllers\PublicOfferController::class,'index'])->name('public-offer');
Route::get('/library', [\App\Http\Controllers\LibraryController::class,'index'])->name('library');
Route::get('/library/videos', [\App\Http\Controllers\LibraryController::class,'videos'])->name('library-videos');
Route::get('/library/{slug}', [\App\Http\Controllers\LibraryController::class,'article'])->name('library-article');
Route::get('/contacts', [\App\Http\Controllers\ContactController::class,'index'])->name('contacts');
Route::get('/services', [\App\Http\Controllers\ServiceController::class,'index'])->name('services');
Route::get('/services/{slug}', [\App\Http\Controllers\ServiceController::class,'single'])->name('service-single');
Route::get('/load-more-data', [\App\Http\Controllers\LibraryController::class,'loadMoreData'])->name('load-more-data');