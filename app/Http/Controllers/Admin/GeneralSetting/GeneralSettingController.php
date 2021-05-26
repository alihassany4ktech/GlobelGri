<?php

namespace App\Http\Controllers\Admin\GeneralSetting;

use App\GeneralSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function create()
    {
        return view('admin.generalsetting.create');
    }


    public function store(Request $request)
    {
        if ($request->ajax()) {
            $setting = new GeneralSetting;
            $setting->phone = $request->phone;
            $setting->email = $request->email;
            $setting->description = $request->description;
            $setting->address = $request->address;
            if ($request->hasfile('logo')) {
                if (!empty($setting->logo)) {
                    $logo_path = $setting->logo;
                    unlink($logo_path);
                }
                $logo = $request->file('logo');
                $name = time() . 'logo' . '.' . $logo->getClientOriginalExtension();
                $destinationPath = 'logo/';
                $logo->move($destinationPath, $name);
                $setting->logo = 'logo/' . $name;
            }

            $setting->save();
            return response()->json([
                'success' => 'Setting Saved Successfully!',
            ]);
        }
    }
}
