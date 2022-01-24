<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('admin.home');
    }

    public function showManageUserPage()
    {
        $users = User::paginate(10);
        return view('admin.manageUser', ['users' => $users]);
    }
}
