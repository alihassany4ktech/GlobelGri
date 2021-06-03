<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['gallery_photos'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
