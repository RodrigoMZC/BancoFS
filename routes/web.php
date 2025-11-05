<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
