<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["greeting" => "Laravel"]);
});
// user routes, for everyone
Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employees/create', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employees/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employees/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employee.show');

// admin routes, for only admin

Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/login', [AdminController::class, 'login'])->name('admin.signin');

Route::middleware(['auth:admin'])->group(function (){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/addproject', [AdminController::class, 'add_project'])->name('admin.add_project');
    Route::post('/admin/addproject', [AdminController::class, 'project'])->name('admin.project');
});
