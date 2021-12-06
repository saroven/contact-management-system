<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact()
    {
        $allContacts = Contact::all();
        return view('public.home', ['allContacts' => $allContacts]);
    }

    public function addContact()
    {
        return view('public.addContact');
    }

    public function insertContact(Request $request)
    {
//        $request->validate([
//            'name' => 'required|string',
//            'phone' => 'required|min:10|max:11',
//            'about' => 'required|string|min:3|max:40',
//            'email' => 'sometimes|required|email',
//            'address' => 'sometimes|required',
//            'facebook' => 'sometimes|required',
//            'twitter' => 'sometimes|required',
//            'linkedIn' => 'sometimes|required',
//            'group' => 'sometimes|required',
//            'picture' => 'sometimes|required'
//        ]);
//        $fileName = '';
//        if ($request->picture != null){
//            $fileName = time().'img.'.$request->picture->getClientOriginalExtension();
//            $request->picture->move(public_path('assets/img/profile'), $fileName);
//        }
        return $request->all();
    }
}
