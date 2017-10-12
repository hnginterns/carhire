<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand', 'model', 'image',
    ];
}
