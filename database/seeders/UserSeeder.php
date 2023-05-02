<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::first()) {
            $user = new User();
            $user->name = 'Avijit Acharjee';
            $user->email = 'avijitach@gmail.com';
            $user->password = Hash::make('654321');
            $user->save();
        }
    }
}
