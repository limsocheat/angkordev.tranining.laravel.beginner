<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{

    protected $fillable = [
        'phone', 'address', 'website', 'note',
        'facebook', 'twitter', 'youtube', 'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
