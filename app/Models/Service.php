<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function deviceDetails(){
        return $this->hasMany(DeviceDetail::class, 'service_id','id');
    }
    public function numberlevels(){
        return $this->hasMany(NumberLevel::class,'service_id','id');
    }
}
