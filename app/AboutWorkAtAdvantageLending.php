<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutWorkAtAdvantageLending extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='about_work_at_advantage_lendings';
}
        