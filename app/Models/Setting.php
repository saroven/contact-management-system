<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'appName',
        'appDescription',
        'appKeyword',
        'appLanguage',
        'userRegistration',
        'appLogo'
    ];
}
