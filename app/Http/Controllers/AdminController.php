<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('admin.home');
    }

    public function showManageUserPage()
    {
        $users = User::all();
        return view('admin.manageUser', ['users' => $users]);
    }

    public function addUser(Request $request)
    {
            $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'min:10','max:11'],
            'role' => ['required', 'string', 'min:4','max:5'],
            'password' => ['required', 'min:6', 'max:255'],
            ]);
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role' => $request->role,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('success', 'User Added Successful');

        }catch (\Exception $exception){
            \Log::error($exception);
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }

    }
}
