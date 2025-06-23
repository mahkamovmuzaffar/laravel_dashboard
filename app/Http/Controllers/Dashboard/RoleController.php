<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();
        return view('role.index', compact('roles', 'permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $request->id,
            'permissions' => 'array|nullable'
        ]);

        $role = Role::updateOrCreate(
            ['id' => $request->id],
            ['name' => $request->name]
        );

        if ($request->has('permissions')) {
            $role->syncPermissions($request->permissions);
        }

        return redirect()->back()->with('success', 'Role saved successfully.');
    }

    public function show($id)
    {
        $role = Role::with('permissions')->findOrFail($id);
        return response()->json([
            'role' => $role,
            'permissions' => $role->permissions->pluck('id')
        ]);
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->back()->with('success', 'Role deleted.');
    }
}
