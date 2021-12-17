<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class SubAdminController extends Controller
{
    public function all()
    {
        $sunAdmins = Admin::where('type', '=', 'subAdmin')->get();
        return view('admin.subadmin.all', compact('sunAdmins'));
    }

    public function create()
    {
        return view('admin.subadmin.create');
    }

    public function Store(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'password' => 'min:6',
                'confirm-password' => 'required_with:password|same:password|min:6',
                'email' => 'required|email|unique:admins,email',
            ]);
            if ($validator->fails()) {
                return $validator->errors()->all();
            }
            $subAdmin = new Admin();
            $subAdmin->type = 'subAdmin';
            $subAdmin->name = $request->name;
            $subAdmin->email = $request->email;
            $subAdmin->password = Hash::make($request->password);
            $subAdmin->save();
            $subAdmin->assignRole($request->role_name);
            return response()->json([
                'success' => 'SubAdmin Add Successfully!',
            ]);
        }
    }

    public function edit($id)
    {
        $subAdmin = Admin::find($id);
        return view('admin.subadmin.edit', compact('subAdmin'));
    }

    public function delete(Request $request)
    {
        if ($request->ajax()) {
            $subAdmin = Admin::find($request->id);
            $subAdmin->delete();
            return response()->json([
                'error' => 'SubAdmin Deleted Successfully!',
            ]);
        }
    }

    public function update(Request $request)
    {
        if ($request->ajax()) {
            if ($request->ajax()) {
                $id = $request->id;
                $subAdmin = Admin::find($id);
                $delrole = '';
                $oldrole = $subAdmin->getRoleNames();

                foreach ($oldrole as $row) {
                    $delrole = $row;
                }
                if ($request->role_name != $delrole) {

                    $subAdmin->removeRole($delrole);
                    $subAdmin->assignRole($request->role_name);
                }
                $subAdmin->name = $request->name;
                $subAdmin->type = 'BackEnd';
                $subAdmin->email = $request->email;
                if ($request->has('password')) {

                    $subAdmin->password =  Hash::make($request->password);
                }
                $subAdmin->update();
                return response()->json([
                    'success'  => 'SubAdmin Update successfully.'
                ]);
            }
        }
    }
}
