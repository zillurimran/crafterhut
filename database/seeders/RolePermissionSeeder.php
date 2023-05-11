<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create roles
       
        $roleAdmin = Role::create(['name' => 'admin']);

        //create permissions
        $permissions = [
            //dashboard permission
            'show',
            'create',
            'edit',
            'delete'

        ];

        //assign permissions
       
        for($i=0; $i < count($permissions); $i++){
            $permission = Permission::create(['name' => $permissions[$i]]);
            $permission->assignRole($roleAdmin);
        }
    }
}
