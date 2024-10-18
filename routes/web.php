<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('todos', \App\Http\Controllers\TodoController::class);

Route::get('todos/{todo}', [\App\Http\Controllers\TodoController::class,'destroy'])->name('todos.destory');