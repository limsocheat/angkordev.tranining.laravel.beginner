<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    // MY CHOICE 
    protected $fillable = [
        'user_id', 'category_id',
        'title', 'address', 'latitude', 'longitude',
        'phone', 'email', 'website', 'description',
        'facebook', 'twitter', 'youtube',
        'image'
    ];

    // protected $guard = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // ATTRIBUTE
    public function getAddedByAttribute()
    {
        return $this->user ? $this->user->name : 'NA';
    }

    public function getCategoryNameAttribute()
    {
        return $this->category ? $this->category->name : 'NA';
    }
}
