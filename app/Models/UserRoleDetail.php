<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoleDetail extends Model
{
    use HasFactory;
    protected $table = 'user_role_details';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function roledetail(){
        return $this->belongsTo(RoleDetail::class,'role_detail_id','id');
    }
}
