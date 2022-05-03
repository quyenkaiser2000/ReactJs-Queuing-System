<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceCategory extends Model
{
    use HasFactory;

    protected $table = 'device_categories';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
