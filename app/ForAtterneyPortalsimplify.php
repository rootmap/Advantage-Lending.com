<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ForAtterneyPortalsimplify extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='for_atterney_portal_simplifies';
}
        