<?php

namespace Database\Seeders;
use App\Models\User;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

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

        	'name' => 'Incrisz Godwin', 

        	'email' => 'incrisz4luv@gmail.com',

        	'password' => bcrypt('1ncrease')

        ]);

  

        $role = Role::create(['name' => 'Admin']);

   

        $permissions = Permission::pluck('id','id')->all();

  

        $role->syncPermissions($permissions);

   

        $user->assignRole([$role->id]);
    }
}
