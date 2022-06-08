<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $permissions = [
        //     'role-list',
        //     'role-create',
        //     'role-edit',
        //     'role-delete',
        //     'product-list',
        //     'product-create',
        //     'product-edit',
        //     'product-delete'
        //  ];

        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'paquetes-list',
            'paquetes-create',
            'paquetes-edit',
            'paquetes-delete',
            'destijno-list',
            'destijno-create',
            'destijno-edit',
            'destijno-delete'
         ];

         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
