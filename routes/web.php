<?php

use App\Livewire\coba;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/anak', coba::class)->middleware('auth')->name('anak');
Route::get('/data-anak', coba::class)->middleware('auth')->name('data-anak');
