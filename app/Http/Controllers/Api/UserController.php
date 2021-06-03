<?php

namespace App\Http\Controllers\Api;



use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            return response()->json($success, $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
    /**

     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
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
            'name' => 'required|min:3|max:50'
        ]);
        $id = $request->user()->id;
        $profile = User::find($id);
        $profile->name = $request->name;
        $profile->phone = $request->phone;
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
        return response()->json([
            'success' => 'Profile Updated Successfully!',
        ]);
    }

    public function passwordupdate(Request $request)
    {

        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);
        $id = $request->user()->id;
        $profile = User::find($id);
        $profile->password = Hash::make($request->password);
        $profile->update();
        return response()->json([
            'success' => 'Password Updated Successfully!',
        ]);
    }

    public function social_media_update(Request $request)
    {

        $id = $request->user()->id;
        $profile = User::find($id);
        $profile->facebook_url = $request->facebook_url;
        $profile->twitter_url = $request->twitter_url;
        $profile->linkedin_url = $request->linkedin_url;
        $profile->instagram_url = $request->instagram_url;
        $profile->google_url = $request->google_url;
        $profile->skype_url = $request->skype_url;
        $profile->update();
        return response()->json([
            'success' => 'Social Media Updated Successfully!',
        ]);
    }
}
