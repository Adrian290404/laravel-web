<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'date',
        'rating',
        'review',
        'action'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'user_id');
    }
}
