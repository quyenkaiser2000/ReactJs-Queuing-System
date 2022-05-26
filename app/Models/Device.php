<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $table = 'devices';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function deviceDetails(){
        return $this->hasMany(DeviceDetail::class, 'device_id','id');
    }
    public function deviceCategory(){
        return $this->belongsTo(DeviceCategory::class,'device_category_id','id');
    }
}
