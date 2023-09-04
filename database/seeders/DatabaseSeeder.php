<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama_depan' => 'Dennisse',
                'nama_belakang' => 'Marcellino',
                'username' => 'Dennisse',
                'profesi' => 'Designer Baju',
                'alamat' => 'Lawang, Malang, Jawa Timur',
                'kode_pos' => '65211',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'no_hp' => '+(62) 8596 3176 010',
                'status' => 'aktif',
            ],
            [
                'nama_depan' => 'Yanuardy',
                'nama_belakang' => 'myyy',
                'username' => 'User',
                'profesi' => 'Designer Baju',
                'alamat' => 'Lawang, Malang, Jawa Timur',
                'kode_pos' => '65211',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'no_hp' => '0283402049',
                'status' => 'aktif',
            ],



        ]);

    }
}
