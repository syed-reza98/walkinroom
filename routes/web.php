<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontSiteController;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;

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
//     return view('welcome');
// });


Route::get('/', [FrontSiteController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/ss', [FrontSiteController::class, 'ss'])->name('ss');
Route::get('/search', [FrontSiteController::class, 'search'])->name('roomsearch');
Route::post('/search', [FrontSiteController::class, 'search'])->name('roomsearch');
Route::get('/roomlist', [FrontSiteController::class, 'roomlist'])->name('roomlist');

Route::get('/typelist/{id}', [FrontSiteController::class, 'typelist'])->name('typelist');
Route::get('/loclist/{id}', [FrontSiteController::class, 'loclist'])->name('loclist');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('roomdetail/{id}/{price}/{datedif}', [
    'as' => 'roomdetail', FrontSiteController::class, 'roomdetail'])->name('roomdetail');

Route::get('room/{id}/{price}/{datedif}', [
    'as' => 'room', FrontSiteController::class, 'room'])->name('room');

Route::get('/booking/{id}', [FrontSiteController::class, 'booking'])->name('booking');
Route::post('/booking/{id}', [FrontSiteController::class, 'booking'])->name('booking');


Route::get('/success', function () {
    return view('partials.success');
})->name('book.success');

Route::get('/cancel', function () {
    return view('partials.cancel');
})->name('book.cancel');



Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('roomde/{id}', [
//     'as' => 'room', FrontSiteController::class, 'room'])->name('roomde');

    // Route::get('room/{id}', function () {
    //     return view('partials.room');
    // });
