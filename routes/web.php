<?php

use App\Http\Controllers\EmployeeCotroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["greeting" => "Laravel"]);
});
Route::get('/employees', [EmployeeCotroller::class, 'index'])->name('employee.index');
Route::get('/employees/create', [EmployeeCotroller::class, 'create'])->name('employee.create');
Route::get('/employees/{id}', [EmployeeCotroller::class, 'show'])->name('employee.show');

