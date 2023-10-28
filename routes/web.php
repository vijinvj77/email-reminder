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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('/reminders')->name('reminders.')->group(function () {
    Route::get('/', [App\Http\Controllers\ReminderController::class, 'index'])->name('list');
    Route::get('/create', [App\Http\Controllers\ReminderController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\ReminderController::class, 'store'])->name('store');
    Route::get('/edit/{reminder}', [App\Http\Controllers\ReminderController::class, 'edit'])->name('edit');
    Route::post('/update/{reminder}', [App\Http\Controllers\ReminderController::class, 'update'])->name('update');
    Route::post('/delete/{reminder}', [App\Http\Controllers\ReminderController::class, 'delete'])->name('delete');
});