<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('profiles')->insert([
            [
                'name'=>'Profile1',
                'email'=>'Profile1@gmailcom',
                'password'=>Hash::make(1234),
                'bio'=>"test 1",
                'image'=>'https://tse4.mm.bing.net/th/id/OIP.xHNVG57HZsD1xDjXja_QfwHaHa?rs=1&pid=ImgDetMain&o=7&rm=3',

            ],
            [
                'name'=>'Profile2',
                'email'=>'Profile2@gmailcom',
                'password'=>Hash::make(1234),
                'bio'=>"test 2",
                'image'=>'https://tse4.mm.bing.net/th/id/OIP.xHNVG57HZsD1xDjXja_QfwHaHa?rs=1&pid=ImgDetMain&o=7&rm=3',

            ]
        ]);
        Profile::factory(200)->create();

        Profile::create([
            'name'=>'profile3',
            'email'=>'profile3@gmail.com',
            'password'=>Hash::make('1234'),
            'bio'=>"test 3",
            'image'=>'https://tse4.mm.bing.net/th/id/OIP.xHNVG57HZsD1xDjXja_QfwHaHa?rs=1&pid=ImgDetMain&o=7&rm=3',
        ]);
    }
}
