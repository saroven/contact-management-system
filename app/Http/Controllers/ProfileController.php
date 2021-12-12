<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfilePage()
    {
        $loggedUserInfo = User::where('id', \Auth::user()->id)->first();

        return view('public.profile', ['userInfo' => $loggedUserInfo]);
    }
    public function updateProfile(Request $request)
    {
//        return $request->all();
        $loggedUser = \Auth::user();
        $request->validate([
            'name' => 'required|string|min:3|max:150',
            'email' => 'required|email|min:3|max:150',
            'about' => 'required|string|min:3|max:150',
            'phone' => 'required|numeric|digits:11',
            'gender' => 'required|string|max:10',
        ]);

        try {
            //update user name
        User::where('id' , auth()->user()->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'about' => $request->about,
                'phone' => $request->phone,
                'gender' => $request->gender
            ]);

        return redirect()->back()->with('success', 'Update successful');
        }catch (\Exception $exception){
            \Log::error($exception);
            return redirect()->back()->with('error', 'Something went wrong!')->withInput();
        }
    }
}
