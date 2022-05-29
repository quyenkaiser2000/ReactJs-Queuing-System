<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',


        'avatar',
        'phone',
        'role_id',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role() {
        return $this->belongsTo(Role::class,'role_id','id');
    }
    public function userdiarys(){
        return $this->hasMany(UserDiary::class, 'user_id','id');
    }
    public function userroledetails(){
        return $this->hasMany(UserRoleDetail::class, 'user_id','id');
    }
    public function usernumberleveldetails(){
        return $this->hasMany(UserNumberlevelDetail::class, 'user_id','id');
    }
    public function numberlevels(){
        return $this->hasMany(NumberLevel::class, 'user_id','id');
    }
}