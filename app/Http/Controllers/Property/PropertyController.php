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
            $propert->garages = $request->garages;
            $propert->area = $request->area;
            $propert->property_type = $request->property_type;
            $propert->description = $request->description;
            $propert->latitude = $request->latitude;
            $propert->longitude = $request->longitude;
            $propert->private_note = $request->private_note;
            $propert->save();
            return response()->json([
                'success' => 'Property Add Successfully!',
            ], 200);
        }
    }


    public function update(Request $request)
    {
        if ($request->ajax()) {
            $propert = Property::find($request->property_id);
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
            $propert->garages = $request->garages;
            $propert->area = $request->area;
            $propert->property_type = $request->property_type;
            $propert->description = $request->description;
            $propert->latitude = $request->latitude;
            $propert->longitude = $request->longitude;
            $propert->private_note = $request->private_note;
            $propert->update();
            return response()->json([
                'success' => 'Property Update Successfully!',
            ], 200);
        }
    }
}