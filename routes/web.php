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

get_static_routes() ;
get_dynamic_routes();

Route::get("/", "FrontController@home")->name('home');
Route::get("subcategory/{category}/{category_title?}", "FrontController@subcategory")->name('subcategory');
Route::get("contents", "FrontController@listContents")->name('contents');
Route::get("meal/{content}", "FrontController@meal")->name('meal');

