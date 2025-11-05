<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return redirect('/customers'); });
Route::resource('/customers', CustomerController::class);


Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
