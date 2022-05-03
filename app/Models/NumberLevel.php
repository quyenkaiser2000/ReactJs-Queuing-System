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
}
