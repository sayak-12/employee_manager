<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class EmployeeController extends Controller
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
        $projects = Project::orderBy("id","asc")->get();
        return view('employees.create', ['projects' => $projects]);
    }
    public function store(Request $req){
        $validated = $req->validate([
            'name'=> 'required|string|max:255',
            'email'=> 'email|required|max:255',
            'bio'=> 'required|string|max:400|min:20',
            'project_id'=> 'required|exists:projects,id',
            'skill'=> 'required|integer|between:1,100',
        ]);
        Employee::create($validated);
        return redirect()->route('employee.create')->with('success', 'Employee created successfully!');
    }

    public function edit($id){
        $employee = Employee::findOrFail($id);
        $projects = Project::orderBy("id","asc")->get();
        return view('employees.update', ['projects' => $projects, 'employee'=> $employee]);
    }
    public function update(Request $req, $id){
        $validated = $req->validate([
            'name'=> 'required|string|max:255',
            'email'=> 'email|required|max:255',
            'bio'=> 'required|string|max:400|min:20',
            'project_id'=> 'required|exists:projects,id',
            'skill'=> 'required|integer|between:1,100',
        ]);
        $employee = Employee::findOrFail($id);
        $employee->update($validated);
        return redirect()->route('employee.show', $id)->with('success', 'Employee Updated successfully!');
    }
    public function destroy($id){
        Employee::destroy($id);
        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully!');
    }
}
