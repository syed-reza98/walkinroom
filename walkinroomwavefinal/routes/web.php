<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\FrontSiteController;
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

Route::get('/roomd', function () {
    return view('frontsite.room');
});
Route::get('/', [FrontSiteController::class, 'index'])->name('index');
Route::get('/search', [FrontSiteController::class, 'search'])->name('groomsearch');
Route::post('/search', [FrontSiteController::class, 'search'])->name('roomsearch');
Route::get('/roomlist', [FrontSiteController::class, 'roomlist'])->name('roomlist');
Route::get('/hotellist', [FrontSiteController::class, 'hotellist'])->name('hotellist');
Route::get('/about-us', [FrontSiteController::class, 'about_us'])->name('about-us');
Route::get('/contact-us', [FrontSiteController::class, 'contact_us'])->name('contact-us');
Route::get('hoteldetail/{id}', [
    'as' => 'hoteldetail', FrontSiteController::class, 'hoteldetail'])->name('hoteldetail');
Route::get('roomdetail/{id}/{price}/{datedif}', [
    'as' => 'roomdetail', FrontSiteController::class, 'roomdetail'])->name('roomdetail');

Route::get('/booking-step/{id}', [
    'as' => 'booking.step', 'uses' => 'App\Http\Controllers\FrontSiteController@bookshow']);

Route::get('/rd', [FrontSiteController::class, 'rd'])->name('rd');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/demo', [FrontSiteController::class, 'demoNew'])->name('demoNew');
