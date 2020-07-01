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

//default laravel
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/master", function(){
    return view('adminlte/master');
});

Route::get("/items", function(){
    return view("items.index");
});

Route::get("/create", function(){
    return view("items.create");
});

// tugas

Route::get("/", function(){
    return view("templating-blade.index");
});

Route::get("/data-tables", function(){
    return view("templating-blade.data-tables");
});