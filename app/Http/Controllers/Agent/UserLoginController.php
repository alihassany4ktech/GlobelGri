<?php

namespace App\Http\Controllers\Agent;

use App\User;
use Illuminate\Http\Request;
use App\PurchasedSubscription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Redirect;

class UserLoginController extends Controller
{
    public function UserLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|max:30'
        ], [
            'email.exists' => 'This email is not exists'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $role = Auth::user()->getRoleNames()->isEmpty() ? '' : Auth::user()->getRoleNames()[0];
            if ($role == 'Property Manager') {
                return redirect()->intended('/agent/profile')
                    ->with('message', 'Login Successfull');
            } else {
                if (PurchasedSubscription::where('agent_id', '=', Auth::user()->id)->exists()) {
                    // dd('exist');
                    return redirect()->intended('/agent/profile')
                        ->with('message', 'Login Successfull');
                } else {
                    // dd('not exist');
                    return redirect()->intended('/agent/subscription');
                }
            }
        }
        return redirect("/")->with('error', 'Login Details Are inValid');
    }


    public function UserSignUp(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $data = $request->all();
        $check = $this->create($data);
        $role = Auth::user()->getRoleNames()->isEmpty() ? '' : Auth::user()->getRoleNames()[0];
        if ($role == 'Property Manager') {
            return redirect()->route('agent.dashboard')->with('message', 'Singup Successfully');
        } else {
            if (PurchasedSubscription::where('agent_id', '=', Auth::user()->id)->exists()) {
                // dd('exist');
                return redirect()->route('agent.dashboard')->with('message', 'Singup Successfully');
            } else {
                // dd('not exist');
                return redirect()->intended('/agent/subscription');
            }
        }
    }



    public function create(array $data)
    {
        $otp = mt_rand(100000, 999999);
        $user =  User::create([
            'role' => $data['agent_role'],
            'user_otp' => $otp,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        Auth::login($user);
        $user->assignRole($data['agent_role']);
        return $user;
    }
}
