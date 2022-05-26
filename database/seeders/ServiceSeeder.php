<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Service::create([
            'code_service' => '201',
            'name' => 'Khám tim mạch',
            'content' => 'Chuyên các bệnh lý về tim',
            'status' => '1',
            'up_auto' => '1',
            'prefix' => '1',
            'surfix' => '1',
            'reset_day' => '1',
        ]);
        Service::create([
            'code_service' => '202',
            'name' => 'Khám sản phụ khoa',
            'content' => 'Chuyên các chức vụ về sản phụ',
            'status' => '1',
            'up_auto' => '1',
            'prefix' => '1',
            'surfix' => '1',
            'reset_day' => '1',
        ]);
    }
}
