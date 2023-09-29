<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

//Creando Roles -----------------------------------
        $RoleAdmin=Role::create(['name'=>'Admin']);
        $RoleUser=Role::create(['name'=>'User']);

//Asignando Permisos a los roles
        Permission::create(['name'=>'user.index'])->assignRole($RoleAdmin,);
        Permission::create(['name'=>'user.create'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'user.show'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'profile.edit'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'profile.update'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'profile.destroy'])->assignRole($RoleAdmin);

        Permission::create(['name'=>'apiaries.index'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'apiaries.create'])->assignRole($RoleAdmin);

        Permission::create(['name'=>'apiaries.show'])->syncRoles([$RoleAdmin, $RoleUser]);
        Permission::create(['name'=>'apiaries.edit'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'apiaries.update'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'apiaries.destroy'])->assignRole($RoleAdmin);

        Permission::create(['name'=>'hives.index'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'hives.create'])->assignRole($RoleAdmin);

        Permission::create(['name'=>'hives.show'])->syncRoles([$RoleAdmin, $RoleUser]);
        Permission::create(['name'=>'hives.edit'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'hives.update'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'hives.destroy'])->assignRole($RoleAdmin);

        Permission::create(['name'=>'devices.index'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'devices.create'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'devices.show'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'devices.edit'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'devices.update'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'devices.destroy'])->assignRole($RoleAdmin);

        Permission::create(['name'=>'variables.index'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'variables.create'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'variables.show'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'variables.edit'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'variables.update'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'variables.destroy'])->assignRole($RoleAdmin);

        Permission::create(['name'=>'data.index'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'data.create'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'data.store'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'data.show'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'data.edit'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'data.update'])->assignRole($RoleAdmin);
        Permission::create(['name'=>'data.destroy'])->assignRole($RoleAdmin);

//assignRole ASOCIA UN PERMISO CON UN ROL NO SIRVE PARA ENLAZAR VARIOS ROLES PARA estos casos existe: syncRoles


    }
}
