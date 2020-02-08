<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'title', 'address', 'latitude', 'longitude',
        'phone', 'email', 'website', 'description',
        'facebook', 'twitter', 'youtube'
    ];
}
