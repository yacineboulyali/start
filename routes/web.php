<?php

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

Route::get('/contact/{name}','TestController@contact');
Route::get('/add_contact','ContactController@addContact');
Route::get('/list_contact','ContactController@listContact');

Route::get('/accueil',function (){
    return view('accueil');
});

