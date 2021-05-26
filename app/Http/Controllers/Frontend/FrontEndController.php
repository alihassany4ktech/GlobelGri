<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use App\GeneralSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\FuncCall;

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
        return view('frontend.buy.single-property');
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
