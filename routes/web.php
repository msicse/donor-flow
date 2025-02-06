<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContributionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('login');
})->name('home');

// Auth Routes 

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/roles', RoleController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/brands', BrandController::class);
    Route::resource('/employees', EmployeeController::class);
    Route::resource('/factories', FactoryController::class);
    Route::resource('/contributions', ContributionController::class);
    Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
    Route::get('/settings', [PaymentController::class, 'setting'])->name('settings.index');
    Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices');
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
