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
        $users = User::where('id', '!=', auth()->user()->id)->get();
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

    public function editUser($id)
    {
        $userData = User::where('id', $id)->first();

        return view('admin.editUser', ['userInfo' => $userData]);
    }

    public function updateUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:150',
            'email' => 'required|email|min:3|max:150',
            'about' => 'required|string|min:3|max:150',
            'phone' => 'required|numeric|digits:11',
            'role' => 'required|string|min:4|max:5',
            'gender' => 'required|string|max:10',
        ]);

        try {
        User::where('id' , $request->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'about' => $request->about,
                'phone' => $request->phone,
                'role' => $request->role,
                'gender' => $request->gender
            ]);

        return redirect()->back()->with('success', 'Update successful');
        }catch (\Exception $exception){
            \Log::error($exception);
            return redirect()->back()->with('error', 'Something went wrong!')->withInput();
        }
    }
}
