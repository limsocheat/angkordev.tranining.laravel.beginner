<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    // MY CHOICE 
    protected $fillable = [
        'user_id',
        'title', 'address', 'latitude', 'longitude',
        'phone', 'email', 'website', 'description',
        'facebook', 'twitter', 'youtube'
    ];

    // protected $guard = ['id'];
}
