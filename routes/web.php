<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["greeting" => "Laravel"]);
});
Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employees/create', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employees/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employees/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employee.show');