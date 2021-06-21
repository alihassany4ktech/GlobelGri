<?php

namespace App\Http\Controllers\Frontend;

use App\Blog;
use App\User;
use App\Contact;
use App\Favourite;
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
        $mapShops = Property::where('property_type', '=', 'For Sale')->get();
        return view('frontend.buy.home-for-sale', compact('mapShops'));
    }

    public function HomeForRent()
    {
        $mapShops = Property::where('property_type', '=', 'For Rent')->get();
        return view('frontend.rent.home-for-rent', compact('mapShops'));
    }

    public function investment()
    {
        $mapShops = Property::where('property_type', '=', 'For Investment')->get();
        return view('frontend.investment.home-for-investment', compact('mapShops'));
    }

    public function SingleProperty($id)
    {
        $mapShops = Property::find($id);
        return view('frontend.buy.single-property', compact('mapShops'));
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
        $mapShops = DB::table('properties')->where('address', 'LIKE', '%' . $request->item . '%')
            ->where('property_type', '=', $request->property_type)
            ->get();
        return view('frontend.searchedproperty', compact('mapShops'));
    }

    public function favourite(Request $request)
    {
        if ($request->ajax()) {


            $already_favourite = Favourite::where('property_id', '=', $request->property_id)
                ->where('user_id', '=', Auth::user()->id)
                ->first();
            if ($already_favourite == null) {
                $favourite = new Favourite();
                $favourite->property_id = $request->property_id;
                $favourite->user_id = Auth::user()->id;
                $favourite->save();
                return response()->json([
                    'success' => 'Add To Favourite',
                ]);
            }
            $already_favourite->delete();
            return response()->json([
                'success' => 'UnFavourite',
            ]);
        }
    }

    // buy a home function 

    public function BuyHome()
    {
        return view('frontend.home.buy-a-home');
    }

    public function RentHome()
    {
        return view('frontend.home.rent-a-home');
    }

    public function InvestHome()
    {
        return view('frontend.home.invest-a-home');
    }


    public function AllGuide()
    {
        return view('frontend.home.all-guide');
    }

    public function AgentGuide()
    {
        return view('frontend.home.allguide.agent-guide');
    }

    public function PropertyManagerGuide()
    {
        return view('frontend.home.allguide.property-manager-guide');
    }

     public function LenderGuide()
    {
        return view('frontend.home.allguide.lender-guide');
    }

     public function BuilderGuide()
    {
        return view('frontend.home.allguide.builder-guide');
    }

     public function PlateformAdministratorGuide()
    {
        return view('frontend.home.allguide.plateform-administrator-guide');
    }

}
