<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function show()
    {
        return view('public.siteConfiguration');
    }
    public function update(Request $request)
    {
        $settingData = Setting::first();

        $request->validate([
            'appName' => 'required|string|min:0|max:15',
            'appDescription' => 'required|string|min:0|max:125',
            'appKeyword' => 'required|string|min:0|max:150',
            'appLanguage' => 'required|string|min:0|max:5',
            'userRegistration' => 'nullable|string|min:0|max:5',
        ]);
        try {
            if (!$settingData){
            Setting::create([
                'appName' => $request->appName,
                'appDescription' => $request->appDescription,
                'appKeyword' => $request->appKeyword,
                'appLanguage' => $request->appLanguage,
                'userRegistration' => $request->userRegistration,
            ]);
            return redirect()->back()->with('success', 'Updated Successful');
        }else {
                Setting::where('id', $settingData->id)->update([
                    'appName' => $request->appName ?? $settingData->appName,
                    'appDescription' => $request->appDescription ?? $settingData->appDescription,
                    'appKeyword' => $request->appKeyword ?? $settingData->appKeyword,
                    'appLanguage' => $request->appLanguage ?? $settingData->appLanguage,
                    'userRegistration' => $request->userRegistration ?? $settingData->userRegistration,
                ]);
                return redirect()->back()->with('success', 'Updated Successful');
            }
        }catch (\Exception $exception){
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
