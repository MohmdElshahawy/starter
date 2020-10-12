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

Route::get('/', function () {
    return view('welcome') ;
});
Route::get('first','FirstController@show0', function(){
    return 'welcome';
})->middleware('auth');

Route::get('login', function(){
    return 'must be login';
})->name('login');

Route::get('test3/{id?}', function ($id) {
    return $id;
});

Route::resource('user','Usercontrollrt');
Route::get('test', 'Newscontroller@test');
Route::resource('news', 'Newscontroller');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
