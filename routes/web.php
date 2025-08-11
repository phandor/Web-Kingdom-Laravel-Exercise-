<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dungeon', function (){
    return view('dungeon');
});

Route::get('/fight', function () {
    return "You defeated the dragon!";
});