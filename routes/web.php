<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContributionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('layouts.backend.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/users', UserController::class);
Route::resource('/brands', BrandController::class);
Route::resource('/employees', EmployeeController::class);
Route::resource('/factories', FactoryController::class);
Route::resource('/contributions', ContributionController::class);
Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
Route::get('/settings', [PaymentController::class, 'setting'])->name('settings.index');
Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices');
