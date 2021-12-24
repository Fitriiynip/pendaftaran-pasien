<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;
use App\Models\Role;
class UsersSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat sample role
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "administrator";
        $adminRole->save(); 

        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "member";
        $memberRole->save(); 


        // membuat sample admin
        $admin = new User();
        $admin->name = 'fitriyaniputri';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('12345678');
        $admin->save();
        $admin->attachRole($adminRole);

        //membuat sample member
        $member = new User();
        $member->name = 'adit';
        $member->email = 'member@gmail.com';
        $member->password = Hash::make('12345678');
        $member->save();
        $member->attachRole($memberRole);


    }
}

