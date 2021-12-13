<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function changePassword()
    {
        return view('authentication.changeUserPass');
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
           'currentPassword' => 'required|string|min:6|max:255',
            'newPassword' => 'required|string|min:6|max:255',
            'confirmPassword' => 'required|string|min:6|max:255|same:newPassword'
        ]);

        $checkPassword =  Hash::check($request->currentPassword, auth()->user()->password);
        if ($checkPassword){
            //password matched with current password
            try {
                $status = User::where('id', auth()->user()->id)
                ->update(['password' => Hash::make($request->newPassword)]);
                if ($status){
                    return redirect()->back()->with('success', 'Password Updated');
                }else{
                    return redirect()->back()->with('error', 'Something went wrong!');
                }
            }catch (\Exception $exception){
                \Log::error($exception);
                return redirect()->back()->with('error', 'Something went wrong!');
            }
        }else{
            //password not matched with current password
            return redirect()->back()->with('error', 'Password doesn\'t matched with current password');
        }
    }
}
