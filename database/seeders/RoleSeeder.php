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
        
    }
}
