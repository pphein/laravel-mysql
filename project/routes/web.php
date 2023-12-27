<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks');
Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('add-task');
Route::delete('/tasks/{id}', [App\Http\Controllers\TaskController::class, 'delete']);