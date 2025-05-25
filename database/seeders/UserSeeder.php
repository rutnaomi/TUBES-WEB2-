<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Mockery\Generator\StringManipulation\Pass\Pass;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'name' => 'Rut Naomi Ester Sitompul',
            'username' => 'F55123057',
            'password' => Hash::make('12345678'),
            'role' => 'mahasiswa',
        ]);

        User::create([
            'name' => 'Jessica Andryani',
            'username' => 'F55123051',
            'password' => Hash::make('12121212'),
            'role' => 'mahasiswa',
        ]);

        User::create([
            'name' => 'Dosen Web Programming',
            'username' => 'dosen',
            'password' => Hash::make('09876543'),
            'role' => 'dosen',
        ]);

        User::create([
            'name' => 'Laras PMMDN',
            'username' => 'pmmdn1',
            'password' => Hash::make('00000000'),
            'role' => 'pmmdn',
        ]);

    }
}
