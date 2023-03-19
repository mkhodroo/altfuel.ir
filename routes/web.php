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
})->name('home');

Route::get('issues', function(){ return redirect('https://l.altfuel.ir/issues'); })->name('issues');
Route::get('agencies', function(){ return view('agencies'); })->name('agencies');
Route::get('hidros', function(){ return view('hidros'); })->name('hidros');
Route::get('contact-us', function(){ return view('contact-us'); })->name('contact-us');
Route::get('contractors', function(){ return view('contractors'); })->name('contractors');


Route::get('/test', function () {
    Artisan::call('key:generate');
});

Route::get('download/{file_name}', function($file_name){
    $path = public_path("uploads\\$file_name");
    return response()->download($path, $file_name);
})->name('download');
