<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutMedia extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='about_medias';
}
        