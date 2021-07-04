<?php

namespace App;

use App\Property;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = ['unit_name', 'unit_price', 'property_id', 'propety_title', 'ownership_id'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
