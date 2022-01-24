<?php

namespace App\Http\Controllers;

use App\Exports\ContactsExport;
use App\Imports\ContactsImport;
use App\Models\Contact;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ContactController extends Controller
{
    public function showContact()
    {
        $allContacts = Contact::paginate(12);
        $count = [
            'all' => Contact::all()->count(),
            'family' => Contact::where('group', 'Family')->count(),
            'friend' => Contact::where('group', 'Friends')->count(),
            'client' => Contact::where('group', 'Clients')->count()
        ];

        $familyContacts = Contact::where('group', 'Family')->paginate(12);
        $friendContacts = Contact::where('group', 'Friends')->paginate(12);
        $clientContacts = Contact::where('group', 'Clients')->paginate(12);

        return view('public.home',
            [
                'allContacts' => $allContacts,
                'familyContacts' => $familyContacts,
                'friendContacts' => $friendContacts,
                'clientContacts' => $clientContacts,
                'count' => $count
            ]);
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
            $contact->owner_id = \Auth::user()->id;
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
                return redirect()->back()->with('error', 'Something went wrong');
            }
        }catch (\Exception $e){
            \Log::error($e);
             return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function importExport()
    {
        return view('public.importExport');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx'
        ]);
        Excel::import(new ContactsImport, $request->file('file')->store('temp'));
        return back()->with('success', 'Imported Successful');
    }

    public function export()
    {
        return Excel::download(new ContactsExport, 'Contacts.xlsx');
    }

    public function edit($id)
    {
        $data = Contact::where('id', $id)->first();
        return view('public.edit', ['data'=> $data]);
    }
    public function update(Request $request)
    {
        $data = Contact::where('id', $request->id)->first();
        if ($data){
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
                    if ($data->picture != null){
                        $img = explode("/",$data->picture);
                         if (\File::exists(public_path('assets/img/profile').'/'.$img[3])){
                            unlink(public_path('assets/img/profile').'/'.$img[3]);
                        }
                    }
                    $fileName = time().'img.'.$request->picture->getClientOriginalExtension();
                    $request->picture->move(public_path('assets/img/profile'), $fileName);
                    $filePath = 'assets/img/profile/'.$fileName;
                }else{
                    $filePath = $data->picture;
                }

                $contact = Contact::where('id', $request->id)->
                    where('owner_id', \Auth::user()->id)->
                    update(['name' => $request->name,
                            'phone' => $request->phone,
                            'about' => $request->about,
                            'email' => $request->email,
                            'address' => $request->address,
                            'facebook' => $request->facebook,
                            'twitter' => $request->twitter,
                            'linkedIn' => $request->linkedIn,
                            'group' => $request->group,
                            'picture' => $filePath]);

                if ($contact){
                    //success
                    return redirect()->route('home')->with('success', 'Updated Successful');
                }else{
                    //error
                    return redirect()->back()->with('error', 'Something went wrong');
                }
            }catch (\Exception $e){
                \Log::error($e);
                 return redirect()->back()->with('error', 'Something went wrong');
            }
            }
    }

    public function delete($id)
    {
        return "Delete";
    }
}
