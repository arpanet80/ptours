<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Dante Ibanez Martinez',
            'email' => 'arpanet80@gmail.com',
            'password' => bcrypt('Passw0rd')
        ]);

        $role = Role::create(['name' => 'Propietario']);
        $role = Role::create(['name' => 'Jefe de Guias']);
        $role = Role::create(['name' => 'Turista']);
        $role = Role::create(['name' => 'Administrador']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
