<?php

use Illuminate\Support\Facades\Artisan;
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

Route::get('/', function () {
    return view('home');
});

Route::get('agencies', function(){ return view('agencies'); })->name('agencies');
Route::get('hidros', function(){ return view('hidros'); })->name('hidros');


Route::get('/test', function () {
    Artisan::call('key:generate');
});
