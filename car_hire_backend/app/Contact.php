<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillabble = ['name', 'message',

'phone_number', 'attachment', 'email', 'company',];
}
