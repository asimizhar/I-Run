<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisplayFood extends Model
{
    protected $table = ['foods'];
    protected $fillable = ['id','status'];
}
