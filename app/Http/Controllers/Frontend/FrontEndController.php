<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use App\Property;
use App\GeneralSetting;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyResource;
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
        return view('frontend.buy.home-for-sale');
    }

    public function SingleProperty()
    {
        // $property = Property::find($id);
        // $data = new PropertyResource($property);
        // return $data->toJson();  for api 
        return view('frontend.buy.single-property'); // for view
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
}
