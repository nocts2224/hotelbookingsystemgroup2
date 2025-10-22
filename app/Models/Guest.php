<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
protected $fillable = ['name', 'email', 'contact_number'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
