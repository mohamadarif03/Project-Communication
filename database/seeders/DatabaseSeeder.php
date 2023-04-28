<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('roles')->insert([
            'name' => 'Admin',
        ]);
        $roles = array(
            "Chief",
            "Head Finance",
            "Head Marketing",
            "Head Production",
            "Sales Manager",
            "Marketing Manager",
            "Product Manager",
            "Service Manager",
            "Facilities Manager",
            "Writer",
            "Senior Gamedesigner",
            "Medior Gamedesigner",
            "Junior Gamedesigner",
            "Senior Productdesigner",
            "Medior Productdesigner",
            "Junior Productdesigner",
            "Senior Experience Designer",
            "Medior Experience Designer",
            "Junior Experience Designer"
        );
        
        foreach($roles as $role){
            DB::table('roles')->insert([
                'name' => $role,
            ]);
        }
        
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 1,
            'profile' => 'profile/default.png',
        ]);
        DB::table('user_roles')->insert([
            'user_id' => '1',
            'role_id' => '1',
        ]);
    }
}
