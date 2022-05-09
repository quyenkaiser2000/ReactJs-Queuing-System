<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
                'name' => 'admin',
                'username' => 'admin@gmail.com',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123123123'),
                'avatar' => null,
                'role_id' => 1,
                'phone' =>null,
            
        ]); 
        User::create([ 
            'name' => 'user',
            'username' => 'user@gmail.com',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123123123'),
            'avatar' => null,
            'role_id' => 2,
            'phone' =>null,
        
    ]); User::create([ 
        'name' => 'Tấn Quyền',
        'username' => 'tanquyenhutech2000@gmail.com',
        'email' => 'tanquyenhutech2000@gmail.com',
        'password' => Hash::make('123123123'),
        'avatar' => null,
        'role_id' => 2,
        'phone' =>null,
    
    ]); 
    }
}
