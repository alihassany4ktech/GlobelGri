<?php

namespace App\Http\Controllers\Agent;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class UserLoginController extends Controller
{
    public function UserLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/agent/profile')
                ->with('message', 'Login Successfull');
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
        return redirect()->route('agent.dashboard')->with('message', 'Singup Successfully');
    }



    public function create(array $data)
    {
        $otp = mt_rand(100000, 999999);
        $user =  User::create([
            'role_id' => (int)$data['agent_role'],
            'user_otp' => $otp,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        Auth::login($user);
        return $user;
    }
}
