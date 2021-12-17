<?php

namespace App\Http\Controllers\Admin\Agent;

use App\Role;
use App\User;
use App\Admin;
use App\Property;
use App\Threesixty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AgentController extends Controller
{
    public function index()
    {

        $agents = User::where('role', '!=', 'Property Manager')->orderBy('id', 'DESC')->get();
        return view('admin.agents.index', compact('agents'));
    }

    // single agent 

    public function singleAgent($id)
    {
        $agent = User::find($id);
        return view('admin.agents.single', compact('agent'));
    }

    public function backendIndex()
    {
        $agents = Admin::where('type', '=', 'BackEnd')->orderBy('id', 'DESC')->get();
        return view('admin.backendagents.index', compact('agents'));
    }


    public function trash()
    {
        $agents = User::onlyTrashed()->orderBy('id', 'DESC')->get();
        return view('admin.agents.trashed', compact('agents'));
    }


    public function agentForm()
    {
        return view('admin.agents.create');
    }

    public function backendAgentForm()
    {
        return view('admin.backendagents.create');
    }


    public function agentStore(Request $request)
    {

        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'password' => 'min:6',
                'confirm-password' => 'required_with:password|same:password|min:6',
                'email' => 'required|email|unique:users,email',
            ]);
            if ($validator->fails()) {
                return $validator->errors()->all();
            }

            $password = $request->password;
            $agent = new User();
            $agent->type = 'FrontEnd';
            $agent->role = $request->role_name;
            $agent->name = $request->name;
            $agent->email = $request->email;
            $agent->password = Hash::make($request->password);
            $agent->save();
            $agent->assignRole($request->role_name);
            return response()->json([
                'success'  => 'User Add successfully.'
            ]);
        }
    }

    public function backendAgentStore(Request $request)
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

            $password = $request->password;
            $agent = new Admin();
            $agent->type = 'BackEnd';
            $agent->name = $request->name;
            $agent->email = $request->email;
            $agent->password = Hash::make($request->password);
            $agent->save();
            $agent->assignRole($request->role_name);
            return response()->json([
                'success'  => 'User Add successfully.'
            ]);
        }
    }



    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.agents.edit', compact('user'));
    }


    public function BackendEdit($id)
    {
        $user = Admin::find($id);
        return view('admin.backendagents.edit', compact('user'));
    }





    public function agentUpdate(Request $request)
    {
        if ($request->ajax()) {
            $id = $request->id;
            $agent = User::find($id);
            $delrole = '';
            $oldrole = $agent->getRoleNames();
            foreach ($oldrole as $row) {
                $delrole = $row;
            }
            if ($request->role_name != $delrole) {

                $agent->removeRole($delrole);
                $agent->assignRole($request->role_name);
            }
            $agent->name = $request->name;
            $agent->type = 'FrontEnd';
            $agent->role = $request->role_name;
            $agent->email = $request->email;
            if ($request->has('password')) {

                $agent->password =  Hash::make($request->password);
            }
            $agent->update();
            return response()->json([
                'success'  => 'User Update successfully.'
            ]);
        }
    }

    // backend agent update


    public function backendAgentUpdate(Request $request)
    {
        if ($request->ajax()) {
            $id = $request->id;
            $agent = Admin::find($id);
            $delrole = '';
            $oldrole = $agent->getRoleNames();

            foreach ($oldrole as $row) {
                $delrole = $row;
            }
            if ($request->role_name != $delrole) {

                $agent->removeRole($delrole);
                $agent->assignRole($request->role_name);
            }
            $agent->name = $request->name;
            $agent->type = 'BackEnd';
            $agent->email = $request->email;
            if ($request->has('password')) {

                $agent->password =  Hash::make($request->password);
            }
            $agent->update();
            return response()->json([
                'success'  => 'User Update successfully.'
            ]);
        }
    }



    public function destroyAgent(Request $request)
    {

        if ($request->ajax()) {
            $agent = User::find($request->id);
            $agent->delete();
            return response()->json([
                'success'  => 'User Trashed!'
            ]);
        }
    }


    public function recoverAgent(Request $request)
    {
        if ($request->ajax()) {
            $agent = User::onlyTrashed()->findOrFail($request->id);
            $agent->restore();
            return response()->json([
                'success'  => 'User Restore Successfully!'
            ]);
        }
    }


    public function deleteAgent(Request $request)
    {

        if ($request->ajax()) {
            $agent = User::onlyTrashed()->findOrFail($request->id);
            $agent->forceDelete();
            return response()->json([
                'success'  => 'User Deleted Successfully!'
            ]);
        }
    }

    // delete backend agent 

    public function deleteBackEndAgent(Request $request)
    {
        if ($request->ajax()) {
            $agent = Admin::findOrFail($request->id);
            $agent->delete();
            return response()->json([
                'success'  => 'User Deleted Successfully!'
            ]);
        }
    }


    public function banAgent(Request $request)
    {
        if ($request->ajax()) {
            $banagent =  User::find($request->id);
            $banagent->status = 0;
            $banagent->update();
            return response()->json([
                'success'  => 'User Baned Successfully!'
            ]);
        }
    }


    public function unbanAgent(Request $request)
    {
        if ($request->ajax()) {
            $unbanagent =  User::find($request->id);
            $unbanagent->status = 1;
            $unbanagent->update();
            return response()->json([
                'success'  => 'User UnBaned Successfully!'
            ]);
        }
    }

    public function allRequest()
    {
        $threesixtyRequests = Threesixty::all();
        return view('admin.request.all', compact('threesixtyRequests'));
    }


    public function propertyEdit($id)
    {
        return view('admin.property.edit', compact('id'));
    }


    public function propertyUpdate(Request $request)
    {
        if ($request->ajax()) {
            $property = Property::find($request->property_id);
            $property->threesixty_link = $request->threesixty_link;
            $property->update();
            return response()->json([
                'success'  => 'Property Update Successfully!'
            ]);
        }
    }
}
