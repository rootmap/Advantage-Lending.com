<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StateSpecificLicenses extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='state_specific_licenseses';
}
        