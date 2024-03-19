<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;

Route::get('/', [ToDoListController::class, 'index']);

Route::post('/saveItemRoute', [ToDoListController::class, 'saveItem'])->name('saveItem');

Route::post('/removeItem/{id}', [ToDoListController::class,  'removeItem'])->name('removeItem');
