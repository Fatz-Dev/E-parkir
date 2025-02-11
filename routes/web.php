<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Beranda;
use App\Livewire\HalKendaraan;
use App\Livewire\Halinputparkir;
use App\Livewire\Halbayarparkir;




Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', Beranda::class)->middleware('auth')->name('home');
Route::get('/kendaraan', HalKendaraan::class)->middleware('auth');
Route::get('/inputparkir', Halinputparkir::class)->middleware('auth');
Route::get('/bayarParkir', Halbayarparkir::class)->middleware('auth');
