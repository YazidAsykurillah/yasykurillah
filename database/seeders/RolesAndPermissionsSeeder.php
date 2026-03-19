<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::findOrCreate('view_admin_panel');
        Permission::findOrCreate('manage_users');
        Permission::findOrCreate('manage_roles');
        Permission::findOrCreate('manage_permissions');
        Permission::findOrCreate('manage_projects');

        // create roles and assign existing permissions
        $superAdmin = Role::findOrCreate('Super Admin');

        $admin = Role::findOrCreate('Admin');
        $admin->givePermissionTo('view_admin_panel');
        $admin->givePermissionTo('manage_projects');

        $userRole = Role::findOrCreate('User');
    }
}
