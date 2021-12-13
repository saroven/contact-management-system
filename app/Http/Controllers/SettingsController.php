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
//        $request->validate([
//            'appName' => 'required'
//        ]);
        return $request->all();
    }
}
