<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return redirect('/customers'); });
Route::resource('/customers', CustomerController::class);
Route::resource('/employes', EmployeController::class);

Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
