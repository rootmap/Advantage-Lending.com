<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FundingYouNeed extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='funding_you_needs';
}
        