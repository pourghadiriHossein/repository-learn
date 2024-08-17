<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('all');
Route::get('/create', [UserController::class, 'create'])->name('create');
Route::post('/create', [UserController::class, 'store'])->name('postCreate');
Route::get('/user/{user}',[UserController::class,'show'])->name('show');
Route::get('/update/{user}', [UserController::class, 'edit'])->name('update');
Route::post('/update/{user}', [UserController::class, 'update'])->name('postUpdate');
Route::get('/delete/{user}', [UserController::class, 'destroy'])->name('delete');
