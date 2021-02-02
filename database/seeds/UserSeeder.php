<?php

use App\User;
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
        User::create([
            'employee_id' => null,
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234')
        ])->assignRole('Administrator');

        User::create([
            'employee_id' => null,
            'username' => 'pegawai',
            'email' => 'pegawai@gmail.com',
            'password' => Hash::make('1234')
        ])->assignRole('Pegawai');
    }
}
