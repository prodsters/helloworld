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

Route::get("/people", "PersonController@index")->name("people.index");
Route::post("/people/delete", "PersonController@delete")->name("people.delete");
Route::match(["GET", "POST"], "/people/add", "PersonController@add")->name("people.add");
Route::match(["GET", "POST"], "/people/update/{id?}", "PersonController@update")->name("people.update");
Route::get("/people/{id}", "PersonController@view")->name("people.view");

