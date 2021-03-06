<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
            'owner_id',
            'name',
            'phone',
            'about',
            'email',
            'address',
            'facebook',
            'twitter',
            'linkedin',
            'group',
            'picture'
    ];
}
