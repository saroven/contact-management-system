<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;

class ContactsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $contacts = Contact::all();

        $contacts->makeHidden(['owner_id','picture','created_at', 'updated_at']);

        return $contacts;
    }
}
