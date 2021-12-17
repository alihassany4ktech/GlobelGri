<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PurchasedSubscription;
use App\Subscription;
use App\Threesixty;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function login(Request $request)
    {
        dd($request);
    }

    public function index()
    {
        $agentsCount = User::all()->count();
        $subscriptionCount = Subscription::where('status', '=', 1)->count();
        $purchasedsubscriptionCount = PurchasedSubscription::all()->count();
        $requestCount = Threesixty::all()->count();
        return view('admin.dashboard', compact('agentsCount', 'subscriptionCount', 'requestCount', 'purchasedsubscriptionCount'));
    }



    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function profile()
    {
        return  view('admin.profile');
    }

    public function update(Request $request)
    {
        if ($request->ajax()) {
            $id = $request->id;
            $profile = Admin::find($id);
            $profile->email = $request->email;
            $profile->name = $request->name;
            if ($request->hasfile('image')) {
                if (!empty($profile->image) && ($profile->image != "dist/img/adminPic.png")) {
                    $image_path = $profile->image;
                    unlink($image_path);
                }
                $image = $request->file('image');
                $name = time() . 'profile' . '.' . $image->getClientOriginalExtension();
                $destinationPath = 'profile_images/';
                $image->move($destinationPath, $name);
                $profile->image = 'profile_images/' . $name;
            }

            $profile->save();
            return response()->json([
                'success' => 'Profile Updated Successfully!',
            ]);
        }
    }
}
