<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeCotroller extends Controller
{
    public function index(){
        $employees = Employee::orderBy('name', 'desc')->paginate(10);
        return view('employees.list', ["employees" => $employees]);
    }
    public function show($id){
        $emp = Employee::findOrFail($id);
        return view('employees.show', ["emp" => $emp]);
    }
    public function create(){
        return view('employees.create');
    }
}
