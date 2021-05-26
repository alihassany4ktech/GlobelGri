<?php

namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function create()
    {
        return view('agent.property.create');
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            $propert = new Property();
            $propert->agent_id = $request->agent_id;
            $propert->propert_title = $request->propert_title;
            if ($request->hasFile('gallery_photos')) {
                $images = [];
                foreach ($request->file('gallery_photos') as $image) {
                    if (!empty($propert->gallery_photos)) {
                        $image_path = $propert->gallery_photos;
                        unlink($image_path);
                    }

                    $name = time() . 'property' . '.' . $image->getClientOriginalExtension();
                    $destinationPath = 'property_images/';
                    $image->move($destinationPath, $name);
                    array_push($images, 'property_images/' . $name);
                };
                $propert->gallery_photos = json_encode($images);
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
            $propert->garages = $request->garages;
            $propert->area = $request->area;
            $propert->property_type = $request->property_type;
            $propert->propert_status = $request->propert_status;
            $propert->description = $request->description;
            // $propert->location = $request->location;
            $propert->private_note = $request->private_note;
            $propert->save();
            return response()->json([
                'success' => 'Property Add Successfully!',
            ], 200);
        }
    }
}
