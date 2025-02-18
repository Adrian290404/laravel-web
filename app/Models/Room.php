<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_name',
        'bed_type',
        'room_floor',
        'facilities',
        'rate',
        'avaiable',
        'image'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
