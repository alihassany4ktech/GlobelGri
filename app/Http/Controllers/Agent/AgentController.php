<?php

namespace App\Http\Controllers\Agent;

use App\User;
use App\Contact;
use App\Property;
use App\GeneralSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\PropertyResource;
use App\Http\Resources\PropertyCollection;

class AgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('UserBlock');
    }

    public function dashboard()
    {

        return view('agent.dashboard');
    }


    public function profileupdate(Request $request)
    {
        if ($request->ajax()) {
            $this->validate($request, [
                'name' => 'required|min:3|max:50'
            ]);
            $id = $request->id;
            $profile = User::find($id);
            $profile->name = $request->name;
            $profile->phone = $request->phone;
            $profile->address = $request->address;
            $profile->biography = $request->biography;
            if ($request->hasfile('image')) {
                if (!empty($profile->image)) {
                    $image_path = $profile->image;
                    unlink($image_path);
                }
                $image = $request->file('image');
                $name = time() . 'profile' . '.' . $image->getClientOriginalExtension();
                $destinationPath = 'profile_images/';
                $image->move($destinationPath, $name);
                $profile->image = 'profile_images/' . $name;
            }

            $profile->update();
            return response()->json([
                'success' => 'Profile Updated Successfully!',
            ]);
        }
    }

    public function passwordupdate(Request $request)
    {
        if ($request->ajax()) {

            $this->validate($request, [
                'password' => 'required|confirmed|min:6',
            ]);
            $id = $request->id;
            $profile = User::find($id);
            $profile->password = Hash::make($request->password);
            $profile->update();
            return response()->json([
                'success' => 'Password Updated Successfully!',
            ]);
        }
    }

    public function social_media_update(Request $request)
    {
        if ($request->ajax()) {

            $id = $request->id;
            $profile = User::find($id);
            $profile->facebook_url = $request->facebook_url;
            $profile->twitter_url = $request->twitter_url;
            $profile->linkedin_url = $request->linkedin_url;
            $profile->instagram_url = $request->instagram_url;
            $profile->google_url = $request->google_url;
            $profile->skype_url = $request->skype_url;
            $profile->update();
            return response()->json([
                'success' => 'Social Media Updated Successfully!',
            ]);
        }
    }

    public function property()
    {
        $properties = Property::where('user_id', '=', Auth::user()->id)->paginate(5);
        $data = PropertyCollection::collection($properties);
        return view('agent.property.all', compact('data')); // for view
        // return response()->json(PropertyCollection::collection($properties)); for api
    }

    public function SingleProperty($id)
    {
        $property = Property::find($id);
        $data = new PropertyResource($property);
        // dd($data->gallery_photos);
        // return $data->toJson();  for api 
        return view('agent.property.single', compact('data')); // for view
    }

    public function EditProperty($id)
    {
        $property = Property::find($id);
        return view('agent.property.edit', compact('property'));
    }

    public function DeleteProperty($id)
    {
        $property = Property::find($id);
        $property->delete();
        return redirect()->back();
    }

    public function contacts()
    {

        $contacts = Contact::all();

        return view('agent.contacts', compact('contacts'));
    }
}
