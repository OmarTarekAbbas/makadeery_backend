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
Route::get("{category}/category/{category_title?}", "FrontController@subcategory")->name('subcategory');
Route::get("{category_id?}/contents/{category_title?}/{subcategory_title?}", "FrontController@listContents")->name('contents');
Route::get("contents", "FrontController@listContents")->name('search');
Route::get("{content}/meal", "FrontController@meal")->middleware('front')->name('meal');



