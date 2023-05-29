<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\example\FirstController;
use App\Http\Controllers\countryController;
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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/about', function () {
    return view ('about');
});

//*  ************ controller ********************

Route::get('/home', [FirstController::class, 'index'])->name('home');

Route::get('/country', countryController::class)->name('country')->middleware('country');