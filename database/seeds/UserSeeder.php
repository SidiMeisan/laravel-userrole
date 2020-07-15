<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Super Admin',
            'email' => 'Super.Admin@Admin.com',
            'password' => bcrypt('123456'),
            'jabatan' => 'super-admin',
        ]);

        User::create([
            'name' => 'Super Admin 2',
            'email' => 'Super.Admin2@Admin.com',
            'password' => bcrypt('123456'),
            'jabatan' => 'super-admin',
        ]);
        

        User::create([
            'name' => 'Admin',
            'email' => 'Admin@Admin.com',
            'password' => bcrypt('123456'),
            'jabatan' => 'admin',
        ]);

        User::create([
            'name' => 'Peminjam 01',
            'email' => 'Peminjam01@Peminjam.com',
            'password' => bcrypt('123456'),
            'jabatan' => 'peminjam',
        ]);

        User::create([
            'name' => 'Peminjam 02',
            'email' => 'Peminjam02@Peminjam.com',
            'password' => bcrypt('123456'),
            'jabatan' => 'peminjam',
        ]);
    }
}
