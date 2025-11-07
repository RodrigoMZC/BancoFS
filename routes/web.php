<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\BranchesController;
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

Route::get('/branches', [BranchesController::class, 'index'])->name('branches.index');
Route::get('/branches/create', [BranchesController::class, 'create'])->name('branches.create');
Route::post('/branches', [BranchesController::class, 'store'])->name('branches.store');
Route::get('/branches/{branch}', [BranchesController::class, 'show'])->name('branches.show');
Route::get('/branches/{branch}/edit', [BranchesController::class, 'edit'])->name('branches.edit');
Route::put('/branches/{branch}', [BranchesController::class, 'update'])->name('branches.update');
Route::delete('/branches/{branch}', [BranchesController::class, 'destroy'])->name('branches.destroy');

