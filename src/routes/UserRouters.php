<?php
Route::get('/kayitol',[App\Http\Controllers\UserController::class,'kayitformu'])->name('kayitformu');
Route::post('/kayitol',[App\Http\Controllers\UserController::class,'kayitol'])->name('kayitol');