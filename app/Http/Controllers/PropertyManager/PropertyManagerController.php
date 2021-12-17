<?php

namespace App\Http\Controllers\PropertyManager;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PropertyManagerController extends Controller
{

    public function allAgents()
    {
        $agents = User::where('properyManager_id', '=', Auth::user()->id)->get();
        return view('agent.propertymanager.agents.all', compact('agents'));
    }

    public function createAgent()
    {
        return view('agent.propertymanager.agents.create');
    }

    public function storeAgent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'min:6',
            'email' => 'required|email|unique:users,email',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $agent = new User();
        $agent->properyManager_id = Auth::user()->id;
        $agent->type = 'FrontEnd';
        $agent->name = $request->name;
        $agent->email = $request->email;
        $agent->password = Hash::make($request->password);
        $agent->save();
        $agent->assignRole($request->role_name);
        return response()->json([
            'success'  => 'Agent Add successfully.'
        ]);
    }

    public function deleteAgent(Request $request)
    {
        if ($request->ajax()) {
            $agent = User::find($request->id);
            $agent->forceDelete();
            return response()->json([
                'error'  => 'Agent Deleted successfully.'
            ]);
        }
    }

    public function editAgent($id)
    {
        $agent = User::find($id);
        return view('agent.propertymanager.agents.edit', compact('agent'));
    }

    public function updateAgent(Request $request)
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
            $agent->email = $request->email;
            if ($request->has('password')) {

                $agent->password =  Hash::make($request->password);
            }
            $agent->update();
            return response()->json([
                'success'  => 'Agent Update successfully.'
            ]);
        }
    }
    public function viewAgent($id)
    {
        $agent = User::find($id);
        return view('agent.propertymanager.agents.view', compact('agent'));
    }
}
