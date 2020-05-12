<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class YOUARENOTALONE extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='you_are_not_alones';
}
        