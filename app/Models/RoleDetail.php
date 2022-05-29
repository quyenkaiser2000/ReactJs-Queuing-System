<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleDetail extends Model
{
    use HasFactory;
    protected $table = 'role_details';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function role(){
        return $this->belongsTo(Role::class,'role_id','id');
    }
    public function userroledetails(){
        return $this->hasMany(UserRoleDetail::class, 'role_detail_id','id');
    }
}
