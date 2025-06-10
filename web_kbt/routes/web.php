<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\formController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrasiController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource(name: '/home',  controller: homeController::class);
Route::resource(name: '/form',  controller: formController::class);
Route::resource(name: '/login',  controller: loginController::class);
Route::resource(name: '/registrasi',  controller: registrasiController::class);
Route::post('/registrasi', [registrasiController::class, 'store'])->name('registrasi.store');

