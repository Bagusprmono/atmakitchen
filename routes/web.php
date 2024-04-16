<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["judul" => "Home"]);
});
Route::get('/catalog', function(){
    return view('catalog', ["judul" => "Catalog"]);
});
