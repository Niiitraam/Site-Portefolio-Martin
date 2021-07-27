<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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


// Route::group([
//     'prefix' => LaravelLocalization::setLocale(),
//     'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
// ], function(){
//     Route::resource('/', SiteController::class);



//     Auth::routes();

//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//     Auth::routes();

//     Route::get('/home', function() {
//         return view('home');
//     })->name('home')->middleware('auth');
// });


    Route::resource('/', SiteController::class);



    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Auth::routes();

    Route::get('/home', function() {
        return view('home');
    })->name('home')->middleware('auth');
