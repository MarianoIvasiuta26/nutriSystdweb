<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Administrador']);
        $role2 = Role::create(['name' => 'Nutricionista']);
        $role3 = Role::create(['name' => 'Paciente']);

        $permission = Permission::create(['name' => 'solicitar turno']);
        $permission = Permission::create(['name' => 'ver turnos disponibles']);
        $permission = Permission::create(['name' => 'ver historia clinica']);
        $permission = Permission::create(['name' => 'completar historia clinica']);

        $role3->givePermissionTo(Permission::all());
        

        $permission = Permission::create(['name' => 'crud fuente de información']);
        $permission = Permission::create(['name' => 'crud grupo de alimentos']);
        $permission = Permission::create(['name' => 'crud valores nutricionales']);
        $permission = Permission::create(['name' => 'crud alimentos']);
    }
}
