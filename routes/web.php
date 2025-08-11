<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'king' => "King Illidan Stormrage xD",
        'population' => 4348
    ]);
});

Route::get('/dungeon', function (){
    return view('dungeon');
});

Route::get('/tavern', function () {
    return view('tavern');
});

Route::post('/fight', function () {
    return "You defeated the dragon!";
});
