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

Route::get("/people", "PersonController@index")->name("people.index")->middleware("auth");
Route::post("/people/delete", "PersonController@delete")->name("people.delete")->middleware("auth");
Route::match(["GET", "POST"], "/people/add", "PersonController@add")->name("people.add")->middleware("auth");
Route::match(["GET", "POST"], "/people/update/{id?}", "PersonController@update")->name("people.update")->middleware("auth");
Route::get("/people/{id}", "PersonController@view")->name("people.view")->middleware("auth");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
