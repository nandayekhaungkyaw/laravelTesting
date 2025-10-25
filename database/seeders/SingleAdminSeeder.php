<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SingleAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::updateOrCreate(
            ['email' => 'nandayekhaungkyaw@gmail.com'],
            [
                'name' => 'Admin Owner',
                'password' => Hash::make('12345678'), // client can change later
                'is_admin' => true,
            ]
        );
    }
}
