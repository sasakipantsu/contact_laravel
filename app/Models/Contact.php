<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        // 'lastname',
        // 'firstname',
        'gender',
        'email',
        'postal_code',
        'address',
        'building_name',
        'option',
    ];

    // protected $appends = ['full_name'];

    // public function getFullNameAttribute()
    // {
    //     return $this->last_name . ' ' . $this->first_name;
    // }
}
