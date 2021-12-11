<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact()
    {
        $allContacts = Contact::all();

        $familyContacts = Contact::where('group', 'Family')->get();
        $friendContacts = Contact::where('group', 'Friends')->get();
        $clientContacts = Contact::where('group', 'Clients')->get();
        return view('public.home', ['allContacts' => $allContacts, 'familyContacts' => $familyContacts, 'friendContacts' => $friendContacts, 'clientContacts' => $clientContacts]);
    }

    public function addContact()
    {
        return view('public.addContact');
    }

    public function insertContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|min:10|max:11',
            'about' => 'required|string|min:3|max:40',
            'email' => 'nullable|email|min:4|max:255',
            'address' => 'nullable|string|min:1|max:255',
            'facebook' => 'nullable|string|min:0|max:255',
            'twitter' => 'nullable|string|min:0|max:255',
            'linkedIn' => 'nullable|string|min:0|max:255',
            'group' => 'nullable|string|min:0|max:255',
            'picture' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        try {
            $filePath = '';
            if ($request->picture != null){
                $fileName = time().'img.'.$request->picture->getClientOriginalExtension();
                $request->picture->move(public_path('assets/img/profile'), $fileName);
                $filePath = 'assets/img/profile/'.$fileName;

            }

            $contact = new Contact;
            $contact->name = $request->name;
            $contact->phone = $request->phone;
            $contact->about = $request->about;
            $contact->email = $request->email;
            $contact->address = $request->address;
            $contact->facebook = $request->facebook;
            $contact->twitter = $request->twitter;
            $contact->linkedIn = $request->linkedIn;
            $contact->group = $request->group;
            $contact->picture = $filePath;

            if ($contact->save()){
                //success
                return redirect()->route('home')->with('success', 'Added Successful');
            }else{
                //error
                return redirect()->back()->with('success', 'Something went wrong');
            }
        }catch (\Exception $e){
            \Log::error($e);
             return redirect()->back()->with('success', 'Something went wrong');
        }
    }
}
