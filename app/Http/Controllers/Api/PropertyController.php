<?php

namespace App\Http\Controllers\Api;

use App\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PropertyResource;
use App\Http\Resources\PropertyCollection;

class PropertyController extends Controller
{
    public function property()
    {
        $properties = Property::where('user_id', '=', Auth::user()->id)->paginate(5);
        $data = PropertyCollection::collection($properties);
        return response()->json(PropertyCollection::collection($data));
    }


    public function SingleProperty($id)
    {
        $property = Property::find($id);
        $data = new PropertyResource($property);
        return $data->toJson();
    }
}
