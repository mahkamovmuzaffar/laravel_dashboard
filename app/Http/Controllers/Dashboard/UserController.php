<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller

{
    public function index()
    {
        $users = User::with('roles')->latest()->get();
        $roles = Role::all();
        return view('user.index', compact('users', 'roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $request->id,
            'password' => $request->id ? 'nullable' : 'required|string|min:6',
            'role' => 'required|exists:roles,id',
        ]);

        $user = User::updateOrCreate(
            ['id' => $request->id],
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password ? Hash::make($request->password) : User::find($request->id)->password,
            ]
        );

        $user->syncRoles([$request->role]);

        return redirect()->back()->with('success', 'User saved successfully.');
    }

    public function show(User $user)
    {
        return response()->json([
            'user' => $user,
            'roles' => $user->roles->pluck('id')
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'User deleted.');
    }
}


