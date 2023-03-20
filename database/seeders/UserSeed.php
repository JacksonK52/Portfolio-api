<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'slug' => 'super_-_admin-'.rand(1000, 9999).'-'.time(),
                'name' => 'Super-admin',
                'email' => 'superadmin@portfolio.com',
                'password' => bcrypt('superadmin123'),
                'img_path' => '/images/superadmin.png',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        User::insert($users);
    }
}
