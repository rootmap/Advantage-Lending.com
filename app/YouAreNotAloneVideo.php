<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class YouAreNotAloneVideo extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='you_are_not_alone_videos';
}
        