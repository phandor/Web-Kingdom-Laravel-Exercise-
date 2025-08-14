<?php

use App\Http\Controllers\OverviewController;
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

Route::post('/dragonfight', function () {
    return "You defeated the dragon!";
});

Route::controller(OverviewController::class)->group(function(){
    Route::get('/overview', 'index');
    Route::get('/inventory', 'getInventory');
});
