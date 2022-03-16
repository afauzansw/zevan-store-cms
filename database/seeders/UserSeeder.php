<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->insert([
            'id' => 1,
            'name' => 'Ahmad Fauzan',
            'email' => 'fauzan@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::factory()->count(4)->create();
    }
}
