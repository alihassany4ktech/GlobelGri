<?php

namespace App\Http\Controllers\Admin\RolePermission;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\Ternary;
use Spatie\Permission\Contracts\Role as ContractsRole;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{

    // FrontEnd role
    public function allRoles()
    {
        $roles = Role::where('type', '=', 'FrontEnd')->where('name', '!=', 'Buyer')->get();
        return view('admin.role.all', compact('roles'));
    }

    public function createRole()
    {
        $permissions = Permission::where('type', '=', 'FrontEnd')->get();
        $roles = Role::where('type', '=', 'FrontEnd')->where('name', '!=', 'Buyer')->get();
        return view('admin.role.create', compact('permissions', 'roles'));
    }

    public function editRole($id)
    {
        $role = Role::find($id);
        return view('admin.role.edit', compact('role'));
    }
    public function storeRole(Request $request)
    {

        $request->validate([
            'role_name' => 'required|unique:roles,name',
        ]);
        $role = Role::create(['name' => $request->role_name, 'guard_name' => 'web', 'type' => 'FrontEnd']);
        $role->syncPermissions($request->permissions);
        return redirect()->back()->with(['message' => 'Role Save Successfully']);
    }

    public function updateRole(Request $request)
    {
        $request->validate([
            'role_name' => 'required',
        ]);
        $role = Role::find($request->role_id);
        // $role->name = $request->role_name;
        $role->type = 'FrontEnd';
        $oldpermissions = $role->getAllpermissions();
        $role->revokePermissionTo($oldpermissions);
        $role->syncPermissions($request->permissions);
        return redirect()->back()->with(['message' => 'Role Updated Successfully']);
    }

    public function deleteRole($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->back()->with(['message' => 'Role Deleted Successfully']);
    }
    // end FrontEnd role


    //  permissions 
    public function allPermissions()
    {
        $permissions = Permission::all();
        return view('admin.permission.all', compact('permissions'));
    }

    // public function createPermission()
    // {
    //     return view('admin.permission.create');
    // }

    // public function storePermission(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $permissions = new Permission();
    //         if ($request->type == 'FrontEnd') {
    //             $permissions->name = $request->permission;
    //             $permissions->type = $request->type;
    //             $permissions->guard_name = 'web';
    //             $permissions->save();
    //             return response()->json([
    //                 'success' => 'Permission Save Successfully!',
    //             ]);
    //         } else {
    //             $permissions->name = $request->permission;
    //             $permissions->type = $request->type;
    //             $permissions->guard_name = 'admin';
    //             $permissions->save();
    //             return response()->json([
    //                 'success' => 'Permission Save Successfully!',
    //             ]);
    //         }
    //     }
    // }

    // delete permission 

    // public function deletePermission($id)
    // {
    //     $permission = Permission::find($id);
    //     $permission->delete();
    //     return redirect()->back()->with(['message' => 'Permission Deleted Successfully']);
    // }

    // end permissions 


    // back end role

    public function allBackendRoles()
    {
        $roles = Role::where('type', '=', 'BackEnd')->get();
        return view('admin.backendrole.all', compact('roles'));
    }

    public function createBackEndRole()
    {
        $permissions = Permission::where('type', '=', 'BackEnd')->get();
        return view('admin.backendrole.create', compact('permissions'));
    }

    public function storeBackEndRole(Request $request)
    {
        $request->validate([
            'role_name' => 'required|unique:roles,name',
        ]);
        $role = Role::create(['name' => $request->role_name, 'guard_name' => 'admin', 'type' => 'BackEnd']);
        $role->syncPermissions($request->permissions);
        return redirect()->back()->with(['message' => 'Role Save Successfully']);
    }

    public function deleteBackEndRole($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->back()->with(['message' => 'Role Deleted Successfully']);
    }

    public function editBackEndRole($id)
    {
        $role = Role::find($id);
        return view('admin.backendrole.edit', compact('role'));
    }



    public function updateBackEndRole(Request $request)
    {
        $request->validate([
            'role_name' => 'required',
        ]);
        $role = Role::find($request->role_id);
        // $role->name = $request->role_name;
        $role->type = 'FrontEnd';
        $oldpermissions = $role->getAllpermissions();
        $role->revokePermissionTo($oldpermissions);
        $role->syncPermissions($request->permissions);
        return redirect()->back()->with(['message' => 'Role Updated Successfully']);
    }
}
