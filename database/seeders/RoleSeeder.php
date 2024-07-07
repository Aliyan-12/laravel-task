<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        call_user_func([$this, 'seedPermissions'], []);
        call_user_func([$this, 'seedRoles'], []);
        
    }

    private function seedPermissions() {
        \Spatie\Permission\Models\Permission::create(['name' => 'view provinces']);
        \Spatie\Permission\Models\Permission::create(['name' => 'create provinces']);
        \Spatie\Permission\Models\Permission::create(['name' => 'edit provinces']);
        \Spatie\Permission\Models\Permission::create(['name' => 'delete provinces']);
        \Spatie\Permission\Models\Permission::create(['name' => 'view divisions']);
        \Spatie\Permission\Models\Permission::create(['name' => 'create divisions']);
        \Spatie\Permission\Models\Permission::create(['name' => 'edit divisions']);
        \Spatie\Permission\Models\Permission::create(['name' => 'delete divisions']);
        \Spatie\Permission\Models\Permission::create(['name' => 'view districts']);
        \Spatie\Permission\Models\Permission::create(['name' => 'create districts']);
        \Spatie\Permission\Models\Permission::create(['name' => 'edit districts']);
        \Spatie\Permission\Models\Permission::create(['name' => 'delete districts']);
        \Spatie\Permission\Models\Permission::create(['name' => 'view tehsils']);
        \Spatie\Permission\Models\Permission::create(['name' => 'create tehsils']);
        \Spatie\Permission\Models\Permission::create(['name' => 'edit tehsils']);
        \Spatie\Permission\Models\Permission::create(['name' => 'delete tehsils']);
        \Spatie\Permission\Models\Permission::create(['name' => 'view unionCouncils']);
        \Spatie\Permission\Models\Permission::create(['name' => 'create unionCouncils']);
        \Spatie\Permission\Models\Permission::create(['name' => 'edit unionCouncils']);
        \Spatie\Permission\Models\Permission::create(['name' => 'delete unionCouncils']);
        \Spatie\Permission\Models\Permission::create(['name' => 'view houses']);
        \Spatie\Permission\Models\Permission::create(['name' => 'create houses']);
        \Spatie\Permission\Models\Permission::create(['name' => 'edit houses']);
        \Spatie\Permission\Models\Permission::create(['name' => 'delete houses']);
        \Spatie\Permission\Models\Permission::create(['name' => 'view houseMembers']);
        \Spatie\Permission\Models\Permission::create(['name' => 'create houseMembers']);
        \Spatie\Permission\Models\Permission::create(['name' => 'edit houseMembers']);
        \Spatie\Permission\Models\Permission::create(['name' => 'delete houseMembers']);
    }

    private function seedRoles() {
        $role = \Spatie\Permission\Models\Role::create(['name' => 'admin']);
        $role->givePermissionTo(\Spatie\Permission\Models\Permission::all());

        $role = \Spatie\Permission\Models\Role::create(['name' => 'agent']);
        $role->givePermissionTo([
            'view provinces',
            'view divisions',
            'view districts',
            'view tehsils',
            'view unionCouncils',
            'view houses',
            'view houseMembers'
        ]);
    }
}
