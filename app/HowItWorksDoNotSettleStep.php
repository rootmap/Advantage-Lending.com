<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HowItWorksDoNotSettleStep extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='how_it_works_do_not_settle_steps';
}
        