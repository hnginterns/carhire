<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pickup_location', 'duration', 'booking_time',
    ];
}
