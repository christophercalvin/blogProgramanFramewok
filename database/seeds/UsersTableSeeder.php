<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $adminUser=[
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
        ];

        $pembacaUser=[
            'name' => 'Calvin',
            'email' => 'user@example.com',
            'password' => bcrypt('user'),
        ];

        if(!User::where('email', $adminUser['email'])->exists()){
            User::create($adminUser);
        }

        if(!User::where('email', $pembacaUser['email'])->exists()){
            User::create($pembacaUser);
        }
    }
}
