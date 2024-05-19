<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name'    => 'Clerison',
            'last_name'     => 'Oliveira',
            'email'         => 'cosclerison@gmail.com',
            'password'      => bcrypt('clerison')
        ]);
    }
}
