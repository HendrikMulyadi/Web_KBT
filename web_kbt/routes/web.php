<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\formController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource(name: '/home',  controller: homeController::class);
Route::resource(name: '/form',  controller: formController::class);
