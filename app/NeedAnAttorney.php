<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NeedAnAttorney extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='need_an_attorneies';
}
        