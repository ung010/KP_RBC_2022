<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [ 
            // [
            //     'nama_user' => 'Admin',
            //     'id_user' => '1122334455',
            //     'password' => bcrypt('adminrupawan'),
            //     'level' => 1,
            // ],
            // [
            //     'nama_user' => 'Raung Kawijayan',
            //     'id_user' => '21120120140155',
            //     'password' => bcrypt('21120120140155'),
            //     'level' =>2,
            // ],
            [
                'nama_user' => 'Aldi Mulyawan',
                'id_user' => '21120119120026',
                'password' => bcrypt('21120119120026'),
                'level' =>2,
            ],
            [
                'nama_user' => 'Fauzan Zaman',
                'id_user' => '21120119140124',
                'password' => bcrypt('21120119140124'),
                'level' =>2,
            ],
            [
                'nama_user' => 'Muhammad Fahreza Isnanto',
                'id_user' => '21120120120009',
                'password' => bcrypt('21120120120009'),
                'level' =>2,
            ],
        ];
        foreach($user as $key => $value) {
            User::create($value);
        }
    }
}
