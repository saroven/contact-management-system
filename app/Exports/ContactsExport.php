<?php

namespace App\Exports;

use App\Models\Contact;
use Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class ContactsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $contacts = Contact::where('owner_id', Auth::user()->id)->get();

        $contacts->makeHidden(['id','owner_id','picture','created_at', 'updated_at']);

        return $contacts;
    }
}
