<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ForAttorneyKnownandRecognized extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='for_attorney_known_and_recognizeds';
}
        