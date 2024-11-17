<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SemestreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CoursesController;

Route::get('/panel', [PanelController::class, 'show'])->name('panel')->middleware('auth');

// Elementos creados
// Route::resource('tickets', TicketController::class);
// Route::resource('courses', CoursesController::class);
Route::resource('/semestres', SemestreController::class);

// Bienvenida y vista general
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
