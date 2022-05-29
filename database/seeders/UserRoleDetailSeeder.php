<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\RoleDetail;
use App\Models\UserRoleDetail;
class UserRoleDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UserRoleDetail::create([
            'user_id' => '1',
            'role_detail_id' => '1',
        ]);
        UserRoleDetail::create([
            'user_id' => '2',
            'role_detail_id' => '2',
        ]);
        UserRoleDetail::create([
            'user_id' => '3',
            'role_detail_id' => '3',
        ]);
        UserRoleDetail::create([
            'user_id' => '4',
            'role_detail_id' => '4',
        ]);
        UserRoleDetail::create([
            'user_id' => '5',
            'role_detail_id' => '5',
        ]);
        UserRoleDetail::create([
            'user_id' => '6',
            'role_detail_id' => '6',
        ]);
        
    }
    
}
