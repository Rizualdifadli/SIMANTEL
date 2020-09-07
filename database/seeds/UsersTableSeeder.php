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
        $adminmersamRole = Role::where('name','adminmersam')->first();
        $adminbulianRole = Role::where('name','adminbulian')->first();
        $adminbajubangRole = Role::where('name','adminbajubang')->first();
        $adminbatinRole = Role::where('name','adminbatin')->first();
        $adminpemayungRole = Role::where('name','adminpemayung')->first();
        $admintembesiRole = Role::where('name','admintembesi')->first();
        $adminsebouluRole = Role::where('name','adminseboulu')->first();
        $adminseboilirRole = Role::where('name','adminseboilir')->first();
        $userRole = Role::where('name','user')->first();

        $admin=User::create(['name'=>'Admin User',
        	'password'=>Hash::make('password')
    ]);
         $adminmersam=User::create(['name'=>'Admin Mersam',
        	'password'=>Hash::make('password')
    ]);
          $adminbulian=User::create(['name'=>'Admin Bulian',
        	'password'=>Hash::make('password')
    ]);
          $adminbajubang=User::create(['name'=>'Admin Bajubang',
          'password'=>Hash::make('password')
    ]);
          $adminbatin=User::create(['name'=>'Admin Batin',
          'password'=>Hash::make('password')
    ]);
          $adminpemayung=User::create(['name'=>'Admin Pemayung',
          'password'=>Hash::make('password')
    ]);
          $admintembesi=User::create(['name'=>'Admin Tembesi',
          'password'=>Hash::make('password')
    ]);
          $adminseboulu=User::create(['name'=>'Admin Sebo Ulu',
          'password'=>Hash::make('password')
    ]);
          $adminseboilir=User::create(['name'=>'Admin Sebo Ilir',
          'password'=>Hash::make('password')
    ]);
          $user=User::create(['name'=>'User',
          'password'=>Hash::make('password')
    ]);

    $admin->roles()->attach($adminRole);
    $adminmersam->roles()->attach($adminmersamRole);
    $adminbulian->roles()->attach($adminbulianRole);
    $adminbajubang->roles()->attach($adminbajubangRole);
    $adminbatin->roles()->attach($adminbatinRole);
    $adminpemayung->roles()->attach($adminpemayungRole);
    $admintembesi->roles()->attach($admintembesiRole);
    $adminseboulu->roles()->attach($adminsebouluRole);
    $adminseboilir->roles()->attach($adminseboilirRole);
    $user->roles()->attach($userRole);
    }
}
