<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , function(){
    return view('html.index');
})->name('home');

Route::get('doctors' , function(){
    return view('html.doctors');
});

Route::get('articles' , function(){
    return view('html.articles');
});
Route::get('test' , function(){
    return view('html.test');
});
Route::get('/sign in' , function(){
    return view('html.Sign In');
});
Route::get('blog', [PostController::class, 'index'] );


Auth::routes();
Route::resource('posts', PostController::class );
