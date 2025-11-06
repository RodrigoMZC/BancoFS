<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return redirect('/customers'); });
Route::resource('/customers', CustomerController::class);
Route::resource('/employes', EmployeController::class);

//Rutas para accounts
Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
Route::get('/accounts/create', [AccountController::class, 'create'])->name('accounts.create');
Route::post('/accounts', [AccountController::class, 'store'])->name('accounts.store');
Route::get('/accounts/{account}', [AccountController::class, 'show'])->name('accounts.show');
Route::get('/accounts/{id}/edit', [AccountController::class, 'edit'])->name('accounts.edit');
Route::put('/accounts/{id}', [AccountController::class, 'update'])->name('accounts.update');
Route::delete('/accounts/{id}', [AccountController::class, 'destroy'])->name('accounts.destroy');
