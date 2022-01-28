<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use SebastianBergmann\Diff\Exception;

class SocialLogin extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $userExist = User::where('oauth_id', $user->id)->where('oauth_type', 'google')->first();
            if ($userExist){
                \Auth::login($userExist);
                 return redirect()->route('home');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'oauth_id' => $user->id,
                    'oauth_type' => 'facebook',
                    'password' => \Hash::make($user->id)
                ]);

                \Auth::login($newUser);
                return redirect()->route('home');
            }
        }catch (Exception $exception){
            \Log::error($exception);
        }
    }


    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $userExist = User::where('oauth_id', $user->id)->where('oauth_type', 'google')->first();
            if ($userExist){
                \Auth::login($userExist);
                 return redirect()->route('home');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'oauth_id' => $user->id,
                    'oauth_type' => 'google',
                    'password' => \Hash::make($user->id)
                ]);

                \Auth::login($newUser);
                return redirect()->route('home');
            }
        }catch (Exception $exception){
            \Log::error($exception);
        }
    }
}
