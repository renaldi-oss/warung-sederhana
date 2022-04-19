<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Reynaldi Fakhri Pratama',
            'username' => 'Aldi',
            'email' => 'Reynaldifp2000@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
