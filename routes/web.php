<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\AssignOp\Concat;

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

Route::get('test', function(){
    return view('test');
})->name('test');


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('issues', function(){ return redirect('https://l.altfuel.ir/issues'); })->name('issues');
Route::get('agencies', function(){ return view('agencies'); })->name('agencies');
Route::get('hidros', function(){ return view('hidros'); })->name('hidros');
Route::get('contact-us', function(){ return view('contact-us'); })->name('contact-us');
Route::get('contractors', function(){ return view('contractors'); })->name('contractors');


Route::name('news')->prefix('news')->group(function(){
    Route::get('/', function(){ return view('pages.news'); })->name('');
    Route::get('/show/{id}', function($id){
        $post = json_decode(file_get_contents("https://l.altfuel.ir/api/blog/get-by-id/$id"));
        return view('pages.show')->with([ 'post' => $post ]);
    })->name('.show');
});


Route::get('download/{file_name}', function($file_name){
    $path = public_path("uploads/$file_name");
    return response()->download($path, $file_name);
})->name('download');
