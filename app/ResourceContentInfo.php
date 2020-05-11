<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResourceContentInfo extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='resource_content_infos';
}
        