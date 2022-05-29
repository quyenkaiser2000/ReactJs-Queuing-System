<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
            'name' => 'Admin',
            'chucnang' => 'Admin',
            'decription' => 'Toàn quyền',

        ]);
        Role::create([
            'name' => 'Kế toán',
            'chucnang' => 'Kế toán',
            'decription' => 'Thống kê và kiểm toán',
        ]);
        Role::create([
            'name' => 'Bác sĩ',
            'chucnang' => 'Bác sĩ',
            'decription' => 'In số và dịch vụ',
        ]);
        Role::create([
            'name' => 'Lễ tân',
            'chucnang' => 'Lễ tân',
            'decription' => 'In số cho khách hàng',
        ]);
        Role::create([
            'name' => 'Quản lý',
            'chucnang' => 'Quản lý',
            'decription' => 'Toàn quyền',
        ]);
        Role::create([
            'name' => 'user',
            'chucnang' => 'user',
            'decription' => 'Chỉ in số',
        ]);
    }
}
