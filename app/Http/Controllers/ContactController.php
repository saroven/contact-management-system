<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact()
    {
        return view('public.home');
    }

    public function addContact()
    {
        return view('public.addContact');
    }

    public function insertContact(Request $request)
    {
        $request->validate([
            'name' => 'integer'
        ]);
        return $request->all();
    }
}
