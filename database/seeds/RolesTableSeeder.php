<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'adminmersam']);
        Role::create(['name'=>'adminbulian']);
        Role::create(['name'=>'adminbatin']);
        Role::create(['name'=>'adminpemayung']);
        Role::create(['name'=>'adminseboulu']);
        Role::create(['name'=>'adminseboilir']);
        Role::create(['name'=>'adminbajubang']);
        Role::create(['name'=>'admintembesi']);
        Role::create(['name'=>'user']);
    }
}
