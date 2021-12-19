<?php

namespace App\Imports;

use App\Models\Contact;
use App\Models\User as U;
use http\Client\Curl\User;
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
             'name' => $row[1],
            'phone' => $row[2],
            'about' => $row[3],
            'email' => $row[4],
            'address' => $row[5],
            'facebook' => $row[6],
            'twitter' => $row[7],
            'linkedin' => $row[8],
            'group' => $row[9],
        ]);
    }
}
