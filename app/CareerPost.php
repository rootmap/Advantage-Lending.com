<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CareerPost extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='career_posts';
}
        