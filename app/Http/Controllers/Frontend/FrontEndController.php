<?php

namespace App\Http\Controllers\Frontend;

use App\Contact;
use App\User;
use App\Property;
use App\GeneralSetting;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyResource;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserBlock');
    }
    public function index()
    {
        $agents = User::all();
        return view('frontend.home', compact('agents'));
    }

    public function HomeForSale()
    {
        $mapShops = Property::all();
        return view('frontend.buy.home-for-sale', compact('mapShops'));
    }

    public function HomeForRent()
    {
        $mapShops = Property::all();
        return view('frontend.rent.home-for-rent', compact('mapShops'));
    }

    public function investment()
    {
        $mapShops = Property::all();
        return view('frontend.investment.home-for-investment', compact('mapShops'));
    }

    public function SingleProperty($id)
    {
        $property = Property::find($id);
        return view('frontend.buy.single-property', compact('property'));
    }

    public function ContactUs()
    {
        return view('frontend.contact-us');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function SingleBlog()
    {
        return view('frontend.single-blog');
    }

    public function ContactStore(Request $request)
    {
        if ($request->ajax()) {
            $contact  =  new Contact();
            $contact->owner_id = $request->owner_id;
            $contact->property_id = $request->property_id;
            $contact->type = $request->type;
            $contact->date = $request->date;
            // $contact->time = $request->time;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->check = $request->check;
            $contact->save();
            $user = User::find($request->owner_id);
            $message = 'Notification For Tour';
            $user->notify(new ContactNotification($message));
            return response()->json(['success' => 'Contact Add Successfully!']);
        }
    }
}
