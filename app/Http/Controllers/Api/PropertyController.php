<?php

namespace App\Http\Controllers\Api;

use App\Favourite;
use App\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\FavoritePropertyCollection;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PropertyResource;
use App\Http\Resources\PropertyCollection;

class PropertyController extends Controller
{


    public function favoriteProperties()
    {
        $properties_id = Favourite::where('user_id', '=', Auth::user()->id)->pluck('property_id');
        $favoriteProperties = Property::whereIn('id', $properties_id)->paginate(5);
        $data = FavoritePropertyCollection::collection($favoriteProperties);
        return response()->json(FavoritePropertyCollection::collection($data));
    }

    public function singleFavoriteProperty($id)
    {
        $favoriteProperty = Property::find($id);
        $data = new PropertyResource($favoriteProperty);
        return $data->toJson();
    }

    // old 
    public function property()
    {
        $properties = Property::where('user_id', '=', Auth::guard('api')->user()->id)->get();
        $data = PropertyCollection::collection($properties);
        return response()->json(PropertyCollection::collection($data));
    }


    public function SingleProperty($id)
    {
        $property = Property::find($id);
        $data = new PropertyResource($property);
        return $data->toJson();
    }

    public function store(Request $request)
    {
        $propert = new Property();
        $propert->user_id = $request->agent_id;
        $propert->propert_title = $request->propert_title;
        if ($request->hasFile('gallery_photos')) {
            foreach ($request->file('gallery_photos') as $image) {
                $name = time() . 'gallery' . '.' . $image->getClientOriginalName();
                $destinationPath = 'gallery/';
                $image->move($destinationPath, $name);
                $data[] = $name;
                $propert->gallery_photos = json_encode($data);
            }
        }

        if ($request->hasFile('featured_photo')) {
            if (!empty($propert->featured_photo)) {
                $image_path = $propert->featured_photo;
                unlink($image_path);
            }
            $image = $request->file('featured_photo');
            $name = time() . 'property' . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'property_featured_image/';
            $image->move($destinationPath, $name);
            $propert->featured_photo = 'property_featured_image/' . $name;
        }


        $propert->price = $request->price;
        $propert->bedroom = $request->bedroom;
        $propert->bathroom = $request->bathroom;
        $request->garages ? $propert->garages = $request->garages : '';
        $propert->area = $request->area;
        $propert->property_type = $request->property_type;
        $propert->description = $request->description;
        $propert->latitude = $request->latitude;
        $propert->longitude = $request->longitude;
        $propert->address = $request->address;
        $propert->zipcode = $request->zipcode;
        $propert->private_note = $request->private_note;
        $propert->save();
        $success['success'] = 'Property Add Successfully!';
        return response()->json($success, 200);
    }
}
