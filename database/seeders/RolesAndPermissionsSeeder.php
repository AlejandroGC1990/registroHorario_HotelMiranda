<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles
        $admin = Role::create(['name' => 'admin']);
        $employee = Role::create(['name' => 'employee']);

        // Permisos
        Permission::create(['name' => 'create_entries']);
        Permission::create(['name' => 'edit_entries']);

        // Asignar permisos a roles
        $admin->givePermissionTo(['create_entries', 'edit_entries']);
        $employee->givePermissionTo('create_entries');

    }
}
