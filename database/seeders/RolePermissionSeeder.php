<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = ['permission', 'app_settings', 'user_management'];
        $actions = ['create', 'read', 'update', 'delete'];

        $allPermissions = [];

        // Create permissions
        foreach ($modules as $module) {
            foreach ($actions as $action) {
                $perm = "{$module}.{$action}";
                $allPermissions[] = Permission::firstOrCreate(['name' => $perm]);
            }
        }

        // Create roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $user = Role::firstOrCreate(['name' => 'user']);

        // Assign all permissions to admin
        $admin->syncPermissions($allPermissions);

        // Assign limited permissions to user (read-only access for demo)
        $userPermissions = Permission::whereIn('name', [
            'user_management.read',
            'app_settings.read'
        ])->get();

        $user->syncPermissions($userPermissions);

    }
}
