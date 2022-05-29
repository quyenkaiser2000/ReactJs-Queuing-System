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
                'status' => 1,
            
        ]);
        User::create([ 
            'name' => 'admin',
            'username' => 'admin1@gmail.com',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('123123123'),
            'avatar' => null,
            'role_id' => 1,
            'phone' =>null,
            'status' => 0,
        
    ]); 
    User::create([ 
        'name' => 'Kế toán',
        'username' => 'ketoan@gmail.com',
        'email' => 'ketoan@gmail.com',
        'password' => Hash::make('123123123'),
        'avatar' => null,
        'role_id' => 2,
        'phone' =>null,
        'status' => 1,
    
]); 
User::create([ 
    'name' => 'Kế toán',
    'username' => 'ketoan1@gmail.com',
    'email' => 'ketoan1@gmail.com',
    'password' => Hash::make('123123123'),
    'avatar' => null,
    'role_id' => 2,
    'phone' =>null,
    'status' => 1,

]);  
User::create([ 
    'name' => 'Bác sĩ',
    'username' => 'bacsi@gmail.com',
    'email' => 'bacsi@gmail.com',
    'password' => Hash::make('123123123'),
    'avatar' => null,
    'role_id' => 3,
    'phone' =>null,
    'status' => 1,

]); 
User::create([ 
    'name' => 'Bác sĩ',
    'username' => 'bacsi1@gmail.com',
    'email' => 'bacsi1@gmail.com',
    'password' => Hash::make('123123123'),
    'avatar' => null,
    'role_id' => 3,
    'phone' =>null,
    'status' => 0,

]);  
User::create([ 
    'name' => 'Lễ tân',
    'username' => 'letan@gmail.com',
    'email' => 'letan@gmail.com',
    'password' => Hash::make('123123123'),
    'avatar' => null,
    'role_id' => 4,
    'phone' =>null,
    'status' => 1,

]); 
User::create([ 
    'name' => 'Lễ tân',
    'username' => 'letan1@gmail.com',
    'email' => 'letan1@gmail.com',
    'password' => Hash::make('123123123'),
    'avatar' => null,
    'role_id' => 4,
    'phone' =>null,
    'status' => 1,

]);
User::create([ 
    'name' => 'Quản lý',
    'username' => 'quanly@gmail.com',
    'email' => 'quanly@gmail.com',
    'password' => Hash::make('123123123'),
    'avatar' => null,
    'role_id' => 5,
    'phone' =>null,
    'status' => 1,

]); 
User::create([ 
    'name' => 'Quản lý',
    'username' => 'quanly1@gmail.com',
    'email' => 'quanly1@gmail.com',
    'password' => Hash::make('123123123'),
    'avatar' => null,
    'role_id' => 5,
    'phone' =>null,
    'status' => 1,

]); 
User::create([ 
    'name' => 'Nguyễn Tấn Quyền',
    'username' => 'nguyentanquyen2000@gmail.com',
    'email' => 'nguyentanquyen2000@gmail.com',
    'password' => Hash::make('123123123'),
    'avatar' => null,
    'role_id' => 6,
    'phone' =>123456789,
    'status' => 1,

]); 
User::create([ 
    'name' => 'Nguyễn Tấn Quyền',
    'username' => '1nguyentanquyen2000@gmail.com',
    'email' => '1nguyentanquyen2000@gmail.com',
    'password' => Hash::make('123123123'),
    'avatar' => null,
    'role_id' => 6,
    'phone' =>123456789,
    'status' => 1,

]); 
    }
}
