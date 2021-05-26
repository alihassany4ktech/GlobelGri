<?php

namespace App\Http\Controllers\Admin\Agent;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{
    public function index()
    {

        $agents = User::all();
        return view('admin.agents.index', compact('agents'));
    }


    public function trash()
    {
        $agents = User::onlyTrashed()->get();
        return view('admin.agents.trashed', compact('agents'));
    }


    public function agentForm()
    {
        $roles = Role::all();
        return view('admin.agents.create', compact('roles'));
    }


    public function agentStore(Request $request)
    {

        if ($request->ajax()) {
            $this->validate($request, [
                'password' => 'min:6',
                'confirm-password' => 'required_with:password|same:password|min:6'
            ]);

            $password = $request->password;
            $agent = new User();
            $agent->role = $request->agent_role;
            $agent->name = $request->name;
            $agent->email = $request->email;
            $agent->password = Hash::make('password');
            $agent->save();
            return response()->json([
                'success'  => 'Agent Add successfully.'
            ]);
        }
    }



    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('admin.agents.edit', compact('user', 'roles'));
    }


    public function agentUpdate(Request $request)
    {
        if ($request->ajax()) {
            $id = $request->id;
            $agent = User::find($id);
            $agent->role = $request->agent_role;
            $agent->name = $request->name;
            $agent->email = $request->email;
            if ($password = $request->has('password')) {

                $agent->password = $password;
            }
            $agent->update();
            return response()->json([
                'success'  => 'Agent Update successfully.'
            ]);
        }
    }



    public function destroyAgent(Request $request)
    {

        if ($request->ajax()) {
            $agent = User::find($request->id);
            $agent->delete();
            return response()->json([
                'success'  => 'Agent Trashed!'
            ]);
        }
    }


    public function recoverAgent(Request $request)
    {
        if ($request->ajax()) {
            $agent = User::onlyTrashed()->findOrFail($request->id);
            $agent->restore();
            return response()->json([
                'success'  => 'Agent Restore Successfully!'
            ]);
        }
    }


    public function deleteAgent(Request $request)
    {

        if ($request->ajax()) {
            $agent = User::onlyTrashed()->findOrFail($request->id);
            $agent->forceDelete();
            return response()->json([
                'success'  => 'Agent Deleted Successfully!'
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
                'success'  => 'Agent Baned Successfully!'
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
                'success'  => 'Agent UnBaned Successfully!'
            ]);
        }
    }
}
