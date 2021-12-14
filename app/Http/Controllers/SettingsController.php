<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function show()
    {
        return view('public.siteConfiguration');
    }
    public function update(Request $request)
    {
        $request->validate([
            'appName' => 'required|string|min:0|max:15',
            'appDescription' => 'required|string|min:0|max:125',
            'appKeyword' => 'required|string|min:0|max:150',
            'appLanguage' => 'required|string|min:0|max:5',
            'userRegistration' => 'nullable|string|min:0|max:5',
        ]);
        return $request->all();
    }
}
