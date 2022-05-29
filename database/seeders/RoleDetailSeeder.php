<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\RoleDetail;
class RoleDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        RoleDetail::create([
            'role_id' => '1',
            'chucnang_1' => 'Xem thiết bị',
            'chucnang_2' => 'Thêm thiết bị',
            'chucnang_3' => 'Cập nhật thiết bị',
            'chucnang_4' => 'Xem dịch vụ',
            'chucnang_5' => 'Cập nhật dịch vụ',
            'chucnang_6' => 'Thêm dịch vụ',
            'chucnang_7' => 'Cấp số',
            'chucnang_8' => 'Xem chi tiết cấp số',
            'chucnang_9' => 'Báo cáo',
            'chucnang_10' => 'Quản lý vai trò',
            'chucnang_11' => 'Quản lý tài khoản',
            'chucnang_12' => 'Quản lý người dùng',
        ]);
        RoleDetail::create([
            'role_id' => '2',
            'chucnang_9' => 'Báo cáo',
        ]);
        RoleDetail::create([
            'role_id' => '3',
            'chucnang_4' => 'Xem dịch vụ',
            'chucnang_5' => 'Cập nhật dịch vụ',
            'chucnang_6' => 'Thêm dịch vụ',
            'chucnang_8' => 'Xem chi tiết cấp số',
        ]);
        RoleDetail::create([
            'role_id' => '4',
            'chucnang_7' => 'Cấp số',
            'chucnang_8' => 'Xem chi tiết cấp số',
        ]);
        RoleDetail::create([
            'role_id' => '5',
            'chucnang_1' => 'Xem thiết bị',
            'chucnang_2' => 'Thêm thiết bị',
            'chucnang_3' => 'Cập nhật thiết bị',
            'chucnang_4' => 'Xem dịch vụ',
            'chucnang_5' => 'Cập nhật dịch vụ',
            'chucnang_6' => 'Thêm dịch vụ',
            'chucnang_7' => 'Cấp số',
            'chucnang_8' => 'Xem chi tiết cấp số',
            'chucnang_9' => 'Báo cáo',
        ]);
        RoleDetail::create([
            'role_id' => '6',
            'chucnang_7' => 'Cấp số',
        ]);
        
    }
    
}
