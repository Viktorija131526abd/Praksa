<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/admin/create-headmaster', [UserController::class, 'createHeadmasterForm'])->name('admin.create_headmaster');
    Route::post('/admin/store-headmaster', [UserController::class, 'storeHeadmaster'])->name('admin.store_headmaster');

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/headmasters', [UserController::class, 'index_headmasters']);
    Route::get('/professors', [UserController::class, 'index_professors']);
    Route::get('/students', [UserController::class, 'index_students']);

    Route::get('/professor/add_class', [UserController::class, 'createClassForm'])->name('professor.add_class');
    Route::get('/professor/menage_class', [UserController::class, 'menageClass'])->name('professor.menage_class');
    Route::post('/professor/storeClass', [UserController::class, 'storeClass'])->name('professor.storeClass');
    Route::get('/professor/create_student', [UserController::class, 'createStudentForm'])->name('professor.create_student');
    Route::post('/professor/create_student', [UserController::class, 'storeStudent'])->name('professor.store_student');


    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

require __DIR__.'/auth.php';
