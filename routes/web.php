<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::resource('tasks',TasksController::class);

Route::get('/',[TasksController::class,'index'])->name('root');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
