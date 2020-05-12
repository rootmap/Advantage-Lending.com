<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BetterDaysStart extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='better_days_starts';
}
        