<?php

namespace App\Http\Controllers\Api;



use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;

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
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
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
        $success['success'] = 'Profile Updated Successfully!';
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
        $success['success'] = 'Password Updated Successfully!';
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
        $success['success'] = 'Social Media Updated Successfully!';
        $success['success'] = true;
        return response()->json($success, 200);
    }


    // google login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    // google callback
    public function handleGoogleCallback()
    {

        $user = Socialite::driver('google')->user();
        $this->_registerOrLoginUser($user);
        return redirect('agent/profile');
    }


    // facebook login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    // facebook callback
    public function handleFacebookCallback()
    {

        $user = Socialite::driver('facebook')->user();
        $this->_registerOrLoginUser($user);
        return redirect('agent.dashboard');
    }

    public function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();

        if (!$user) {

            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $user->save();
            return response()->json($success, $this->successStatus);
        }
        Auth::login($user);
    }
}
