<?php

namespace App\Http\Controllers\Agent;

use App\User;
use App\Contact;
use App\Property;
use App\Favourite;
use App\Threesixty;
use App\Subscription;
use App\GeneralSetting;
use Illuminate\Http\Request;
use App\PurchasedSubscription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\PropertyResource;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PropertyCollection;
use App\Notifications\ThreesixtyNotification;

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
            $rules = array('name' => 'required|min:3|max:50');


            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json([
                    'error'  => $error->errors()->all()
                ]);
            }
            $id = $request->id;
            $profile = User::find($id);
            $profile->name = $request->name;
            $profile->phone = $request->phone;
            $profile->address = $request->address;
            $profile->biography = $request->biography;
            if ($request->hasfile('image')) {
                if (!empty($profile->image) && ($profile->image != "dist/img/agentPic.png")) {
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
            $rules = array('password' => 'required|confirmed|min:6');
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json([
                    'error'  => $error->errors()->all()
                ]);
            }
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
        $role = Auth::user()->getRoleNames()->isEmpty() ? '' : Auth::user()->getRoleNames()[0];

        if ($role == "Property Manager") {
            $properties = Property::where('user_id', '=', Auth::user()->creater_id)->paginate(5);
        } else {
            $properties = Property::where('user_id', '=', Auth::user()->id)->paginate(5);
        }


        $data = PropertyCollection::collection($properties);
        return view('agent.property.all', compact('data'));
    }

    public function SingleProperty($id)
    {
        $property = Property::find($id);
        $mapShops = new PropertyResource($property);
        return view('agent.property.single', compact('mapShops'));
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
        return redirect()->back()->with(['delete_property' => 'Property Deleted Successfully']);
    }

    public function favouriteProperty()
    {
        $properties_id = Favourite::where('user_id', '=', Auth::user()->id)->pluck('property_id');
        $data = Property::whereIn('id', $properties_id)->paginate(5);
        return view('agent.property.favourite', compact('data'));
    }

    public function contacts()
    {
        $contacts = Contact::where('owner_id', '=', Auth::user()->id)->get();
        return view('agent.contacts', compact('contacts'));
    }

    // new 

    public function agentSubscription()
    {
        $data = Subscription::where('agent_role', '=', Auth::user()->role->agent_role)->where('status', '=', 1)->paginate(5);
        return view('agent.subscription.all', compact('data'));
    }

    public function purchasedSubscription()
    {
        $purchasedSubscription = PurchasedSubscription::where('agent_id', '=', Auth::user()->id)->first();
        return view('agent.subscription.purchased', compact('purchasedSubscription'));
    }

    public function storeRequest(Request $request)
    {
        if ($request->ajax()) {
            if (Threesixty::where('property_id', $request->property_id)->exists()) {
                return response()->json([
                    'success' => 'Request Already Send',
                ]);
            } else {
                $property = Property::find($request->property_id);
                $saverequest = new Threesixty();
                $saverequest->agent_id = Auth::user()->id;
                $saverequest->property_id = $request->property_id;
                $saverequest->property_title = $property->propert_title;
                $saverequest->agent_name = Auth::user()->name;
                $saverequest->agent_email = Auth::user()->email;
                $saverequest->agent_phone = Auth::user()->phone;
                $saverequest->agent_address = Auth::user()->address;
                $saverequest->save();
                $user = User::find(Auth::user()->id);
                $message = 'Request For 360 Voide';
                $user->notify(new ThreesixtyNotification($message, $user));
                return response()->json([
                    'success' => 'Request Send Successfully!',
                ]);
            }
        }
    }

    // purchase sub function

    public function subscription()
    {
        return view('agent.subscription.ispurchase');
    }

    ///////////////////////// Property Manager Functions //////////

    public function allPropertyManager()
    {
        $agents = User::where('creater_id', '=', Auth::user()->id)->get();
        return view('agent.propertymanager.all', compact('agents'));
    }

    public function createPropertyManager()
    {
        return view('agent.propertymanager.create');
    }

    public function storePropertyManager(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'min:6',
            'email' => 'required|email|unique:users,email',
        ]);
        if ($validator->fails()) {
            return $validator->errors()->all();
        }
        $agent = new User();
        $agent->creater_id = Auth::user()->id;
        $agent->type = 'FrontEnd';
        $agent->role = $request->role_name;
        $agent->name = $request->name;
        $agent->email = $request->email;
        $agent->password = Hash::make($request->password);
        $agent->save();
        $agent->assignRole($request->role_name);
        return response()->json([
            'success'  => 'Property Manager successfully.'
        ]);
    }

    public function deletePropertManager(Request $request)
    {
        if ($request->ajax()) {
            $agent = User::find($request->id);
            $agent->forceDelete();
            return response()->json([
                'error'  => 'Property ManagerDeleted successfully.'
            ]);
        }
    }

    public function editPropertyManager($id)
    {
        $agent = User::find($id);
        return view('agent.propertymanager.edit', compact('agent'));
    }

    public function updatePropertyManager(Request $request)
    {
        if ($request->ajax()) {
            $id = $request->id;
            $agent = User::find($id);
            $delrole = '';
            $oldrole = $agent->getRoleNames();
            foreach ($oldrole as $row) {
                $delrole = $row;
            }
            if ($request->role_name != $delrole) {

                $agent->removeRole($delrole);
                $agent->assignRole($request->role_name);
            }
            $agent->name = $request->name;
            $agent->type = 'FrontEnd';
            // $agent->role = $request->role_name;
            $agent->email = $request->email;
            if ($request->has('password')) {

                $agent->password =  Hash::make($request->password);
            }
            $agent->update();
            return response()->json([
                'success'  => 'Property Manager Update successfully.'
            ]);
        }
    }
    public function viewPropertyManager($id)
    {
        $agent = User::find($id);
        return view('agent.propertymanager.view', compact('agent'));
    }
}
