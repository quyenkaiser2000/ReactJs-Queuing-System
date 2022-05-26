<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceDetail extends Model
{
    use HasFactory;

    protected $table = 'device_details';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function device(){
        return $this->belongsTo(Device::class,'device_id','id');
    }
    public function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
}
