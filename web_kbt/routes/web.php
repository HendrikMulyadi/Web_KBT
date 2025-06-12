<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\formController;
use App\Http\Controllers\kendaraanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrasiController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource(name: '/home',  controller: homeController::class);
Route::resource(name: '/form',  controller: formController::class);
Route::resource(name: '/login',  controller: loginController::class);
Route::resource(name: '/registrasi',  controller: registrasiController::class);
Route::resource(name: '/kendaraan',  controller: kendaraanController::class);

//Route::get('/registrasi', [RegistrasiController::class, 'create'])->name('registrasi');
Route::post('/registrasi', [RegistrasiController::class, 'store'])->name('registrasi.store');
Route::get('/mobils/{id}', [homeController::class, 'show'])->name('mobils.show');

Route::get('/form', [FormController::class, 'create'])->name('forms.create');
Route::post('/form', [FormController::class, 'store'])->name('forms.store');

Route::get('/mobil/{id}/harga', [FormController::class, 'getHargaMobil']);
Route::get('/form', [FormController::class, 'create']);
