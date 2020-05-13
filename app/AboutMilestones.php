<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutMilestones extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='about_milestoneses';
}
        