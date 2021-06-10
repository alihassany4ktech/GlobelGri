<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['owner_id', 'property_id', 'type', 'date', 'phone', 'email', 'check', 'message'];
}
