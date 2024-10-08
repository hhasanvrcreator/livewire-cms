<?php

use App\Livewire\ImageIndex;
use App\Livewire\Tasks\TasksIndex;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::view('profile', 'profile')->name('profile');
    Route::get('/tasks', TasksIndex::class)->name('tasks.index');
    Route::get('/images', ImageIndex::class)->name('images.index');
});

require __DIR__ . '/auth.php';
