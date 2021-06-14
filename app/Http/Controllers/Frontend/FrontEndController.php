<?php

namespace App\Http\Controllers\Frontend;

use App\Blog;
use App\User;
use App\Contact;
use App\Property;
use App\GeneralSetting;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PropertyResource;
use App\Notifications\ContactNotification;

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

    public function blogs()
    {
        $blogs = Blog::paginate(4);
        return view('frontend.blogs', compact('blogs'));
    }

    public function SingleBlog($id)
    {
        $blog = Blog::find($id);
        $data = new BlogResource($blog);
        return view('frontend.single-blog', compact('blog'));
    }

    public function ContactStore(Request $request)
    {
        if ($request->ajax()) {
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
            $user = User::find($request->owner_id);
            $message = 'Notification For Tour';
            $user->notify(new ContactNotification($message));
            return response()->json(['success' => 'Contact Add Successfully!']);
        }
    }

    public function ContacInfotStore(Request $request)
    {
        if ($request->ajax()) {
            $contact  =  new Contact();
            $contact->owner_id = $request->owner_id;
            $contact->property_id = $request->property_id;
            $contact->type = $request->type;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->check = $request->check;
            $contact->message = $request->message;
            $contact->save();
            $user = User::find($request->owner_id);
            $message = 'Notification For Info';
            $user->notify(new ContactNotification($message));
            return response()->json(['success' => 'Contact Info Add Successfully!']);
        }
    }

    // Search 

    public function searchBye(Request $request)
    {
        dd($request);
        $property = DB::table('properties')->where('property_type', 'LIKE', '%' . $request->item . '%')->get();
    }
}
