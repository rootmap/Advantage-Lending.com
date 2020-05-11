<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResourceContent extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='resource_contents';
}
        