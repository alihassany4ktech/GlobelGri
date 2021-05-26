<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $fillable = ['phone', 'email', 'address', 'description', 'logo'];
}
