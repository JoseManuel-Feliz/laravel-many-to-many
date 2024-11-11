<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Guest\ProjectController as GuestProjectController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::name('guest.')->group(function () {
    Route::get('/projects', [GuestProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/{id}', [GuestProjectController::class, 'show'])->name('projects.show');
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/projects', [AdminProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [AdminProjectController::class, 'create'])->name('projects.create');
    Route::get('/projects/edit{id}', [AdminProjectController::class, 'edit'])->name('projects.edit');
    Route::get('/projects/{id}', [AdminProjectController::class, 'show'])->name('projects.show');
    Route::put('/projects/{id}', [AdminProjectController::class, 'update'])->name('projects.update');
    Route::post('/projects', [AdminProjectController::class, 'store'])->name('projects.store');
    Route::delete('/projects/{id}', [AdminProjectController::class, 'destroy'])->name('projects.delete');
});
