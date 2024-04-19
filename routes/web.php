<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/formpostingan', [PostController::class, 'formpostingan'])->name('formpostingan');
Route::post('/buatpostingan', [PostController::class, 'buatpostingan'])->name('buatpostingan');
Route::get('/lihatpostingan',[PostController::class, 'lihatpostingan'])->name('lihatpostingan');
Route::get('/formedit/{id}',[PostController::class, 'formedit'])->name('formedit');
Route::post('/updatepostingan/{id}', [PostController::class, 'updatepostingan'])->name('updatepostingan');
Route::get('/hapuspostingan/{id}', [PostController::class, 'hapuspostingan'])->name('hapuspostingan');
