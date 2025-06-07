<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();
        return view('roles.index', compact('roles', 'permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $request->id,
            'permissions' => 'array|nullable'
        ]);

        $role = Permission::updateOrCreate(
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
        $role = Permission::with('permissions')->findOrFail($id);
        return response()->json([
            'role' => $role,
            'permissions' => $role->permissions->pluck('id')
        ]);
    }

    public function destroy($id)
    {
        $role = Permission::findOrFail($id);
        $role->delete();
        return redirect()->back()->with('success', 'Role deleted.');
    }
}
