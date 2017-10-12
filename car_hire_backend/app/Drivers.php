<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone_number',
    ];

}
