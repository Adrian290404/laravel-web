<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'image',
        'join_date',
        'job_desk',
        'schedule',
        'contact'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'user_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'user_id');
    }
}
