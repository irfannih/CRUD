<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\KeahlianController;


// Route Login
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Dashboard
Route::get('/dashboard', function () {
    return view('crud/dashboard');
})->middleware('auth')->name('dashboard');

// Route CRUD

Route::get('/crud', [KeahlianController::class, 'index'])->name('crud.index');
Route::get('/crud/create', [KeahlianController::class, 'create'])->name('crud.create');
Route::post('/crud/store', [KeahlianController::class, 'store'])->name('crud.store');
Route::get('/crud/edit/{id}', [KeahlianController::class, 'edit'])->name('crud.edit');
Route::put('/crud/update/{id}', [KeahlianController::class, 'update'])->name('crud.update');
Route::delete('/crud/delete/{id}', [KeahlianController::class, 'destroy'])->name('crud.delete');

