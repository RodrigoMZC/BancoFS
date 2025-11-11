<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\BranchesController;
use App\Http\Controllers\TransactionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return redirect('/customers'); });
Route::resource('/customers', CustomerController::class);
Route::resource('/employes', EmployeController::class);
Route::resource('/accounts', AccountController::class);
Route::resource('/branches', BranchesController::class);
Route::resource('/transactions', TransactionsController::class);

/*Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers|.update');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');

//Rutas para accounts
Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
Route::get('/accounts/create', [AccountController::class, 'create'])->name('accounts.create');
Route::post('/accounts', [AccountController::class, 'store'])->name('accounts.store');
Route::get('/accounts/{id}/edit', [AccountController::class, 'edit'])->name('accounts.edit');
Route::put('/accounts/{id}', [AccountController::class, 'update'])->name('accounts.update');
Route::delete('/accounts/{id}', [AccountController::class, 'destroy'])->name('accounts.destroy');
Route::get('/accounts/{id}', [AccountController::class, 'show'])->name('accounts.show');

Route::get('/branches', [BranchesController::class, 'index'])->name('branches.index');
Route::get('/branches/create', [BranchesController::class, 'create'])->name('branches.create');
Route::post('/branches', [BranchesController::class, 'store'])->name('branches.store');
Route::get('/branches/{branch}', [BranchesController::class, 'show'])->name('branches.show');
Route::get('/branches/{branch}/edit', [BranchesController::class, 'edit'])->name('branches.edit');
Route::put('/branches/{branch}', [BranchesController::class, 'update'])->name('branches.update');
Route::delete('/branches/{branch}', [BranchesController::class, 'destroy'])->name('branches.destroy');

Route::get('/transactions', [TransactionsController::class, 'index'])->name('transactions.index');
Route::get('/transactions/create', [TransactionsController::class, 'create'])->name('transactions.create');
Route::post('/transactions', [TransactionsController::class, 'store'])->name('transactions.store');
Route::get('/transactions/{transaction}', [TransactionsController::class, 'show'])->name('transactions.show');
Route::get('/transactions/{transaction}/edit', [TransactionsController::class, 'edit'])->name('transactions.edit');
Route::put('/transactions/{transaction}', [TransactionsController::class, 'update'])->name('transactions.update');
Route::delete('/transactions/{transaction}', [TransactionsController::class, 'destroy'])->name('transactions.destroy');*/
