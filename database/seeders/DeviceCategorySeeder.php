<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DeviceCategory;
class DeviceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DeviceCategory::create([
            'name' => 'Kiosk',
        ]);
        DeviceCategory::create([
            'name' => 'Display counter',
        ]);
    }
}
