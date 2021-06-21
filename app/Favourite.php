<?php

namespace App;

use App\Property;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    // protected $fillable = ['user_id', 'property_id'];


    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }
}
