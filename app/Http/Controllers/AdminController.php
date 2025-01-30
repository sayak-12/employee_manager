<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function showLogin()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        // $admin = Admin::first();
        // dd(Hash::check($validated['password'], $admin->password));
    if (Auth::guard('admin')->attempt($validated)) {
        $request->session()->regenerate();
        return redirect()->route('admin.dashboard');
    }
    throw ValidationException::withMessages(['credentials' => 'Incorrect credentials, please try again']);
    }
    public function logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->route('login');
    }
    public function add_project(){
      return view('admin.add_project');
    }
    public function project(Request $request){
        $validated = $request->validate([
            'name'=>'required|string|max:100',
            'description'=>'required|string|max:450|min:20',
            'skill_reqd'=>'required|between:1,100|integer'
        ]);
        Project::create($validated);
        return redirect()->route('admin.add_project')->with('success', 'Project created successfully!');
    }
}
