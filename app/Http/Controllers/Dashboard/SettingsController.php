<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class SettingsController extends Controller
{
    public function index()
    {
        $permissions = Permission::orderBy('created_at', 'desc')->get();
        return view('permission.index', compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name,' . $request->id,
            'description' => 'nullable|string|max:1000',
        ]);

        Permission::updateOrCreate(
            ['id' => $request->id],
            ['name' => $request->name, 'description' => $request->description]
        );

        return redirect()->route('permissions.index')->with('success', 'Permission saved successfully.');
    }

    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        return response()->json($permission); // for AJAX editing
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name,' . $id,
            'description' => 'nullable|string|max:1000',
        ]);

        $permission = Permission::findOrFail($id);
        $permission->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('permissions.index')->with('success', 'Permission updated successfully.');
    }

    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();

        return redirect()->route('permissions.index')->with('success', 'Permission deleted successfully.');
    }
}
