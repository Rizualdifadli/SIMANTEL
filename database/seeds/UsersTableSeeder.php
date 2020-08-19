<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $adminRole = Role::where('name','admin')->first();
        $adminbRole = Role::where('name','adminb')->first();
        $userRole = Role::where('name','user')->first();

        $admin=User::create(['name'=>'Admin User',
        	'password'=>Hash::make('password')
    ]);
         $adminb=User::create(['name'=>'Adminb User',
        	'password'=>Hash::make('password')
    ]);
          $user=User::create(['name'=>'User',
        	'password'=>Hash::make('password')
    ]);

    $admin->roles()->attach($adminRole);
    $adminb->roles()->attach($adminbRole);
    $user->roles()->attach($userRole);
    }
}
