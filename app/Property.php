<?php

namespace App;

use App\Unit;
use App\Favourite;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['user_id', 'propert_title', 'price', 'bedroom', 'bathroom', 'garages', 'area', 'property_type', 'property_status', 'description', 'address', 'latitude', 'zipcode', 'longitude', 'private_note', 'gallery_photos', 'featured_photo'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function favourites()
    {
        return $this->belongsToMany(Favourite::class);
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}
