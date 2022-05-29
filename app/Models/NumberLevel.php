<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumberLevel extends Model
{
    use HasFactory;

    protected $table = 'numberlevels';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
    public function usernumberleveldetails(){
        return $this->hasMany(UserNumberlevelDetail::class, 'numberlevel_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
