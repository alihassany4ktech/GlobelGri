<?php

namespace App\Http\Controllers\Api;



use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use App\Notifications\ForgotPasswordNotification;

class UserController extends Controller
{
    public $successStatus = 200;

    /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['name'] =  $user->name;
            $success['user_id'] = $user->id;
            $success['success'] = true;
            return response()->json($success, $this->successStatus);
        } else {
            return response()->json(['error' => 'Invalid Login Credentials', 'success' => false], 401);
        }
    }
    /**

     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function register(Request $request)
    {
        $rules = array('email' => 'required|email|unique:users');
        $error = Validator::make($request->all(), $rules);
        if ($error->fails()) {
            $invalid = $error->errors()->all()[0];
            $message['error'] = $invalid;
            return response()->json($message, 401);
        }


        if (!$request->name) {
            $success['error'] = "Name is Required ";
            return response()->json($success, 401);
        } elseif (!$request->password) {
            $success['password'] = "Password is Required ";
            return response()->json($success, 401);
        }
        $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Buyer'
        ]);
        Auth::login($user);
        $user->assignRole('Buyer');
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
        $success['success'] = true;
        return response()->json($success, $this->successStatus);
    }

    /** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function details()
    {
        $user = Auth::user();
        return response()->json($user, $this->successStatus);
    }

    public function profileupdate(Request $request)
    {
        $this->validate($request, [
            'name' => 'min:3|max:50'
        ]);
        $id = Auth::guard('api')->user()->id;
        $profile = User::find($id);
        $profile->name = $request->name;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->biography = $request->biography;
        if ($request->hasfile('image')) {
            if (!empty($profile->image)) {
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
        $success['message'] = 'Profile Updated Successfully!';
        $success['success'] = true;
        return response()->json($success, 200);
    }

    public function passwordupdate(Request $request)
    {

        $this->validate($request, [
            'password' => 'confirmed|min:6',
        ]);
        $id = Auth::guard('api')->user()->id;
        $profile = User::find($id);
        $profile->password = Hash::make($request->password);
        $profile->update();
        $success['message'] = 'Password Updated Successfully!';
        $success['success'] = true;
        return response()->json($success, 200);
    }

    public function social_media_update(Request $request)
    {

        $id = Auth::guard('api')->user()->id;
        $profile = User::find($id);
        $profile->facebook_url = $request->facebook_url;
        $profile->twitter_url = $request->twitter_url;
        $profile->linkedin_url = $request->linkedin_url;
        $profile->instagram_url = $request->instagram_url;
        $profile->google_url = $request->google_url;
        $profile->skype_url = $request->skype_url;
        $profile->update();
        $success['message'] = 'Social Media Updated Successfully!';
        $success['success'] = true;
        return response()->json($success, 200);
    }

    public function forgot_password(Request $request)
    {
        $otp = mt_rand(100000, 999999);
        $user = User::where('email', '=', $request->email)->first();
        if ($user != null) {
            $user->user_otp = $otp;
            $user->update();
            $user->notify(new ForgotPasswordNotification($otp));
            $success['message'] = 'Otp Send Successfully On Your Email';
            $success['success'] = true;
            return response()->json($success, $this->successStatus);
        } else {
            return response()->json(['error' => 'Email Not Found', 'success' => false], 401);
        }
    }

    public function opt_verify(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($user->user_otp == $request->otp) {
                $success['message'] = 'Your Otp Varify Successfull';
                $success['token'] =  $user->createToken('MyApp')->accessToken;
                $success['success'] = true;
                $success['id'] =  $user->id;
                return response()->json($success, $this->successStatus);
            } else {

                return response()->json(['error' => 'Otp Not Match, Please Try Again', 'success' => false], 401);
            }
        } else {
            return response()->json(['error' => 'User Not Found', 'success' => false], 404);
        }
    }

    public function reset_password(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            $user->password = Hash::make($request->new_password);
            $user->update();
            $success['message'] = 'Password Updated Successfully';
            $success['success'] = true;
            $success['id'] =  $user->id;
            return response()->json($success, $this->successStatus);
        } else {
            return response()->json(['error' => 'Email Not Exist', 'success' => false], 404);
        }
    }


    // google login
    // public function redirectToGoogle()
    // {
    //     return Socialite::driver('google')->redirect();
    // }
    // google callback
    // public function handleGoogleCallback()
    // {

    //     $user = Socialite::driver('google')->user();
    //     $this->_registerOrLoginUser($user);
    //     return redirect('agent/profile');
    // }


    // facebook login
    // public function redirectToFacebook()
    // {
    //     return Socialite::driver('facebook')->redirect();
    // }
    // facebook callback
    // public function handleFacebookCallback()
    // {

    //     $user = Socialite::driver('facebook')->user();
    //     $this->_registerOrLoginUser($user);
    //     return redirect('agent.dashboard');
    // }

    // public function _registerOrLoginUser($data)
    // {
    //     $user = User::where('email', '=', $data->email)->first();

    //     if (!$user) {

    //         $user = new User();
    //         $user->name = $data->name;
    //         $user->email = $data->email;
    //         $user->provider_id = $data->id;
    //         $success['token'] =  $user->createToken('MyApp')->accessToken;
    //         $user->save();
    //         return response()->json($success, $this->successStatus);
    //     }
    //     Auth::login($user);
    // }
}
