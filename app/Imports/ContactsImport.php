<?php

namespace App\Imports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\ToModel;

class ContactsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Contact([
            'owner_id' => auth()->user()->id,
             'name' => $row[0],
            'phone' => $row[1],
            'about' => $row[2],
            'email' => $row[3],
            'address' => $row[4],
            'facebook' => $row[5],
            'twitter' => $row[6],
            'linkedin' => $row[7],
            'group' => $row[8],
        ]);
    }
}
