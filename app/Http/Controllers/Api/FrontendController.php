<?php

namespace App\Http\Controllers\Api;

use App\Blog;
use App\User;
use App\Contact;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use App\Http\Resources\BlogCollection;
use App\Http\Resources\PropertyResource;
use App\Notifications\ContactNotification;
use App\Http\Resources\AllPropertyCollection;
use App\Notifications\ContactInfoNotification;
use App\Http\Resources\PropertyForRentCollection;
use App\Http\Resources\PropertyForSaleCollection;
use App\Http\Resources\SubscriptionCollection;
use App\Subscription;

class FrontendController extends Controller
{
    public function ContactStore(Request $request)
    {

        $contact  =  new Contact();
        $contact->owner_id = $request->owner_id;
        $contact->property_id = $request->property_id;
        $contact->type = $request->type;
        $contact->date = $request->date;
        $contact->time = $request->time;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->check = $request->check;
        $contact->save();
        $type = $request->type;
        $date = $request->date;
        $time = $request->time;
        $phone = $request->phone;
        $email = $request->email;
        $user = User::find($request->owner_id);
        $message = 'Notification For Tour.';
        $user->notify(new ContactNotification($message, $date, $time, $email, $phone, $type));
        $success['success'] =  'Contact Add Successfully!';
        $success['success'] = true;
        return response()->json($success, 200);
    }


    public function ContacInfotStore(Request $request)
    {
        $contact  =  new Contact();
        $contact->owner_id = $request->owner_id;
        $contact->property_id = $request->property_id;
        $contact->type = 'Info';
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->check = $request->check;
        $contact->message = $request->message;
        $contact->save();
        $user = User::find($request->owner_id);
        $msg = 'Notification For Contact Info.';
        $user->notify(new ContactInfoNotification($msg, $request->email, $request->phone, $request->type, $request->message));
        $success['message'] =  'Contact Info Add Successfully';
        $success['success'] = true;
        return response()->json($success, 200);
    }


    public function blogs()
    {
        $blogs = Blog::paginate(4);
        $data  = BlogCollection::collection($blogs);
        return response()->json(BlogCollection::collection($data));
    }

    public function SingleBlog($id)
    {
        $blog = Blog::find($id);
        $data = new BlogResource($blog);
        return $data->toJson();
    }

    public function propertiesForRent()
    {
        $propertiesForRent = Property::where('property_type', '=', 'For Rent')->get();
        $data  = PropertyForRentCollection::collection($propertiesForRent);
        return response()->json(PropertyForRentCollection::collection($data));
    }

    public function propertiesForSale()
    {
        $propertiesForSale = Property::where('property_type', '=', 'For Sale')->get();
        $data  = PropertyForSaleCollection::collection($propertiesForSale);
        return response()->json(PropertyForSaleCollection::collection($data));
    }

    public function singleProperty($id)
    {
        $property = Property::find($id);
        $data = new PropertyResource($property);
        return $data->toJson();
    }

    public function agentAllProperty($id)
    {
        $properties = Property::where('user_id', '=', $id)->get();
        $data  = AllPropertyCollection::collection($properties);
        return response()->json(AllPropertyCollection::collection($data));
    }

    public function searchProperty(Request $request)
    {
        $properties = DB::table('properties')->where('address', 'LIKE', '%' . $request->address . '%')
            ->where('property_type', '=', $request->property_type)
            ->where('propert_title', 'LIKE', '%' . $request->property_title . '%')
            ->get();
        $data  = AllPropertyCollection::collection($properties);
        return response()->json(AllPropertyCollection::collection($data));
    }

    public function allSubscription()
    {
        $subscription = Subscription::all();
        $data  = SubscriptionCollection::collection($subscription);
        return response()->json(SubscriptionCollection::collection($data));
    }
}
