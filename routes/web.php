<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hotelcontroller;
use App\Http\Controllers\FrontsiteController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomdateController;
use App\Http\Controllers\PhotoController;


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

// Route::get('/', function () {
//     return view('frontsite.index');
// });

Route::get('/', [FrontsiteController::class, 'index'])->name('index');
Route::get('/search', [FrontsiteController::class, 'search'])->name('roomsearch');
Route::post('/search', [FrontsiteController::class, 'search'])->name('roomsearch');

Route::get('/roomlist', [FrontsiteController::class, 'roomlist'])->name('roomlist');

Route::get('/roomdetail/{id}', [FrontsiteController::class, 'roomdetail'])->name('roomdetail');

Route::get('/about-us', [FrontsiteController::class, 'about_us'])->name('about-us');
Route::get('/contact-us', [FrontsiteController::class, 'contact_us'])->name('contact-us');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/hotels', Hotelcontroller::class);
Route::resource('/rooms', RoomController::class);
Route::resource('/roomdates', RoomdateController::class);
Route::resource('/locations', LocationController::class);
Route::resource('/photos', PhotoController::class);

// Route::get('/foo', function () {
//     Artisan::call('storage:link');
// });
