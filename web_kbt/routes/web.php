<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource(name: '/home',  controller: homeController::class);
