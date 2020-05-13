<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HowItWorkSecuringTheMoney extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='how_it_work_securing_the_moneies';
}
        