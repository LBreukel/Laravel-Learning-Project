<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
//        app()['cache']->forget['spatie.permission.cache'];

        // Create Permissions
        // Cooking
        Permission::create(['name' => 'create cooking']);
        Permission::create(['name' => 'edit cooking']);
        Permission::create(['name' => 'delete cooking']);

        // Alchemy
        Permission::create(['name' => 'create alchemy']);
        Permission::create(['name' => 'edit alchemy']);
        Permission::create(['name' => 'delete alchemy']);

        // Gear
        Permission::create(['name' => 'create gear']);
        Permission::create(['name' => 'edit gear']);
        Permission::create(['name' => 'delete gear']);

        // Horse
        Permission::create(['name' => 'create horse']);
        Permission::create(['name' => 'edit horse']);
        Permission::create(['name' => 'delete horse']);

        // Enhancing
        Permission::create(['name' => 'create enhancing']);
        Permission::create(['name' => 'edit enhancing']);
        Permission::create(['name' => 'delete enhancing']);

        // Boss
        Permission::create(['name' => 'create boss']);
        Permission::create(['name' => 'edit boss']);
        Permission::create(['name' => 'delete boss']);

        // create roles and assign created permissions
        // admin
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
    }
}
